<?php

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
        }
        else{
            Comment::where('id', $id)
                        ->update([
                            'like' => $cntlike+1
                        ]);
            $comment->like();
            $comment->save();
        }
        // dd($comment);
        return Redirect::back();
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

    public function increaseCredit($id){
        $comment = Comment::where('id', $id)->first();
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
            }
            // ever click credit
            else{
                // click decrease credit before
                if($check->value==-1){
                    $comment->update(['credit'=>$comment->credit+2]);
                    DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->update(['value'=>1]);

                }
                // click increase credit before
                else if($check->value==1){
                    $comment->update(['credit'=>$comment->credit-1]);
                    DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->delete();
                }
            }
            return Redirect::back();
        }
        else{
            return Redirect::back();
        }
    }

    public function decreaseCredit($id){
        $comment = Comment::where('id', $id)->first();
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
            }
            // ever click credit
            else{
                // click decrease credit before
                if($check->value==-1){
                    $comment->update(['credit'=>$comment->credit+1]);
                    DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->delete();
                }
                // click increase credit before
                else if($check->value==1){
                    $comment->update(['credit'=>$comment->credit-2]);
                    DB::table('credit_commentuser')->where('comment_id','=',$comment->id)->where('user_id','=',$user->id)->update(['value'=>-1]);
                    
                }
            }
            return Redirect::back();
        }
        else{
            return Redirect::back();
        }
    }

    public function accept($id){
        $comment = Comment::where('id', $id)->first();
        $user=\Auth::user();
        $shrubby=Shrubby::where('id','=',$comment->commentable_id)->first();
        if($shrubby->user_id==$user->id){
            if($comment->accept==true){
                $comment->update(['accept'=>false]);
            }
            else{
                $comment->update(['accept'=>true]);
            }
            return Redirect::back();
        }
        else{
            return Redirect::back();
        }
    }
}
