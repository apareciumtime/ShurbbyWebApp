<?php

namespace App\View\Components;

use App\Models\Shrubby;
use Illuminate\View\Component;

class shrubbyClumppySlot extends Component
{
    public $shrubbies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->shrubbies = Shrubby::orderBy('updated_at','DESC')->limit(10)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shrubby-clumppy-slot');
    }
}
