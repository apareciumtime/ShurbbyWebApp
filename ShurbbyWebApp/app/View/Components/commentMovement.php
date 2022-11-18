<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Comment;
use App\Models\User;

class commentMovement extends Component
{
    public $comment;
    public $user;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->comment=Comment::where('id','=',$id)->first();
        $this->user=User::where('id','=',$this->comment->user_id)->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment-movement');
    }
}
