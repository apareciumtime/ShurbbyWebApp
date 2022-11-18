<?php

namespace App\View\Components;

use Illuminate\View\Component;

class willCommentMovement extends Component
{
    public $movementid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($movementid)
    {
        $this->movementid=$movementid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.will-comment-movement');
    }
}
