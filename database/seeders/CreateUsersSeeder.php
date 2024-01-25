<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
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
                'first_name' => 'Admin',
                'last_name' => 'Ad',
                'phonenumber' => '+263783519199',
                'email' => 'admin@zimboflix.com',
                'age' => '23',
                'gender' => 'male',
                'country' => 'Zimbabwe',
                'city' => 'Harare',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'first_name' => 'User',
                'last_name' => 'As',
                'phonenumber' => '+263775510994',
                'email' => 'normal@zimboflix.com',
                'age' => '23',
                'gender' => 'female',
                'country' => 'Zimbabwe',
                'city' => 'Harare',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
            [
                'first_name' => 'contentcreator',
                'last_name' => 'conte',
                'phonenumber' => '+263773463635',
                'email' => 'content@zimboflix.com',
                'age' => '23',
                'gender' => 'male',
                'country' => 'Zimbabwe',
                'city' => 'Harare',
                'is_admin' => '2',
                'password' => bcrypt('123456'),
            ],
            [
                'first_name' => 'Company',
                'last_name' => 'com',
                'phonenumber' => '+26377346',
                'email' => 'company@zimboflix.com',
                'age' => '23',
                'gender' => 'male',
                'country' => 'Zimbabwe',
                'city' => 'Bulawayo',
                'is_admin' => '3',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
