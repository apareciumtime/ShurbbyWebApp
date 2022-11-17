<?php

namespace App\View\Components;

use Illuminate\View\Component;

class willCommentShrubby extends Component
{
    public $status = 1;
    public $shrubbyid;
    public $parentid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($shrubbyid,$parentid=-1)
    {
        $this->parentid = $parentid;
        $this->shrubbyid = $shrubbyid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.will-comment-shrubby');
    }
}
