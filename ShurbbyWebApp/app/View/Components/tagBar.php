<?php

namespace App\View\Components;

use GuzzleHttp\Psr7\Request;
use Illuminate\View\Component;

class tagBar extends Component
{
    public $label;
    public $follower;
    public $status=0;
    public $button_label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if($this->status == 0){
            $this->button_label = 'ติดตาม';
        }
        elseif($this->status == 1){
            $this->button_label = 'ติดตามแล้ว';
        }
        $this->label = 'ไมยราพ';
        $this->follower = '16k ผู้ติดตาม';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-bar');
    }
}
