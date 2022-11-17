<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Movement;
use Illuminate\Support\Facades\DB;

class movementCard extends Component
{
    public $movement;
    public $display_image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->movement=Movement::where('id','=',$id)->first();
        $this->display_image=DB::table('image_movement')->where('movement_id','=',$id)->first()->image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movement-card');
    }
}
