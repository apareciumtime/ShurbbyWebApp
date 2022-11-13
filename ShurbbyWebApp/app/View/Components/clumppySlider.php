<?php

namespace App\View\Components;

use Illuminate\View\Component;

class clumppySlider extends Component
{
    public $label;
    public $link_to;
    public $clumppies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label)
    {
        $this->label = $label;
        if($label == 'Clumppy ที่แนะนำ'){
            $this->link_to = 'clumppyrecommand';

        }
        elseif($label == 'Clumppy ที่มาใหม่'){
            $this->link_to = 'clumppynewby';

        }
        elseif($label == 'Clumppy ของฉัน'){
            $this->link_to = 'myclumppy';

        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.clumppy-slider');
    }
}
