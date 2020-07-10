<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullname' => 'admin',
            'dateofbirth' => '2020-06-14',
            'gender' => 'male',
            'password' => bcrypt('admin'),
            'retypepassword' => bcrypt('admin'),
            'email' => 'admin@admin.localhost',
            'role' => 'admin'
        ]);
        
        User::create([
            'fullname' => 'user',
            'dateofbirth' => '2020-06-14',
            'gender' => 'male',
            'password' => bcrypt('user'),
            'retypepassword' => bcrypt('user'),
            'email' => 'user@user.localhost',
            'role' => 'user'
        ]);
        
    }
}
