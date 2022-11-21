<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clumppy;
use App\Models\Movement;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ClumppyController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Bangkok");
        $this->middleware('auth', ['except' => ['pageClumppy','clumppyrecommend','clumppynewby']]);
    }

    public function clumppyrecommend()
    {
        return view('clumppy.clumppyrecommend')
            ->with('clumppies',Clumppy::orderBy('amount','DESC')
                                        ->where('is_private', '=' , 0)
                                        ->where('amount', '!=' , 0)->get());
    }

    public function clumppynewby()
    {
        return view('clumppy.clumppynewby')
            ->with('clumppies',Clumppy::orderBy('created_at','DESC')
                                        ->where('is_private', '=' , 0)
                                        ->where('amount', '!=' , 0)->get());
    }

    public function myClumppyPage()
    {
        return view('journal.myclumppy')
            ->with('clumppies',Clumppy::orderBy('updated_at','DESC')
                                        ->where('user_id','=',Auth::id())
                                        ->where('amount', '!=' , 0)->get());
    }

    public function indexCreateClumppy(){
        $user=\Auth::user();
        $lastClumppy=DB::table('clumppies')->where('user_id','=',$user->id)->orderBy('id','DESC')->first();
        // there is empty row from this user -> use this row to generate
        if($lastClumppy!=null && $lastClumppy->amount==0){
            Clumppy::where('user_id','=',$user->id)->orderBy('id','DESC')->first()
                ->update(['cover'=>null]);
            $lastClumppy=DB::table('clumppies')->where('user_id','=',$user->id)->orderBy('id','DESC')->first();
            return view('clumppy.clumppycreate',['empty_clumppy_id'=>$lastClumppy->id,'clumppy'=>$lastClumppy]);
        }
        else{
            $clumppy=new Clumppy;
            $clumppy->user_id=$user->id;
            $clumppy->name='clumppyOf'.$user->alias;
            $clumppy->cover=null;
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
        if($clumppy->user_id == Auth::id())
            $movements=$clumppy->movements->where('like','>',-1);
        else
            $movements=$clumppy->movements->where('like','>',-1)->where('is_private', '=' , 0);
        // dd($movements);
        $tags=$clumppy->tags()->get();
        return view('clumppy/clumppypage')->with('tags',$tags)
            ->with('clumppy',Clumppy::where('id',$id)->first())->with(['age'=>$duration,'movements'=>$movements]);
    }

    public function deleteClumppy($id)
    {
        DB::table('taggables')->where('taggable_id',$id)->delete();
        $movements=Movement::where('clumppy_id','=',$id)->get();
        foreach($movements as $movement){
            DB::table('image_movement')->where('movement_id',$movement->id)->delete();
            DB::table('taggables')->where('taggable_id','=',$movement->id)->where('taggable_type','=','App\Models\movement')->delete();
        }
        Movement::where('clumppy_id','=',$id)->delete();
        Clumppy::where('id', $id)->delete();
        // $clumppy->delete();

        return redirect('/home')
            ->with('message', 'Your Clumppy has been deleted!');
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
        $clumppy->is_private=$request->privacy_status;
        $clumppy->amount=$request->plant_amount;
        $clumppy->save();
        return redirect()->route('clumppypage',[$clumppy->id]);
    }

    public function indexEditClumppy($id)
    {
        $clumppy = Clumppy::where('id',$id)->first();
        if($clumppy->is_private)  $private_status = 'ส่วนตัว';
        else  $private_status = 'สาธารณะ';

        return view('clumppy.clumppyupdate')
            ->with('clumppy',Clumppy::where('id',$id)->first())
            ->with('private_status',$private_status);
    }

    public function updateClumppy(Request $request,$id)
    {
        
        $request->validate([
            'clumppy_name' => ['required','string','max:60'],
            'privacy_status' => ['required'],
            'clumppy_date' => ['required','date'],
            'plant_amount' => ['required'],
        ]);

        Clumppy::where('id', $id)
            ->update([
                'name' => $request->clumppy_name,
                'description' => $request->clumppy_description,
                'is_private' => $request->privacy_status,
                'plant_date' => $request->clumppy_date,
                'amount' => $request->plant_amount,
            ]);

        return redirect()->route('clumppypage',[$id]);
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
