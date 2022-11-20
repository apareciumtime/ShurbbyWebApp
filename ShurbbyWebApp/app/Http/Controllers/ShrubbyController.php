<?php

namespace App\Http\Controllers;

use App\Models\Shrubby;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class ShrubbyController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Bangkok");
        $this->middleware('auth', ['except' => ['pageShrubby','shrubbyrecommend','shrubbynewby']]);

    }
    public function shrubbyrecommend()
    {
        return view('shrubby.shrubbyrecommend')
            ->with('shrubbies',Shrubby::orderBy('like','DESC')->get());
    }

    public function shrubbynewby()
    {
        return view('shrubby.shrubbynewby')
            ->with('shrubbies',Shrubby::orderBy('created_at','DESC')->get());
    }

    public function myShrubby(){
        $userid=\Auth::user()->id;
        $shrubbies=Shrubby::where('user_id','=',$userid)->orderBy('created_at','DESC')->get();
        return view('journal.myshrubby')->with(['shrubbies'=>$shrubbies]);
    }

    public function indexCreateShrubby()
    {
        return view('shrubby.shrubbycreate');
    }

    public function myShrubbyPage(){
        $userid=\Auth::user()->id;
        $shrubbies=Shrubby::where('user_id','=',$userid)->get();
        return view('journal.myshrubby')
            ->with(["shrubbies"=>$shrubbies]);
    }

    /*
         upload image for ckeditor
         image display in shrubby
    */
    public function uploadImageShrubby(Request $request){
        if($request->hasFile('upload')){
            $fileName=time().$request->file('upload')->getClientOriginalName();
            $file_path=$request->file('upload')->storeAs('shrubby_media',$fileName,'public');
            $url='/storage/'.$file_path;

            return response()->json(['fileName'=>$fileName,'uploaded'=>1, 'url'=>$url]);
        }
    }

    public function createShrubby(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // $last_thread_id=DB::table('comments')->orderBy('thread_id','DESC')->first()->thread_id;
        $shrubby = new Shrubby;
        $shrubby->user_id=\Auth::user()->id;
        $shrubby->title=$request->title;

        $editor_data = $_POST[ 'content' ];
        $shrubby->content=$editor_data;

        $shrubby->like=0;

        $username=\Auth::user()->name;

        // send data of thread to display at threadshow.blade.php
        $editor_data = str_replace( '&', '&amp;', $editor_data );
        $data=[
            'title'=>$shrubby->title,
            'username'=>$username,
            'content'=>$editor_data
        ];

        $shrubby->save();
        $tags=$request->tags;
        $tags = explode(",",$tags);
        foreach($tags as $value){
            $checktag = Tag::where('name', '=', $value)->first();
            if($checktag==null){
                $tag = new Tag;
                $tag->name = $value;
                $tag->num_follower=0;
            }
            else{
                $tag=$checktag;
            }
            
            $shrubby->tags()->save($tag);
        }
        // return view('shrubbypage',$data);
        // return redirect('/home')->with('message','Your Shrubby has been add >w<!');
        return redirect()->route('shrubbypage',[$shrubby->id]);
    }

    public function indexEditShrubby($id)
    {
        $tags = DB::table('taggables')->where('taggable_id',$id)->get();
        $tag = '';
        foreach($tags as $tagid){
            $eachtag = Tag::where('id',$tagid->tag_id)->first();
            $tag .= strval($eachtag->name).',';
        }
        $tag = rtrim($tag, ", ");
        return view('shrubby.shrubbyupdate')
            ->with('shrubby',Shrubby::where('id',$id)->first())
            ->with('tag',$tag);
    }

    public function updateShrubby(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        
        
        Shrubby::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'user_id' => auth()->user()->id
            ]);
        
        $shrubby = Shrubby::where('id', $id)->first();

        DB::table('taggables')->where('taggable_id',$id)->delete();
        $tags=$request->tags;
        $tags = explode(",",$tags);
        foreach($tags as $value){
            $checktag = Tag::where('name', '=', $value)->first();
            if($checktag==null){
                $tag = new Tag;
                $tag->name = $value;
                $tag->num_follower=0;
            }
            else{
                $tag=$checktag;
            }

            $shrubby->tags()->save($tag);
            
        }

        // return redirect('/home')
        //     ->with('message', 'Your Shrubby has been updated!');
        return redirect()->route('shrubbypage',[$id]);
    }
    public function pageShrubby($id)
    { 
        $shrubby=Shrubby::where('id',$id)->first();
        $data['comments']=$shrubby->comments()->orderBy('id','asc')->get();
        $tags=$shrubby->tags()->get();

        // $texthtml = $shrubby->content;
        // $img = preg_match_all('/<img [^>]*src=["|\']([^"|\']+)/i', $texthtml, $image);
        // // if($image->src){

        // // }
        // dd($texthtml,$img,$image,$image[1][0]);
        // 
        return view('shrubby/shrubbypage',$data)->with('tags',$tags)
            ->with('shrubby',Shrubby::where('id',$id)->first());
    }
    public function deleteShrubby($id)
    {
        DB::table('taggables')->where('taggable_id',$id)->delete();

        $shrubby = Shrubby::where('id', $id);
        $shrubby->delete();

        return redirect('/home')
            ->with('message', 'Your Shrubby has been deleted!');
    }

   /*
        parameters
        $request : request from create comment form
        $id : shrubby id to add comment
    */
    public function commentShrubby(Request $request, $shrubbyid){
        $request->validate([
            'content' => 'required',
        ]);

        $shrubby = Shrubby::find($shrubbyid);
        $comment = new Comment;

        //if null -> this is first comment
        $isFirst=$shrubby->comments()->first();
        if($isFirst==null){
            $comment->comment_id=1;
        }
        else{
            $lastCommentID=$shrubby->comments()->orderBy('comment_id','desc')->first()->comment_id;
            $comment->comment_id=$lastCommentID+1;
        }

        $comment->user_id=\Auth::user()->id;

        $comment->content=$request->content;
        $comment->like=0;
        $comment->credit=0;
        $comment->accept=false;

        $shrubby->comments()->save($comment);

        $data['comments']=$shrubby->comments()->orderBy('id','asc')->get();
        return Redirect::back()->withMessage('your comment saved!');
    }

    public function uploadProfileIndex(){
        $user=\Auth::user();
        return view('upload-profileimage',['user'=>$user,'newimg'=>null]);
    }

    public function crop(Request $request){
        $path = 'storage/profile_images/';
        $file = $request->file('image');
        $fileName = 'UIMG'.date('Ymd').uniqid().'.jpg';
        $move = $file->move(public_path($path), $fileName);
        if(!$move){
            return response()->json(['status'=>0,'msg'=>'Something went wrong']);
        }
        else{
            $user=\Auth::user();
            $user->profile_image=$path.$fileName;
            $user->save();
            return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully','name'=>$fileName,'newimg'=>$path.$fileName]);
        }
    }
    
    public function likeShrubby($id)
    {
        $shrubby = Shrubby::find($id);
        $cntlike = $shrubby->like;
        if($shrubby->liked()){
            Shrubby::where('id', $id)
                        ->update([
                            'like' => $cntlike-1
                        ]);
            $shrubby->unlike();
            $shrubby->save();
            return response()->json(['status'=>'success','message'=>'unliked']);
        }
        else{
            Shrubby::where('id', $id)
                        ->update([
                            'like' => $cntlike+1
                        ]);
            $shrubby->like();
            $shrubby->save();
            return response()->json(['status'=>'success','message'=>'liked']);
        }
        // return Redirect::back();
    }
}
