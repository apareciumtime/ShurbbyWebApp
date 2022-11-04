<?php

namespace App\View\Components;

use Illuminate\View\Component;

class interactionEngage extends Component
{
    public $label;
    public $like_amount = 0;
    public $comment_amount = 0;
    public $share_amount = 0;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label)
    {
        $this->label = $label;
        if($label == 'like')
        {
            $like_amount = 0; //get amount from database
        }
        elseif($label == 'comment')
        {
            $comment_amount = 0;
        }
        elseif($label == 'share')
        {
            $share_amount = 0;
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
