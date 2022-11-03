<?php

namespace App\Http\Controllers;

use App\Models\Shrubby;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShrubbyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['pageShrubby','shrubbyrecommand','shrubbynewby']]);

    }
    public function shrubbyrecommand()
    {
        return view('shrubby.shrubbyrecommand');
    }

    public function shrubbynewby()
    {
        return view('shrubby.shrubbynewby');
    }

    public function createShrubby()
    {
        return view('shrubby.shrubbycreate');
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
        return view('editShrubby')
            ->with('shrubby',Shrubby::where('id',$id)->first());
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
        
        $shrubby = Shrubby::where('id', $id);
        $tags=$request->tags;
        $tags = explode(" ",$tags);
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
        $data['comments']=$shrubby->comments()->orderBy('id','asc')->get();
        return view('pageShrubby',$data)
            ->with('shrubby',Shrubby::where('id',$id)->first());
    }
    public function deleteShrubby($id)
    {
        $shrubby = Shrubby::where('id', $id);
        $shrubby->delete();

        return redirect('/home')
            ->with('message', 'Your Shrubby has been deleted!');
    }
}
