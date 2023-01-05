<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::factory()->create([
            'user_id' => 2,
            'product_id' => 44,
            'quantity' => 4,
            'subtotal' => 480000.00
        ]);
        Cart::factory()->create([
            'user_id' => 2,
            'product_id' => 22,
            'quantity' => 1,
            'subtotal' => 2499000.00
        ]);
        Cart::factory()->create([
            'user_id' => 2,
            'product_id' => 2,
            'quantity' => 1,
            'subtotal' => 425000.00
        ]);
        Cart::factory()->create([
            'user_id' => 3,
            'product_id' => 44,
            'quantity' => 4,
            'subtotal' => 480000.00
        ]);
        Cart::factory()->create([
            'user_id' => 3,
            'product_id' => 22,
            'quantity' => 1,
            'subtotal' => 2499000.00
        ]);
    }
}
