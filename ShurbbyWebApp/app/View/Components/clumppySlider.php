<?php

namespace App\View\Components;

use App\Models\Clumppy;
use Illuminate\Support\Facades\Auth;
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
            $this->link_to = 'clumppyrecommend';
            $this->clumppies=Clumppy::orderBy('amount','DESC')
                                        ->where('amount', '!=' , 0)
                                        ->where('is_private', '=' , 0)
                                        ->limit(10)->get();

        }
        elseif($label == 'Clumppy ที่มาใหม่'){
            $this->link_to = 'clumppynewby';
            $this->clumppies=Clumppy::orderBy('created_at','DESC')
                                        ->where('amount', '!=' , 0)
                                        ->where('is_private', '=' , 0)
                                        ->limit(10)->get();
        }
        elseif($label == 'Clumppy ของฉัน'){
            $this->link_to = 'myclumppy';
            $this->clumppies= Clumppy::orderBy('updated_at','DESC')
                                        ->where('user_id','=',Auth::id())
                                        ->where('amount', '!=' , 0)
                                        ->limit(10)->get();
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
