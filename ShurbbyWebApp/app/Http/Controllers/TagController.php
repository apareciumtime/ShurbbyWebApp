<?php

namespace App\Http\Controllers;

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
        $check=DB::table('tag_user')->where('tag_id','=',$id)->where('user_id','=',$user->id)->first();
        // dd($check);
        if($check==null){
            $tagtofollow=Tag::where('id','=',$id)->first();
            $tagtofollow->num_follower+=1;
            $tagtofollow->save();
            $user->tags()->attach($tagtofollow->id);
        }
        
        $data['tags']=Tag::orderBy('id','asc')->paginate(10);
        // return view('showAllTags',$data);
        return redirect('/testfollowtag');
    }

    //user unfollow tag
    public function unfollow(Request $request,$id){
        $user=\Auth::user();
        $check=DB::table('tag_user')->where('tag_id','=',$id)->where('user_id','=',$user->id)->first();
        // dd($check);
        if($check!=null){
            $tagtofollow=Tag::where('id','=',$id)->first();
            $tagtofollow->num_follower-=1;
            $tagtofollow->save();
            $user->tags()->detach($tagtofollow->id);
        }
 
        $data['tags']=Tag::orderBy('id','asc')->paginate(10);
        // return view('showAllTags',$data);
        return redirect('/testfollowtag');
    }


    public function searchByTag(Request $request){
        $tag=Tag::where('name','=',$request->tag)->first();
        // $data=$tag->shrubbies;
        dd($tag->shrubbies);
    }
    
}
