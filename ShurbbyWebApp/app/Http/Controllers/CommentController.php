c<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Shrubby;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    
    public function __construct()
    {
        date_default_timezone_set("Asia/Bangkok");
        $this->middleware('auth');

    }
    public function likeComment($id)
    {
        $comment = Comment::find($id);
        $cntlike = $comment->like;
        if($comment->liked()){
            Comment::where('id', $id)
                        ->update([
                            'like' => $cntlike-1
                        ]);
            $comment->unlike();
            $comment->save();
            return response()->json(['status'=>'success','message'=>'unliked']);
        }
        else{
            Comment::where('id', $id)
                        ->update([
                            'like' => $cntlike+1
                        ]);
            $comment->like();
            $comment->save();
            return response()->json(['status'=>'success','message'=>'liked']);
        }
        // dd($comment);
    }

    public function deleteComment($id)
    {
        DB::table('likeable_likes')->where('likeable_id',$id)->where('likeable_type','App\Models\Comment')->delete();
        DB::table('likeable_like_counters')->where('likeable_id',$id)->where('likeable_type','App\Models\Comment')->delete();

        $comment = Comment::where('id', $id);
        $comment->delete();

        return Redirect::back()
            ->with('message', 'Your Comment has been deleted!');
    }

    public function increaseCredit($commentid){
        $comment = Comment::where('id', $commentid)->first();
        $user=\Auth::user();
        if($comment->user_id!=$user->id){
            $check=DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->first();
            //never click add credit before
            if($check==null){
                $comment->update(['credit'=>$comment->credit+1]);
                DB::table('credit_commentuser')->insert([
                    'comment_id'=>$comment->id,
                    'user_id'=>$user->id,
                    'value'=>1
                ]);
                return response()->json(['status'=>'success','message'=>'increased','score'=>$comment->credit]);
            }
            // ever click credit
            else{
                // click decrease credit before
                if($check->value==-1){
                    $comment->update(['credit'=>$comment->credit+2]);
                    DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->update(['value'=>1]);
                    return response()->json(['status'=>'success','message'=>'increased','score'=>$comment->credit]);
                }
                // click increase credit before
                else if($check->value==1){
                    $comment->update(['credit'=>$comment->credit-1]);
                    DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->delete();
                    return response()->json(['status'=>'success','message'=>'unincrease','score'=>$comment->credit]);
                }
            }
        }
        else{
            return response()->json(['status'=>'success','message'=>'not increased','score'=>$comment->credit]);
        }
    }

    public function decreaseCredit($commentid){
        $comment = Comment::where('id', $commentid)->first();
        $user=\Auth::user();
        if($comment->user_id!=$user->id){
            $check=DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->first();
            //never click add credit before
            if($check==null){
                $comment->update(['credit'=>$comment->credit-1]);
                DB::table('credit_commentuser')->insert([
                    'comment_id'=>$comment->id,
                    'user_id'=>$user->id,
                    'value'=>-1
                ]);
                return response()->json(['status'=>'success','message'=>'decreased','score'=>$comment->credit]);

            }
            // ever click credit
            else{
                // click decrease credit before
                if($check->value==-1){
                    $comment->update(['credit'=>$comment->credit+1]);
                    DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->delete();
                    return response()->json(['status'=>'success','message'=>'undecrease','score'=>$comment->credit]);

                }
                // click increase credit before
                else if($check->value==1){
                    $comment->update(['credit'=>$comment->credit-2]);
                    DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->update(['value'=>-1]);
                    return response()->json(['status'=>'success','message'=>'decreased','score'=>$comment->credit]);
                }
            }
        }
        else{
            return response()->json(['status'=>'success','message'=>'not decrease','score'=>$comment->credit]);

        }
    }

    public function accept($commentid){
        $comment = Comment::where('id','=',$commentid)->first();
        $user=\Auth::user();
        $shrubby=Shrubby::where('id','=',$comment->commentable_id)->first();
        if($shrubby->user_id==$user->id){
            if($comment->accept==true){
                $comment->update(['accept'=>false]);
                return response()->json(['status'=>'success','message'=>'unaccept']);
            }
            else{
                $comment->update(['accept'=>true]);
                return response()->json(['status'=>'success','message'=>'accepted']);
            }
        }
        else{
            return response()->json(['status'=>'success','message'=>'can\'t accept']);
        }
    }
}
