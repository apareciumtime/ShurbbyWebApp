<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
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
}
