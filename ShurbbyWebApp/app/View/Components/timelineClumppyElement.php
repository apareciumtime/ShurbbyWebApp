<?php

namespace App\View\Components;

use App\Models\Clumppy;
use Illuminate\View\Component;

class timelineClumppyElement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $clumppy;
    public $age;
    public function __construct($id)
    {
        $this->clumppy = Clumppy::where('id','=',$id)->get()->first();
        $this->age = plant_age($this->clumppy->plant_date);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.timeline-clumppy-element');
    }
}
