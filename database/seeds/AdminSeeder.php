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
    }
}
