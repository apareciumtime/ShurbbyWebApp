<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Clumppy;
use Auth;
use Carbon\Carbon;


class clumppyCard extends Component
{
    public $pic_status = 0;
    public $clumppy;
    public $age;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($clumppyid)
    {
        $this->clumppy=Clumppy::where('id','=',$clumppyid)->first();

        if($this->clumppy->cover!=null){
            $this->pic_status = 1;
        }

        $begin=$this->clumppy->plant_date; //  วันที่เริ่มนับ
        $end=Carbon::now(); // วันที่สิ้นสุด
        
        $remain=intval(strtotime($end)-strtotime($begin));
        $day=floor($remain/86400);
        $month=0;
        $year=0;

        $duration="";

        if($day>=365){
            $year=floor($day/365);
            $days_remain=$day%365;
            if($days_remain>30){
                $month=floor($days_remain/30);
                $days_remain=$days_remain%30;
                if($days_remain==0){
                    $duration="อายุ ".$year." ปี ".$month." เดือน ";
                }
                else{
                    $duration="อายุ ".$year." ปี ".$month." เดือน ".$days_remain." วัน ";
                }
            }
            else{
                if($days_remain==0){
                    $duration="อายุ ".$year." ปี ";
                }
                else{
                    $duration="อายุ ".$year." ปี ".$days_remain." วัน ";
                }
                
            }
        }
        else{
            if($day>30){
                $month=floor($day/30);
                $days_remain=$day%30;
                if($days_remain==0){
                    $duration="อายุ ".$month." เดือน ";
                }
                else{
                    $duration="อายุ ".$month." เดือน ".$days_remain." วัน ";
                }
            }
            else{
                $duration="อายุ ".$day." วัน ";
            }
            
        }
        $this->age=$duration;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.clumppy-card');
    }
}
