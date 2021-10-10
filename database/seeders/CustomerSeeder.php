<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['id' => 1 ,
                'user_id' => 3,
                'name' => 'Phùng Văn Thành',
                'age' => '25',
                'gender' => 'Nam' ,
                'phone' => '0862.458.563',
                'address' => 'Số 121, phố Nguyễn Trãi, quận Thanh Xuân',
                'city' => 'Hà Nội',
                'national' => 'Việt Nam']
        ]);
    }
}
