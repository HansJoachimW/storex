<?php

namespace Database\Seeders;

use App\Models\Producer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producer::factory()->create([
            'producer_name' => 'BARDI Smarthome Indonesia'
        ]);
        Producer::factory()->create([
            'producer_name' => 'PT Nusantara Tridaya Invoasi'
        ]);
        Producer::factory()->create([
            'producer_name' => 'Fantech Store Indonesia'
        ]);
        Producer::factory()->create([
            'producer_name' => 'StoreX'
        ]);
        Producer::factory()->create([
            'producer_name' => 'Rexus Indonesia'
        ]);
        Producer::factory()->create([
            'producer_name' => 'SanDisk Corporation'
        ]);
        Producer::factory()->create([
            'producer_name' => 'TP-Link Technologies Co.'
        ]);
    }
}
