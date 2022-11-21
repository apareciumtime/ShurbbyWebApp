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
        if(DB::table('tag_user')->where('tag_id','=',$tags->id)->where('user_id','=',\Auth::id())->first()!=null)
            $tag_status = 'เลิกติดตาม';
        else
            $tag_status = 'ติดตาม';
        return  view('tag.tagsearchall')
                    ->with('shrubbies',$shrubbies)
                    ->with('clumppies',$clumppies)
                    ->with('search', $search)
                    ->with('tag_id',$tags->id)
                    ->with('tag_status',$tag_status);
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
                    ->with('search', $search)
                    ->with('tag_id',null);
    }
    public function indexTimeline(Request $request){
        $data['posts']= new \Illuminate\Database\Eloquent\Collection; 
        if(\Auth::user()!=null){
            $data['tags']=\Auth::user()->tags()->get();
        }
        $data['shrubbies']=[];
        $data['clumppies']=[];
        $data['movements']=[];
        if($data['tags']->count()){
            foreach($data['tags'] as $tag){
                $data['shrubbies']=$tag->shrubbies->merge($data['shrubbies']);
                $data['clumppies']=$tag->clumppies->merge($data['clumppies']);
                $data['movements']=$tag->movements->merge($data['movements']);
            }
            $data['posts']= $data['posts']->concat($data['shrubbies']);
            $data['posts']= $data['posts']->concat($data['clumppies']);
            $data['posts']= $data['posts']->concat($data['movements']);
            $data['posts']= $data['posts']->sortByDesc('created_at');
        }
        // dd($data);
        return  view('timeline.index',$data);
    }

    public function traitFinder(Request $request){
        //save all trait to variable
        $traits=collect();
        if($request->value1!=null){
            $traits=DB::table('traits')->where('name','=',$request->value1)->get()->merge($traits);
        }
        if($request->value2!=null){
            $traits=DB::table('traits')->where('name','=',$request->value2)->get()->merge($traits);
        }
        if($request->value3!=null){
            $traits=DB::table('traits')->where('name','=',$request->value3)->get()->merge($traits);
        }
        if($request->value4!=null){
            $traits=DB::table('traits')->where('name','=',$request->value4)->get()->merge($traits);
        }
        
        $extra=$request->tags;
        if($extra!=null){
            $extra = explode(",",$extra);
        }

        //find result of 'AND'---------------------
        //create collection $concatText to keep text that concat 'title','content','tags' of all shrubby in database
        $resultAnd=Shrubby::all();
        $concatText=collect();
        foreach($resultAnd as $result){
            $tags = DB::table('taggables')->where('taggable_type','App\Models\Shrubby')->where('taggable_id',$result->id)->get();
            $tag = '';
            foreach($tags as $tagid){
                $eachtag = Tag::where('id',$tagid->tag_id)->first();
                $tag .= strval($eachtag->name).',';
            }
            $tag = rtrim($tag, ", ");
            
            $concatText->add([
                'id'=>$result->id,
                'word'=>($result->title).($result->content).$tag,
            ]);
        }

        // keep all shrubby that have all trait in title+content+tags in $resultAnd
        $resultAnd=collect();
        $resultOr=collect();
        foreach($concatText as $t){
            $haveAll=0;
            foreach($traits as $trait){
                if(strpos($t['word'], $trait->name)!=false){
                    $haveAll+=1;
                }
            }
            $sizeextra=0;
            if($extra!=null){
                foreach($extra as $ex){
                    if(strpos($t['word'], $ex)!=false){
                        $haveAll+=1;
                    }
                }
                $sizeextra=sizeof($extra);
            }
            if($haveAll==(4+$sizeextra)){
                $shrubby=Shrubby::where('id','=',$t['id'])->first();
                if(!($resultAnd->contains($shrubby))){
                    $resultAnd->add($shrubby);
                }
            }
            else if($haveAll>0){
                $shrubby=Shrubby::where('id','=',$t['id'])->first();
                if(!($resultOr->contains($shrubby))){
                    $resultOr->add($shrubby);
                }
            }
        }

        $resultAnd=$resultAnd->sortByDesc('like');

        $resultOr=$resultOr->sortByDesc('like');

        $resultAll=$resultAnd->merge($resultOr);
        
        return  view('tag.tagsearchall')
                    ->with('shrubbies',$resultAll)
                    ->with('clumppies',[])
                    ->with('search', 'traitFinder')
                    ->with('tag_id',null);
    
    }
}
