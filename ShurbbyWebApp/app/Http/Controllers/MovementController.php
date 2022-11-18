<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clumppy;
use App\Models\Tag;
use App\Models\Movement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MovementController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Bangkok");

    }
    
    public function createMovementPage($clumppy_id){
        $clumppy=Clumppy::where('id','=',$clumppy_id)->first();
        $user=\Auth::user();
        $lastMovement=Movement::orderBy('id','DESC')->first();
        // there is empty row from this user -> use this row to generate
        if($lastMovement!=null && $lastMovement->like==-1){
            DB::table('image_movement')->where('movement_id','=',$lastMovement->id)->delete();
            $lastMovement->update(['clumppy_id'=>$clumppy_id]);
            return view('movement.movementcreate',['movement'=>$lastMovement,'clumppy'=>$clumppy,'movement_images'=>[]]);
        }
        else{
            $movement=new Movement;
            $movement->clumppy_id=$clumppy_id;
            $movement->like=-1;
            $movement->share=-1;
            $movement->is_private=false;
            $movement->save();
            return view('movement.movementcreate',['movement'=>$movement,'clumppy'=>$clumppy,'movement_images'=>[]]);
        }
    }

    public function uploadMovementImage(Request $request){
        // dd($request);
        $movement_id=$request->movement_id; 
        $validateImageData = $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $key => $file)
            {
                $path = 'storage/movement_images/'; 
                $fileName = $file->getClientOriginalName();
                $move = $file->move(public_path($path), $fileName);
                $pathFile = $path.$fileName;
                DB::table('image_movement')->insert([
                    'movement_id'=>$movement_id,
                    'image'=>$pathFile,
                ]);

            }
        }
        $movement_images=DB::table('image_movement')->where('movement_id','=',$movement_id)->get();
        $movement=Movement::where('id','=',$movement_id)->first();
        $clumppy=Clumppy::where('id','=',$movement->clumppy_id)->first();
        
        // dd($movement_images);
        return view('movement.movementcreate',['movement'=>$movement,'clumppy'=>$clumppy,'movement_images'=>$movement_images]);
    }

    public function createMovement(Request $request,$movement_id){
        // dd($request);
        $request->validate([
            'privacy_status' => ['required'],
        ]);
        $movement=Movement::where('id','=',$movement_id)->first();
        $movement->description=$request->movement_description;
        $movement->like=0;
        $movement->share=0;
        if($request->privacy_status == '0'){
            $movement->is_private=false;
        }
        else if($request->privacy_status == '1'){
            $movement->is_private=true;
        }
        $movement->save();

        $clumppy=Clumppy::where('id','=',$movement->clumppy_id)->first();
        $tags=$request->movement_tags;
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
            
            $movement->tags()->save($tag);
            if($clumppy->tags->where('id','=',$tag->id)->count()==0){
                $clumppy->tags()->save($tag);
            }
        }

        return redirect()->route('movementpage',['movement_id'=>$movement->id]);
    }

    public function indexMovementPage($movement_id){
        $movement=Movement::where('id','=',$movement_id)->first();
        $movement_images=DB::table('image_movement')->where('movement_id','=',$movement_id)->get();
        $clumppy=Clumppy::where('id','=',$movement->clumppy_id)->first();

        return view('movement.movementpage')->with(['movement'=>$movement,'clumppy'=>$clumppy,'movement_images'=>$movement_images]);
    }

    public function likeMovement($id)
    {
        $movement = Movement::find($id);
        if($movement->liked()){
            $movement->unlike();
            $movement->save();
        }
        else{
            $movement->like();
            $movement->save();
        }
        return Redirect::back();
    }

    public function updateMovementpage($movement_id){
        $movement=Movement::where('id','=',$movement_id)->first();
        $clumppy=Clumppy::where('id','=',$movement->clumppy_id)->first();
        $movement_images=DB::table('image_movement')->where('movement_id','=',$movement_id)->get();

        $tags = DB::table('taggables')->where('taggable_id','=',$movement_id)->where('taggable_type','=','App\Models\movement')->get();
        $tag = '';
        foreach($tags as $tagid){
            $eachtag = Tag::where('id',$tagid->tag_id)->first();
            $tag .= strval($eachtag->name).',';
        }
        $tag = rtrim($tag, ", ");

        $private_status = 'สาธารณะ';
        if($movement->is_private)  $private_status = 'ส่วนตัว';

        return view('movement.movementupdate',['movement'=>$movement,'clumppy'=>$clumppy,'movement_images'=>$movement_images,
                    'tag'=>$tag,'private_status'=>$private_status]);
    }

    public function updateMovement(Request $request,$id){
        $request->validate([
            'privacy_status' => ['required'],
        ]);
        $private=false;
        if($request->privacy_status == '1'){
            $private=true;
        }
        Movement::where('id','=',$id)->update([
            'description' => $request->movement_description,
            'is_private' => $private,
        ]);

        DB::table('taggables')->where('taggable_id','=',$id)->where('taggable_type','=','App\Models\movement')->delete();
        
        $movement=Movement::where('id','=',$id)->first();
        $clumppy=Clumppy::where('id','=',$movement->clumppy_id)->first();
        $tags=$request->movement_tags;
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
            
            $movement->tags()->save($tag);
            if($clumppy->tags->where('id','=',$tag->id)->count()==0){
                $clumppy->tags()->save($tag);
            }
        }
        return redirect()->route('movementpage',['movement_id'=>$movement->id]);
    }

    public function deleteMovement($id){
        $movement=Movement::where('id','=',$id)->first();
        $clumppy=Clumppy::where('id','=',$movement->clumppy_id)->first();
        $all_movement=$clumppy->movements->where('id','!=',$movement->id);
        $movement_tags=$movement->tags;
        foreach($movement_tags as $tag){
            $tag_exist=false;
            foreach($all_movement as $movement_c){
                if($movement_c->tags->where('name','=',$tag->name)->count()>0){
                    $tag_exist=true;
                    break;
                }
            }
            if($tag_exist==false){
                $clumppy->tags()->detach($tag->id);
            }
        }
        DB::table('taggables')->where('taggable_id','=',$id)->where('taggable_type','=','App\Models\movement')->delete();
        DB::table('image_movement')->where('movement_id','=',$id)->delete();
        Movement::where('id','=',$id)->delete();
        return redirect()->route('showclumppy',[$movement->clumppy_id]);
    }

}
