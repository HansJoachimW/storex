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
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Logitech',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Fantech',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'StoreX',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Rexus',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Thronmax',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'AFTO',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Glass Pro',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Vention',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Baseus',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Avaro',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'SanDisk',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Fimi',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Yesoul',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Redragon',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Advance Digitals',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Robolife',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Welhome',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Advan',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'EviniX',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Matrix',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Luby',
            'logo' => '',
            'origin' => ''
        ]);
        Brand::factory()->create([
            'brand_name' => 'Nagoya',
            'logo' => '',
            'origin' => ''
        ]);
    }
}
