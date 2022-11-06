<?php

namespace App\View\Components;

use App\Models\Tag;
use Illuminate\View\Component;

class rightpane extends Component
{
    public $top_tags;
    public $following_tags;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->top_tags=Tag::orderBy('num_follower','DESC')->limit(10)->get();

        $user=\Auth::user();
        if($user!=null){
            $this->following_tags=$user->tags()->get();
        }
        else{
            $this->following_tags=[];
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rightpane');
    }
}
