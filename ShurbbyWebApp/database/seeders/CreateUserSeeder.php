<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'alias' => 'Admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'password' => bcrypt('admin4321'),
                'telNum' => '081245678',
                'address_info' => '00/00 St.',
                'birthdate' => '2002-01-01',
                'gender' => 'female',
                'username'=>'@admin',
                'profile_image' => ''
            ],
            [
                'alias' => 'User',
                'email' => 'user@user.com',
                'is_admin' => '0',
                'password' => bcrypt('user1234'),
                'telNum' => '081245678',
                'address_info' => '00/00 St.',
                'birthdate' => '2002-01-01',
                'gender' => 'female',
                'username'=>'@user1',
                'profile_image' => ''
            ]
            ];

            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
