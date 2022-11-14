<?php

namespace App\View\Components;

use Illuminate\View\Component;

class privacyStatus extends Component
{
    public $status;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status)
    {
        if($status=='1'){
            $this->status = 'private';
            $this->label = 'ส่วนตัว';
        }
        else
        {
            $this->status = 'public';
            $this->label = 'สาธารณะ';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.privacy-status');
    }
}
