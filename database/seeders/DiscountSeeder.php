<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert(array(
            array('promo_id' => 1, 'product_id' => 1),
            array('promo_id' => 2, 'product_id' => 2),
            array('promo_id' => 3, 'product_id' => 3),
            array('promo_id' => 1, 'product_id' => 4),
            array('promo_id' => 2, 'product_id' => 5),
            array('promo_id' => 3, 'product_id' => 6),
            array('promo_id' => 1, 'product_id' => 7),
            array('promo_id' => 2, 'product_id' => 8),
            array('promo_id' => 3, 'product_id' => 9),
            array('promo_id' => 1, 'product_id' => 10),
            array('promo_id' => 2, 'product_id' => 11),
            array('promo_id' => 3, 'product_id' => 12),
            array('promo_id' => 1, 'product_id' => 13),
            array('promo_id' => 2, 'product_id' => 14),
            array('promo_id' => 3, 'product_id' => 15),
            array('promo_id' => 1, 'product_id' => 16),
            array('promo_id' => 2, 'product_id' => 17),
            array('promo_id' => 3, 'product_id' => 18),
            array('promo_id' => 1, 'product_id' => 19),
            array('promo_id' => 2, 'product_id' => 20),
            array('promo_id' => 3, 'product_id' => 21),
            array('promo_id' => 1, 'product_id' => 22),
            array('promo_id' => 2, 'product_id' => 23),
            array('promo_id' => 3, 'product_id' => 24),
            array('promo_id' => 1, 'product_id' => 25),
            array('promo_id' => 2, 'product_id' => 26),
        ));
    }
}
