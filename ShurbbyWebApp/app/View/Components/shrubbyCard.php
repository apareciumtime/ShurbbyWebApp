<?php

namespace App\View\Components;

use App\Models\Shrubby;
use Illuminate\View\Component;

class shrubbyCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $shrubby;
    public function __construct($itemid)
    {
        $this->shrubby = Shrubby::where('id','=',$itemid)->get()->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shrubby-card');
    }
}
