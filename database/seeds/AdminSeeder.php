<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Bimcoin',
            'last_name' => 'Boss',
            'middle_name' => '',
            'religion' => '',
            'profession' => 'Admin',
            'country' => '',
            'role' => 'admin',
            'password' => bcrypt('123bimcoin45..'),
            'age' => '30',
            'phone' => '',
            'email' => 'boss@bimcoin.cc',
            'address' => '',
            'how_you_knew' => ''
        ]);

        User::create([
            'first_name' => 'Bimcoin',
            'last_name' => 'User',
            'middle_name' => '',
            'religion' => 'Christianity',
            'profession' => 'Tester',
            'country' => 'Nigeria',
            'role' => 'user',
            'password' => bcrypt('123bimcoin45.'),
            'age' => '30',
            'phone' => '',
            'email' => 'demo.user@bimcoin.cc',
            'address' => '0x6D00a6f1c5319EDDD76873c10ED3975c3bD4C10C',
            'how_you_knew' => ''
        ]);
    }
}
