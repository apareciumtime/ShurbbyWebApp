<?php

namespace App\View\Components;

use Illuminate\View\Component;

class shrubbySlider extends Component
{
    public $label;
    public $link_to;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label)
    {
        $this->label = $label;
        if($label == 'Shrubby ที่แนะนำ'){
            $this->link_to = 'shubbyrecommand';
        }
        elseif($label == 'Shrubby ที่มาใหม่'){
            $this->link_to = 'shrubbynewby';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shrubby-slider');
    }
}
