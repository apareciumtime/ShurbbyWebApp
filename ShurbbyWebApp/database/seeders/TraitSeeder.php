<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TraitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $traits = [
            [
                'name' => 'ใบหงิก',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบเหลือง',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบไม้',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบร่วง',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบซีด',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบจุด',
                'trait_id' => 1
            ],
            [
                'name' => 'ต้นไม้เล็ก',
                'trait_id' => 2
            ],
            [
                'name' => 'ต้นไม้กลาง',
                'trait_id' => 2
            ],
            [
                'name' => 'ต้นไม้ใหญ่',
                'trait_id' => 2
            ],
            [
                'name' => 'ไม้ยืนต้น',
                'trait_id' => 2
            ],
            [
                'name' => 'ไม้ผลัดใบ',
                'trait_id' => 2
            ],
            [
                'name' => 'ลำต้นแคระ',
                'trait_id' => 3
            ],
            [
                'name' => 'รากเน่า',
                'trait_id' => 3
            ],
            [
                'name' => 'ยืนต้นตาย',
                'trait_id' => 3
            ],
            [
                'name' => 'วัชพืช',
                'trait_id' => 4
            ],
            [
                'name' => 'แมลง',
                'trait_id' => 4
            ],
            [
                'name' => 'บำรุง',
                'trait_id' => 4
            ],
            ];

            foreach ($traits as $key => $value) {
                DB::table('traits')->insert([
                    'name'=>$value,
                ]);
            }
    }
}
