<?php

namespace Database\Seeders;

use App\Models\Platform;
use App\Models\Subdistributor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubdistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Platform::all() as $platform) {
            switch ($platform->id) {
                case 1:
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'HUB StoreX Tokopedia Surabaya',
                        'platform_id' => $platform->id
                    ]);
                    break;
                case 2:
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'HUB StoreX Bukalapak Surabaya',
                        'platform_id' => $platform->id
                    ]);
                    break;
                case 3:
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'HUB StoreX Shopee Surabaya',
                        'platform_id' => $platform->id
                    ]);
            }
        }
    }
}
