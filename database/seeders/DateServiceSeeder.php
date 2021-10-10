<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('date_services')->insert([
            ['id' => 1 ,
                'provider_id' => 1,
                'customer_id' => 1,
                'total_price' => 1000000,
                'location_date' => 'Hà Nội',
                'date_time' => '2012-08-18',
                'status' => 'Đồng ý hẹn hò']
        ]);
    }
}
