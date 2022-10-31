<?php

namespace App\View\Components;

use Illuminate\View\Component;

class componentBar extends Component
{
    public $identity;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($identity)
    {
        $this->identity = $identity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.component-bar');
    }
}
