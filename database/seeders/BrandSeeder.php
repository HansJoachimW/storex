<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory()->create([
            'brand_name' => 'BARDI',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Logitech',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Fantech',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'StoreX',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Rexus',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Thronmax',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'AFTO',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Glass Pro',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Vention',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Baseus',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Avaro',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'SanDisk',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Fimi',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Yesoul',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Redragon',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Advance Digitals',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Robolife',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Welhome',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Advan',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'EviniX',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Matrix',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Luby',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Nagoya',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'TP-Link',
            'logo' => 'defaultproduct.jpg',
            'origin' => ''
        ]);
    }
}
