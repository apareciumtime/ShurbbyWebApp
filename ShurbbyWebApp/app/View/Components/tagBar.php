<?php

namespace App\View\Components;

use GuzzleHttp\Psr7\Request;
use App\Models\Tag;
use Illuminate\View\Component;

class tagBar extends Component
{
    public $label;
    public $follower;
    public $status=0;
    public $button_label;
    public $tag_id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label)
    {
        $this->label=$label;
        $user=\Auth::user();
        $tag=Tag::where('name','=',$label)->first();
        $this->tag_id=$tag->id;
        $this->follower = ''.$tag->num_follower.' ผู้ติดตาม';
        if($user!=null){ 
            $following=$user->tags()->where('tag_id','=',$tag->id)->first();
            if($following==null){
                $this->status=0;
                $this->button_label = 'ติดตาม';
            }
            else{
                $this->status=1;
                $this->button_label = 'ติดตามแล้ว';
            }
        }else{
            $this->status=0;
            $this->button_label = 'ติดตาม';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-bar');
    }
}
