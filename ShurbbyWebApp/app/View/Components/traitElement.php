<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class traitElement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $label;
    public $index;
    public $num;
    public $length;
    public $image;
    public function __construct($label='',$index='',$num='')
    {
        $this->label = $label;
        $this->index = $index;
        $this->num = $num;
        $traits = DB::table('traits')->where('trait_id','=',$index)->get();
        $traitObj = DB::table('traits')->where('name','=',$label)->first();
        $this->length = $traits->count();
        $this->image=$traitObj->image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.trait-element');
    }
}
