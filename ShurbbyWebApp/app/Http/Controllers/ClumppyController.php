<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clumppy;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class ClumppyController extends Controller
{

    public function clumppyrecommand()
    {
        return view('clumppy.clumppyrecommand')
            ->with('clumppies',Clumppy::orderBy('amount','DESC')->get());
    }

    public function clumppynewby()
    {
        return view('clumppy.clumppynewby')
            ->with('clumppies',Clumppy::orderBy('created_at','DESC')->get());
    }

    public function indexCreateClumppy(){
        $user=\Auth::user();
        $lastClumppy=DB::table('clumppies')->where('user_id','=',$user->id)->orderBy('id','DESC')->first();
        // there is empty row from this user -> use this row to generate
        if($lastClumppy!=null && $lastClumppy->amount==0){
            $lastClumppy->cover='storage/clumppy_covers/defaultClumppyCover.png';
            return view('clumppy.clumppycreate',['empty_clumppy_id'=>$lastClumppy->id,'clumppy'=>$lastClumppy]);
        }
        else{
            $clumppy=new Clumppy;
            $clumppy->user_id=$user->id;
            $clumppy->name='clumppyOf'.$user->alias;
            $clumppy->cover='storage/clumppy_covers/defaultClumppyCover.png';
            $clumppy->plant_date=Carbon::now();
            $clumppy->is_private=true;
            $clumppy->amount=0;
            $clumppy->save();
            return view('clumppy.clumppycreate',['empty_clumppy_id'=>$clumppy->id,'clumppy'=>$clumppy]);
        }
    }

    public function pageClumppy($id)
    { 
        $clumppy=Clumppy::where('id',$id)->first();
        $duration = plant_age($clumppy->plant_date);
        // $tags=$clumppy->tags()->get();
        return view('clumppy/clumppypage')/*->with('tags',$tags)*/
            ->with('clumppy',Clumppy::where('id',$id)->first())->with('age',$duration);
    }

    public function createClumppy(Request $request,$empty_clumppy_id){
        $request->validate([
            'clumppy_name' => ['required','string','max:60'],
            'privacy_status' => ['required'],
            'clumppy_date' => ['required','date'],
            'plant_amount' => ['required'],
        ]);
        $clumppy= Clumppy::where('id','=',$empty_clumppy_id)->first();
        $clumppy->name=$request->clumppy_name;
        $clumppy->description=$request->clumppy_description;
        $clumppy->plant_date=$request->clumppy_date;
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

    public function cropCover(Request $request,$empty_clumppy_id){
        $path = 'storage/clumppy_covers/';
        $file = $request->file('cover-image');
        $fileName = 'UIMG'.date('Ymd').uniqid().'.jpg';
        $move = $file->move(public_path($path), $fileName);
        $clumppy=Clumppy::where('id','=',$empty_clumppy_id)->first();
        $clumppy->cover=$path.$fileName;
        $clumppy->save();
        if(!$move){
            return response()->json(['status'=>0,'msg'=>'Something went wrong']);
        }
        else{
            return response()->json(['status'=>1, 'msg'=>'Cover added','name'=>$fileName,'cover_img'=>$path.$fileName]);
        }
    }
}
