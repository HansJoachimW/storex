<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BrandSeeder::class,
            RoleSeeder::class,
            PlatformSeeder::class,
            UserSeeder::class,
            SubdistributorSeeder::class,
            ProducerSeeder::class,
            PromoSeeder::class,
            DiscountSeeder::class,
            RouteSeeder::class,
            ShopSeeder::class,
            ProductSeeder::class,
            CartSeeder::class
        ]);
    }
}
