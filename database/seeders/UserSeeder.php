<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'admin@gmail.com', 'password' => 'admin', 'role_id' => '1'],
            ['email' => 'kimchi@gmail.com', 'password' => '123456', 'role_id' => '2'],
            ['email' => 'vanthanh@gmail.com', 'password' => '123456', 'role_id' => '3']
        ]);
    }
}
