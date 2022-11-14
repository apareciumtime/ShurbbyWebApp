<?php

if (! function_exists('time_elapsed_string')) {
    function time_elapsed_string($datetime, $full = false) {
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
        return $string ? implode(', ', $string) . ' ที่ผ่านมา' : 'เมื่อสักครู่';
    }

    if (! function_exists('thai_date')) {
        function thai_date($myDATE, $prefix = true, $withDay = false){
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

            if($withDay){
                $string = "วัน$ThDay[$week]ที่ $day  
                     $ThMonth[$months] 
                     $years";
            }
            elseif($prefix){
                $string = "โพสต์เมื่อ $day 
                     $ThMonth[$months] 
                     $years 
                     เวลา $hour:$min น.";
            }
            else{
                $string = "$day 
                     $ThMonth[$months] 
                     $years 
                     เวลา $hour:$min น.";
            }
            
            return $string;
        }
    }
}