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
        $this->status = $status;
        if($this->status == 'private')
        {
            $this->label = 'ส่วนตัว';
        }
        elseif($this->status == 'public')
        {
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
