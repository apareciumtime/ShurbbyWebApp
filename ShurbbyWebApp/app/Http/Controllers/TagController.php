<?php

namespace App\Http\Controllers;

use App\Models\Clumppy;
use App\Models\Shrubby;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    //

    public function indexSearchTag(){
        return view('testSearchTag');
    }

    public function indexTagFollowTest(){
        $data['tags']=Tag::orderBy('id','asc')->paginate(10);
        return view('showAllTags',$data);
    }

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
                }
                else{
                    $tagtofollow->num_follower-=1;
                    $tagtofollow->save();
                    $user->tags()->detach($tagtofollow->id);
                }
            }
        }
        return redirect()->route('home');
    }

    //user unfollow tag
    // public function unfollow(Request $request,$id){
    //     $user=\Auth::user();
    //     $check=DB::table('tag_user')->where('tag_id','=',$id)->where('user_id','=',$user->id)->first();
    //     // dd($check);
    //     if($check!=null){
    //         $tagtofollow=Tag::where('id','=',$id)->first();
    //         $tagtofollow->num_follower-=1;
    //         $tagtofollow->save();
    //         $user->tags()->detach($tagtofollow->id);
    //     }
 
    //     $data['tags']=Tag::orderBy('id','asc')->paginate(10);
    //     // return view('showAllTags',$data);
    //     return redirect('/testfollowtag');
    // }


    public function searchByTag(Request $request){
        
        $search = $request['query']??array_keys($request->query())['0'];
        $tags=Tag::Where('name','LIKE',$search)->first();
        $shrubbies=[];
        $clumppies=[];
        if($tags->count()){
            $shrubbies=$tags->shrubbies;
            $clumppies=$tags->clumppies;
        }
        return  view('shrubby.shrubbynewby')
                    ->with('shrubbies',$shrubbies)
                    ->with('clumppies',$clumppies);
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
        return  view('shrubby.shrubbynewby')
                    ->with('shrubbies',$shrubbies)
                    ->with('clumppies',$clumppies);
    }
    
}
