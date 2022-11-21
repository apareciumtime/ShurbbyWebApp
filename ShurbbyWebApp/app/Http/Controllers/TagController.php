<?php

namespace App\Http\Controllers;

use App\Models\Clumppy;
use App\Models\Movement;
use App\Models\Shrubby;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{

    // user follow tag
    public function follow(Request $request,$id){
        $user=\Auth::user();
        if($user!=null){
            $tagtofollow=Tag::where('id','=',$id)->first();
            if($tagtofollow!=null){
                $check=DB::table('tag_user')->where('tag_id','=',$id)->where('user_id','=',$user->id)->first();
                if($check==null){
                    $tagtofollow->num_follower+=1;
                    $tagtofollow->save();
                    $user->tags()->attach($tagtofollow->id);
                    return response()->json(['status'=>'success','message'=>'following']);
                }
                else{
                    $tagtofollow->num_follower-=1;
                    $tagtofollow->save();
                    $user->tags()->detach($tagtofollow->id);
                    return response()->json(['status'=>'success','message'=>'unfollow']);
                }
            }
        }
        return redirect()->route('home');
    }

    public function TopTagView(){
        $data['label']='แท็กยอดนิยม';
        $data['tags']=Tag::orderBy('num_follower','DESC')->get();
        $data['link_to']= route('toptagview') ;
        return view('tag.tagviewall',$data);
    }
    public function FollowTagView(){
        $data['label']='แท็กที่กำลังติดตาม';
        $data['tags']=[];
        $data['link_to']= route('followtagview') ;
        if(\Auth::user()!=null){
            $data['tags']=\Auth::user()->tags()->get();
            return view('tag.tagviewall',$data);
        }
        return redirect()->route('login');
    }
    public function TagViewAll(Request $request){
        // dd($request->label,$request->id);
        $data['label']=null;
        $data['tags']=null;
        switch ($request->label) {
            case "clumppy":
                $clumppy=Clumppy::where('id','=',$request->id)->first();
                $data['tags']=$clumppy->tags;
                $data['label']=$clumppy->name;
                $data['link_to']= route('clumppypage',$request->id) ;
                break;
            case "movement":
                $movement=Movement::where('id','=',$request->id)->first();
                $data['tags']=$movement->tags;
                $data['label']=$movement->clumppy->name;
                $data['link_to']= route('clumppypage',$movement->clumppy->id) ;
                break;
            case "shrubby":
                $shrubby=Shrubby::where('id','=',$request->id)->first();
                $data['tags']=$shrubby->tags;
                $data['label']=$shrubby->title;
                $data['link_to']= route('shrubbypage',$request->id) ;
                break;
          }
        
        return view('tag.tagviewall',$data);
    }

    public function searchByTag(Request $request){
        
        $search = $request['query']??array_keys($request->query())['0'];
        $tags=Tag::Where('name','LIKE',$search)->first();
        $shrubbies=[];
        $clumppies=[];
        if($tags->count()){
            $shrubbies=$tags->shrubbies;
            $clumppies=$tags->clumppies;
        }
        $search ="#".$tags->name;
        return  view('tag.tagsearchall')
                    ->with('shrubbies',$shrubbies)
                    ->with('clumppies',$clumppies)
                    ->with('search', $search);
    }

    public function searchAll(Request $request){
        
        $search = $request['query']??array_keys($request->query())['0'];
        $tags=Tag::Where('name','LIKE','%'.$search.'%')->get();
        //search from name
        $shrubbies=Shrubby::where('title','LIKE','%'.$search.'%')->get();
        $clumppies=Clumppy::where('name','LIKE','%'.$search.'%')->get();

        if($tags->count()){
            foreach($tags as $tag){
                $shrubbies=$tag->shrubbies->merge($shrubbies);
                $clumppies=$tag->clumppies->merge($clumppies);
            }
        }
        $search ="'".$search."'";
        return  view('tag.tagsearchall')
                    ->with('shrubbies',$shrubbies)
                    ->with('clumppies',$clumppies)
                    ->with('search', $search);
    }
    public function indexTimeline(Request $request){
        $data['posts']=[];
        if(\Auth::user()!=null){
            $data['tags']=\Auth::user()->tags()->get();
        }
        $data['shrubbies']=[];
        $data['clumppies']=[];
        if($data['tags']->count()){
            foreach($data['tags'] as $tag){
                $data['shrubbies']=$tag->shrubbies->merge($data['shrubbies']);
                $data['clumppies']=$tag->clumppies->merge($data['clumppies']);
            }
            $data['posts']=$data['shrubbies']->merge($data['clumppies'])->sortByDesc('created_at');
        }
        
        return  view('timeline.index',$data);
    }
    
}
