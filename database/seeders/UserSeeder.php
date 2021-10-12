<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *\
     * @return void
     */
    public function run()
    { 
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
    // public function run()
    // {
    //     DB::table('users')->insert([
    //         ['email' => 'admin@gmail.com', 'password' => 'admin', 'role_id' => '1'],
    //         ['email' => 'kimchi@gmail.com', 'password' => '123456', 'role_id' => '2'],
    //         ['email' => 'vanthanh@gmail.com', 'password' => '123456', 'role_id' => '3']
    //     ]);
    // }
}


