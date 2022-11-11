<?php

namespace App\Http\Controllers;

use App\Models\Shrubby;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ShrubbyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['pageShrubby','shrubbyrecommand','shrubbynewby']]);

    }
    public function shrubbyrecommand()
    {
        return view('shrubby.shrubbyrecommand')
            ->with('shrubbies',Shrubby::orderBy('like','DESC')->get());
    }

    public function shrubbynewby()
    {
        return view('shrubby.shrubbynewby')
            ->with('shrubbies',Shrubby::orderBy('updated_at','DESC')->get());
    }

    public function createShrubby()
    {
        return view('shrubby.shrubbycreate');
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

    public function create(Request $request)
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
        $shrubby->share=0;

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
        // return view('showShrubby',$data);
        // return redirect('/home')->with('message','Your Shrubby has been add >w<!');
        return redirect()->route('showShrubby',[$shrubby->id]);
    }

    public function editShrubby($id)
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
        return redirect()->route('showShrubby',[$id]);
    }
    public function pageShrubby($id)
    { 
        $shrubby=Shrubby::where('id',$id)->first();
        //$data['comments']=$shrubby->comments()->orderBy('id','asc')->get();
        $tags=$shrubby->tags()->get();
        return view('shrubby/shrubbypage'/*,$data*/)->with('tags',$tags)
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

}
