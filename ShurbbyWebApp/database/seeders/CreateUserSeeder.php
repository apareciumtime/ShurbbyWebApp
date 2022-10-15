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
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'password' => bcrypt('admin4321'),
                'telNum' => '081245678',
                'address_info' => '00/00 St.',
                'address_province' => 'Bangkok',
                'address_district' => 'Phatum wan',
                'address_sub_district' => 'samyan',
                'address_postcode' => '12345',
                'birthday' => '2002-01-01',
                'gender' => 'female',
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'is_admin' => '0',
                'password' => bcrypt('user1234'),
                'telNum' => '081245678',
                'address_info' => '00/00 St.',
                'address_province' => 'Bangkok',
                'address_district' => 'Phatum wan',
                'address_sub_district' => 'samyan',
                'address_postcode' => '12345',
                'birthday' => '2002-01-01',
                'gender' => 'female',
            ]
            ];

            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
