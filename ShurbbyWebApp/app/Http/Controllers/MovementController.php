<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clumppy;
use App\Models\Movement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MovementController extends Controller
{
    public function createMovementPage($clumppy_id){
        $clumppy=Clumppy::where('id','=',$clumppy_id)->first();
        $user=\Auth::user();
        $lastMovement=Movement::where('user_id','=',$user->id)->orderBy('id','DESC')->first();
        // there is empty row from this user -> use this row to generate
        if($lastMovement!=null && $lastMovement->like==-1){
            DB::table('image_movement')->where('movement_id','=',$lastMovement->id)->delete();
            $lastMovement->update(['clumppy_id'=>$clumppy_id]);
            return view('movement.movementcreate',['movement'=>$lastMovement,'clumppy'=>$clumppy]);
        }
        else{
            $movement=new Movement;
            $movement->clumppy_id=$clumppy_id;
            $movement->like=-1;
            $movement->share=-1;
            $movement->is_private=false;
            $movement->save();
            return view('movement.movementcreate',['movement'=>$movement,'clumppy'=>$clumppy]);
        }
    }

    public function createMovement(Request $request,$movement_id){
        // $request->validate([
            // 'privacy_status' => ['required'],
        // ]);
        $movement=Movement::where('id','=',$movement_id)->first();
        $movement->description=$request->description;
        $movement->like=0;
        $movement->share=0;
        // if($request->privacy_status == 'public'){
        //     $movement->is_private=false;
        // }
        // else if($request->privacy_status == 'private'){
        //     $movement->is_private=true;
        // }
        $movement->save();

        // $clumppy=Clumppy::where('id','=',$movement->clumppy_id)->first();
        // $tags=$request->tags;
        // $tags = explode(",",$tags);
        // foreach($tags as $value){
        //     $checktag = Tag::where('name', '=', $value)->first();
        //     if($checktag==null){
        //         $tag = new Tag;
        //         $tag->name = $value;
        //         $tag->num_follower=0;
        //     }
        //     else{
        //         $tag=$checktag;
        //     }
            
        //     $movement->tags()->save($tag);
        //     $clumppy->tags()->save($tag);
        // }

        // return redirect()->route('showmovement');
    }
}
