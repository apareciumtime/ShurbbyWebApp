<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Clumppy;
use App\Models\Movement;

class tagFramework extends Component
{
    public $tags;
    public $type;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$id)
    {
        $this->type = $type;
        $this->id = $id;
        switch ($type) {
            case "clumppy":
                $clumppy=Clumppy::where('id','=',$id)->first();
                $this->tags=$clumppy->tags;
                break;
            case "movement":
                $movement=Movement::where('id','=',$id)->first();
                $this->tags=$movement->tags;
                break;
          }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-framework');
    }
}
