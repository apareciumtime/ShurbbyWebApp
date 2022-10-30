<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tabMenu extends Component
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
        if($label == 'หน้าหลัก'){
            $this->link_to = 'home';
        }
        else if($label == 'ไทม์ไลน์'){
            $this->link_to = 'timeline';
        }
        else if($label == 'สมุดบันทึก'){
            $this->link_to = 'journal';
        }
        else if($label == 'เข้าสู่ระบบ'){
            $this->link_to = 'login';
        }
        else if($label == 'สมัครสมาชิก'){
            $this->link_to = 'register';
        }
        else if($label == 'ตั้งค่า'){
            $this->link_to = 'setting';
        }
        else if($label == 'ออกจากระบบ'){
            $this->link_to = 'logout';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tab-menu');
    }
}
