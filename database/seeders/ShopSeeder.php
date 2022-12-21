<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert(array(
            array('platform_id' => 1, 'product_id' => 1),
            array('platform_id' => 2, 'product_id' => 2),
            array('platform_id' => 3, 'product_id' => 3),
            array('platform_id' => 1, 'product_id' => 4),
            array('platform_id' => 2, 'product_id' => 5),
            array('platform_id' => 3, 'product_id' => 6),
            array('platform_id' => 1, 'product_id' => 7),
            array('platform_id' => 2, 'product_id' => 8),
            array('platform_id' => 3, 'product_id' => 9),
            array('platform_id' => 1, 'product_id' => 10),
            array('platform_id' => 2, 'product_id' => 11),
            array('platform_id' => 3, 'product_id' => 12),
            array('platform_id' => 1, 'product_id' => 13),
            array('platform_id' => 2, 'product_id' => 14),
            array('platform_id' => 3, 'product_id' => 15),
            array('platform_id' => 1, 'product_id' => 16),
            array('platform_id' => 2, 'product_id' => 17),
            array('platform_id' => 3, 'product_id' => 18),
            array('platform_id' => 1, 'product_id' => 19),
            array('platform_id' => 2, 'product_id' => 20),
            array('platform_id' => 3, 'product_id' => 21),
            array('platform_id' => 1, 'product_id' => 22),
            array('platform_id' => 2, 'product_id' => 23),
            array('platform_id' => 3, 'product_id' => 24),
            array('platform_id' => 1, 'product_id' => 25),
            array('platform_id' => 2, 'product_id' => 26),
        ));
    }
}
