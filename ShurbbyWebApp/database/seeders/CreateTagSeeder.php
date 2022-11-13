<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class CreateTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = [
            [
                'name' => 'ไมยราพ',
                'num_follower' => 100,
            ],
            [
                'name' => 'มะเขือเทศ',
                'num_follower' => 50,
            ],
            [
                'name' => 'พืชกินได้',
                'num_follower' => 200,
            ],
            [
                'name' => 'ผลไม้',
                'num_follower' => 62,
            ],
            [
                'name' => 'มะเขือเทศเชอร์รี่',
                'num_follower' => 20,
            ],
            [
                'name' => 'อะโวคาโด',
                'num_follower' => 156,
            ],
            [
                'name' => 'บอนไซ',
                'num_follower' => 35,
            ],
            [
                'name' => 'ว่านหางจระเข้',
                'num_follower' => 75,
            ],
            [
                'name' => 'เบอร์รี่',
                'num_follower' => 167,
            ],
            [
                'name' => 'ใบหงิก',
                'num_follower' => 12,
            ]
            ];

            foreach ($tag as $key => $value) {
                Tag::create($value);
            }
    }
}
