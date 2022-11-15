<?php

namespace App\View\Components;

use App\Models\Clumppy;
use Illuminate\View\Component;


class clumppyCard extends Component
{
    public $pic_status = 0;
    public $clumppy;
    public $age;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($clumppyid)
    {
        $this->clumppy = Clumppy::where('id','=',$clumppyid)->get()->first();
        $this->age = plant_age($this->clumppy->plant_date);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.clumppy-card');
    }
}
