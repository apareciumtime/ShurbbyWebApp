<?php
use Carbon\Carbon;

if (! function_exists('time_elapsed_string')) {
    function time_elapsed_string($datetime, $full = false, $ago = true) {
        date_default_timezone_set("Asia/Bangkok");
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'ปี',
            'm' => 'เดือน',
            'w' => 'สัปดาห์',
            'd' => 'วัน',
            'h' => 'ชั่วโมง',
            'i' => 'นาที',
            's' => 'วินาที',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);

        if($ago){
            return $string ? implode(', ', $string) . ' ที่ผ่านมา' : 'เมื่อสักครู่';
        }
        
        return $string;
    }

    if (! function_exists('thai_date')) {
        function thai_date($myDATE, $prefix = true, $withday = false , $withtime = true){
            //วันภาษาไทย
            $ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
            //เดือนภาษาไทย
            $ThMonth = array ( "ม.ค.", "ก.พ.", "ม.ค", "เม.ย.","พ.ค.", "มิ.ย", "ก.ค", "ส.ค.","ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค." );
            
            //กำหนดคุณสมบัติ
            $week = date("w",strtotime($myDATE)); // ค่าวันในสัปดาห์ (0-6)
            $months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
            $day = date("d",strtotime($myDATE)); // ค่าวันที่(1-31)
            $years = date("Y",strtotime($myDATE))+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.
            $hour = date("H",strtotime($myDATE));
            $min = date("i",strtotime($myDATE));

            $string = "";
            if($prefix) $string = "โพสต์เมื่อ ";

            if($withday){
                $string = $string."วัน$ThDay[$week]ที่ $day  
                     $ThMonth[$months] 
                     $years ";
            }
            else{
                $string = $string."$day 
                     $ThMonth[$months] 
                     $years ";
            }

            if($withtime) $string = $string."เวลา $hour:$min น.";
            
            return $string;
        }
    }
    
if (! function_exists('plant_age')) {
    function plant_age($plant_date){
        $begin=$plant_date; //  วันที่เริ่มนับ
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

        return $duration;
    }
}

}