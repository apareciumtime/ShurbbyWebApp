<?php

namespace App\View\Components;

use App\Models\Comment;
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

        if($type == 'shrubby'){
            $post = Shrubby::where('id','=',$id)->get()->first();
            $this->post =$post;
            $this->routeTo = route('like.shrubby',$id);
        }
        elseif($type == 'clumppy'){
            // $post = Clumppy::where('id','=',$id)->get()->first();
            // $this->post =$post;
            // $this->routeTo ='route('like.clumbby',$id);
        }
        elseif($type == 'comment'){
            $post = Comment::where('id','=',$id)->get()->first();
            $this->post = $post;
            $this->routeTo = route('like.comment',$id);
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
            // if($type == 'comment'){
            //     // dd($post->likeCount);
            //     dd($this->routeTo);
            // }
            
        }
        elseif($label == 'comment')
        {
            $this->comment_amount = 0;
        }
        elseif($label == 'share')
        {
            $this->share_amount = 0;
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
