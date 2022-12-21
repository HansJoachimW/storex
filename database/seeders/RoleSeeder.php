<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create([
            'role_name' => 'Admin',
            'privileges' => 'Global CRUD & login/register'
        ]);
        Role::factory()->create([
            'role_name' => 'User',
            'privileges' => 'Read data & login/register'
        ]);
    }
}
