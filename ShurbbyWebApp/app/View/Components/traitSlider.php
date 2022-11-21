<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class traitSlider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $traits;
    public $index;
    public function __construct($trait=null)
    {
        $this->traits =[];
        $this->index = '';
        if($trait!=null){
            $this->traits = DB::table('traits')->where('trait_id','=',$trait)->get();
            $this->index = $trait;
        }
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.trait-slider');
    }
}
