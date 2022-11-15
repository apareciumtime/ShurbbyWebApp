<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clumppy;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ClumppyController extends Controller
{
    // public function clumppyrecommand()
    // {
    //     return view('clumppy.clumppyrecommand')
    //         ->with('clumppies',Clumppy::orderBy('like','DESC')->get());
    // }

    // public function clumppynewby()
    // {
    //     return view('clumppy.clumppynewby')
    //         ->with('clumppies',Clumppy::orderBy('created_at','DESC')->get());
    // }

    public function indexCreateClumppy(){
        return view('clumppy.clumppycreate',['cover'=>null]);
    }

    public function pageClumppy($id)
    { 
        // $clumppy=Clumppy::where('id',$id)->first();
        // $tags=$clumppy->tags()->get();
        return view('clumppy/clumppypage')/*->with('tags',$tags)*/
            ->with('clumppy',Clumppy::where('id',$id)->first());
    }

    public function createClumppy(Request $request){
        $request->validate([
            'clumppy_name' => ['required','string','max:60'],
            'privacy_status' => ['required'],
            'clumppy_date' => ['required','date'],
            'plant_amount' => ['required'],
        ]);
        $clumppy=new Clumppy;
        $clumppy->user_id=\Auth::user()->id;
        $clumppy->name=$request->clumppy_name;
        $clumppy->description=$request->clumppy_description;
        $clumppy->plant_date=$request->clumppy_date;
        $clumppy->cover=$request->cover;
        if($request->privacy_status == 'public'){
            $clumppy->is_private=false;
        }
        else if($request->privacy_status == 'private'){
            $clumppy->is_private=true;
        }
        $clumppy->amount=$request->plant_amount;
        $clumppy->save();
        return redirect()->route('showclumppy',[$clumppy->id]);
    }

    public function cropCover(Request $request){
        $path = 'storage/clumppy_covers/';
        $file = $request->file('cover-image');
        $fileName = 'UIMG'.date('Ymd').uniqid().'.jpg';
        $move = $file->move(public_path($path), $fileName);
        if(!$move){
            return response()->json(['status'=>0,'msg'=>'Something went wrong']);
        }
        else{
            return response()->json(['status'=>1, 'msg'=>'Cover added','name'=>$fileName,'cover'=>$path.$fileName]);
        }
    }
}
