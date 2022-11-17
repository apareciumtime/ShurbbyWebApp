<?php

namespace App\View\Components;

use App\Models\Clumppy;
use App\Models\Comment;
use App\Models\Movement;
use App\Models\Shrubby;
use Illuminate\View\Component;

class interactionEngage extends Component
{
    public $label;
    public $id;
    public $type;
    public $post;
    public $routeTo;
    public $like_amount;
    public $comment_amount;
    public $share_amount;
    public $liked;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$id='',$type='')
    {
        $this->label = $label;
        $this->id = $id;
        $this->type = $type;
        $post =null;
        $routeTo='';
        $this->liked= false;

        if($type == 'shrubby'){
            $post = Shrubby::where('id','=',$id)->get()->first();
            $this->post =$post;
            $this->liked= $post->liked();
            $this->routeTo = route('like.shrubby',$id);
        }
        // elseif($type == 'clumppy'){
        //     $post = Clumppy::where('id','=',$id)->get()->first();
        //     $this->post =$post;
        // }
        elseif($type == 'comment'){
            $post = Comment::where('id','=',$id)->get()->first();
            $this->post = $post;
            $this->liked= $post->liked();
            $this->routeTo = route('like.comment',$id);
        }
        elseif($type == 'movement'){
            $post = Movement::where('id','=',$id)->get()->first();
            $this->post =$post;
            $this->liked= $post->liked();
            $this->routeTo =route('like.movement',$id);
        }
        
        if($label == 'like')
        {
            // dd($this->like_amount = $post->like);
            if($post==null){
                $this->like_amount = 0;
            }
            else{
                $this->like_amount = $post->likeCount; //get amount from database
            }
            
        }
        elseif($label == 'comment')
        {
            if($post==null){
                $this->comment_amount = 0;
            }
            else{
                $this->comment_amount = $post->comments->count();
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.interaction-engage');
    }
}
