<?php

namespace App\View\Components;

use App\Models\Shrubby;
use Illuminate\View\Component;

class shrubbySlider extends Component
{
    public $label;
    public $link_to;
    public $shrubbies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label)
    {
        $this->label = $label;
        if($label == 'Shrubby ที่แนะนำ'){
            $this->link_to = 'shrubbyrecommand';
            $this->shrubbies = Shrubby::orderBy('like','DESC')->limit(10)->get();
        }
        elseif($label == 'Shrubby ที่มาใหม่'){
            $this->link_to = 'shrubbynewby';
            $this->shrubbies = Shrubby::orderBy('updated_at','DESC')->limit(10)->get();
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
