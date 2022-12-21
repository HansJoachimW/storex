<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platform::factory()->create([
            'platform_name' => 'Tokopedia',
            'logo' => ''
        ]);
        Platform::factory()->create([
            'platform_name' => 'Bukalapak',
            'logo' => ''
        ]);
        Platform::factory()->create([
            'platform_name' => 'Shopee',
            'logo' => ''
        ]);
    }
}
