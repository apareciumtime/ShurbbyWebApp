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
                'image'=>'storage/traitimage/bai_ngink.jpg',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบเหลือง',
                'image'=>'storage/traitimage/yellow.png',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบไม้',
                'image'=>'storage/traitimage/baimai.jpg',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบร่วง',
                'image'=>'storage/traitimage/bairuang.jpg',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบซีด',
                'image'=>'storage/traitimage/baiseedd.jpg',
                'trait_id' => 1
            ],
            [
                'name' => 'ใบจุด',
                'image'=>'storage/traitimage/baijood.png',
                'trait_id' => 1
            ],
            [
                'name' => 'ต้นไม้เล็ก',
                'image'=>'storage/traitimage/small.png',
                'trait_id' => 2
            ],
            [
                'name' => 'ต้นไม้กลาง',
                'image'=>'storage/traitimage/medium.jpg',
                'trait_id' => 2
            ],
            [
                'name' => 'ต้นไม้ใหญ่',
                'image'=>'storage/traitimage/big.jpeg',
                'trait_id' => 2
            ],
            [
                'name' => 'ไม้ยืนต้น',
                'image'=>'storage/traitimage/maiyuenton.jpg',
                'trait_id' => 2
            ],
            [
                'name' => 'ไม้ผลัดใบ',
                'image'=>'storage/traitimage/maipladbai.jpg',
                'trait_id' => 2
            ],
            [
                'name' => 'ลำต้นแคระ',
                'image'=>'storage/traitimage/lumtonkrae.jpg',
                'trait_id' => 3
            ],
            [
                'name' => 'รากเน่า',
                'image'=>'storage/traitimage/raknao.jpg',
                'trait_id' => 3
            ],
            [
                'name' => 'ยืนต้นตาย',
                'image'=>'storage/traitimage/yuentontai.jpg',
                'trait_id' => 3
            ],
            [
                'name' => 'วัชพืช',
                'image'=>'storage/traitimage/watchapuech.jpg',
                'trait_id' => 4
            ],
            [
                'name' => 'แมลง',
                'image'=>'storage/traitimage/satrupuech.png',
                'trait_id' => 4
            ],
            [
                'name' => 'บำรุง',
                'image'=>'storage/traitimage/bamrung.png',
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
