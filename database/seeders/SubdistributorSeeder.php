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
                        'subdistributor_name' => 'BARDI Smart Home',
                        'platform_id' => $platform->id
                    ]);
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'DORAN I Distributor Logitech Surabaya',
                        'platform_id' => $platform->id
                    ]);
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'Fantech Store Indonesia',
                        'platform_id' => $platform->id
                    ]);
                    break;
                case 2:
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'StoreX',
                        'platform_id' => $platform->id
                    ]);
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'Rexus Indonesia',
                        'platform_id' => $platform->id
                    ]);
                    break;
                case 3:
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'Master Dealer Sandisk Surabaya',
                        'platform_id' => $platform->id
                    ]);
                    Subdistributor::factory()->create([
                        'subdistributor_name' => 'TP Link Surabaya',
                        'platform_id' => $platform->id
                    ]);
                    break;
            }
        }
    }
}
