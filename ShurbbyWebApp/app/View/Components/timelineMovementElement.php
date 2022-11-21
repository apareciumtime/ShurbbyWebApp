<?php

namespace App\View\Components;

use App\Models\Clumppy;
use App\Models\movement;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class timelineMovementElement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $movement;
    public $movement_images;
    public $clumppy;
    public $first_images;
    public function __construct($id)
    {
        $this->movement=movement::where('id','=',$id)->first();
        $this->movement_images=DB::table('image_movement')->where('movement_id','=',$id)->get();
        $this->clumppy=Clumppy::where('id','=',$this->movement->clumppy_id)->first();
        $this->first_images=$this->movement_images->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.timeline-movement-element');
    }
}
