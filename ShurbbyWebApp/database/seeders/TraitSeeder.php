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
                'name' => 'ใบหงิก'
            ],
            [
                'name' => 'ใบเหลือง'
            ],
            [
                'name' => 'ใบไหม้'
            ],
            [
                'name' => 'ลำต้นแคระ'
            ],
            [
                'name' => 'รากเน่า'
            ],
            ];

            foreach ($traits as $key => $value) {
                DB::table('traits')->insert([
                    'name'=>$value,
                ]);
            }
    }
}
