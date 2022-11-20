<?php

namespace App\View\Components;

use App\Models\Shrubby;
use Illuminate\View\Component;

class shrubbyCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $shrubby;
    public $slide;
    public $pic_status = 0;
    public $pic;
    public function __construct($itemid,$slide='')
    {
        $this->shrubby = Shrubby::where('id','=',$itemid)->get()->first();
        $this->slide = $slide;

        $texthtml = $this->shrubby->content;
        $this->pic_status = preg_match_all('/<img [^>]*src=["|\']([^"|\']+)/i', $texthtml, $found);
        
        if($this->pic_status){
            $this->pic = $found[1][0];
            // dd($this->pic_status,$found,$this->pic);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shrubby-card');
    }
}
