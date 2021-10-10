<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
            ['id' => 1,
                'user_id' => 2,
                'name' => 'Nguyễn Kim Chi',
                'image' => 'SAO.jpg',
                'avatar' => 'avatar.png',
                'age' => '22',
                'birth_day' => '1998-08-12',
                'gender' => 'Nữ',
                'phone' => '0383423986',
                'address' => 'Số 15, phố Hàm Nghi, quận Bắc Từ Liêm',
                'city' => 'Hà Nội',
                'national' => 'Việt Nam',
                'height' => '156cm',
                'weight' => '52kg',
                'favourite' => 'Thích ăn kem, đi dạo phố',
                'description' => 'Hòa đồng, vui tính',
                'note' => 'Dị ứng hải sản',
                'social_network' => 'Kimchi1102'],
        ]);
    }
}
