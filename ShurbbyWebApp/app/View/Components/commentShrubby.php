<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class commentShrubby extends Component
{
    public $label; //order of comment / reply comment number
    public $comment;
    public $user; 
    public $increasecredit;
    public $decreasecredit;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->comment=Comment::where('id','=',$id)->first();
        $comment=$this->comment;
        $this->user=User::where('id','=',$comment->user_id)->first();
        $this->label='ความคิดเห็นที่ '.$comment->comment_id;
        if($comment->parent!=null){
            $this->label=$this->label.' ตอบกลับความคิดเห็นที่ '.$comment->parent;
        }
        $authuser=\Auth::user();
        $check=DB::table('credit_commentuser')->where('comment_id','=',$id)->where('user_id','=',$authuser->id)->first();
        if($check!=null){
            if($check->value==1){
                $this->increasecredit=true;
                $this->decreasecredit=false;
            }
            else if($check->value==-1){
                $this->increasecredit=false;
                $this->decreasecredit=true;
            }
        }
        else{
            $this->increasecredit=false;
            $this->decreasecredit=false;
        }
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment-shrubby');
    }
}
