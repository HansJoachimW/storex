<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert(array(
            array('producer_id' => 1, 'product_id' => 1),
            array('producer_id' => 1, 'product_id' => 2),
            array('producer_id' => 1, 'product_id' => 3),
            array('producer_id' => 1, 'product_id' => 4),
            array('producer_id' => 1, 'product_id' => 5),
            array('producer_id' => 1, 'product_id' => 6),
            array('producer_id' => 1, 'product_id' => 7),
            array('producer_id' => 1, 'product_id' => 8),
            array('producer_id' => 1, 'product_id' => 9),
            array('producer_id' => 1, 'product_id' => 10),
            array('producer_id' => 1, 'product_id' => 11),
            array('producer_id' => 1, 'product_id' => 12),
            array('producer_id' => 1, 'product_id' => 13),
            array('producer_id' => 1, 'product_id' => 14),
            array('producer_id' => 1, 'product_id' => 15),
            array('producer_id' => 1, 'product_id' => 16),
            array('producer_id' => 1, 'product_id' => 17),
            array('producer_id' => 1, 'product_id' => 18),
            array('producer_id' => 1, 'product_id' => 19),
            array('producer_id' => 1, 'product_id' => 20),
            array('producer_id' => 1, 'product_id' => 21),
            array('producer_id' => 1, 'product_id' => 22),
            array('producer_id' => 1, 'product_id' => 23),
            array('producer_id' => 1, 'product_id' => 24),
            array('producer_id' => 1, 'product_id' => 25),
            array('producer_id' => 1, 'product_id' => 26),
        ));
    }
}
