<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promo::factory()->create([
            'promo_name' => 'DISC10',
            'uses' => 5,
            'amount' => 0.90
        ]);
        Promo::factory()->create([
            'promo_name' => 'DISC15',
            'uses' => 5,
            'amount' => 0.85
        ]);
        Promo::factory()->create([
            'promo_name' => 'DISC20',
            'uses' => 5,
            'amount' => 0.80
        ]);
    }
}
