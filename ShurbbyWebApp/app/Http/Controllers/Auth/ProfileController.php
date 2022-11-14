<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile(Request $request){
        $request->validate([
            'alias' => ['required', 'string', 'max:255'],
            'telNum' => ['required', 'string' ,'size:12'],
            'address_info' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'date'],
            'gender' => ['required', 'string'],
            'bio'=>['string','max:200'],
            'website'=>['string'],
        ]);

        $user=\Auth::user();

        $user->update([
            'alias'=>$request->alias,
            'telNum'=>$request->telNum,
            'bio'=>$request->bio,
            'birthdate'=>$request->birthdate,
            'gender'=>$request->gender,
            'address_info'=>$request->address_info,
            'website'=>$request->website,
        ]);

        return redirect()->route('journal');
    }

    public function crop(Request $request){
        $path = 'storage/profile_images/';
        $file = $request->file('image');
        $fileName = 'UIMG'.date('Ymd').uniqid().'.jpg';
        $move = $file->move(public_path($path), $fileName);
        if(!$move){
            return response()->json(['status'=>0,'msg'=>'Something went wrong']);
        }
        else{
            $user=\Auth::user();
            $user->profile_image=$path.$fileName;
            $user->save();
            return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully','name'=>$fileName,'newimg'=>$path.$fileName]);
        }
    }


}
