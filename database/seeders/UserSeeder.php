<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Role::all() as $role) {
            if ($role->id === 1) {
                User::create([
                    'name' => 'Admin',
                    'email' => 'admin@localhost',
                    'password' => bcrypt('password'),
                    'role_id' => $role->id
                ]);
            } elseif ($role->id === 2) {
                User::create([
                    'name' => 'Hans',
                    'email' => 'hans@localhost',
                    'password' => bcrypt('password'),
                    'role_id' => $role->id
                ]);
                User::create([
                    'name' => 'Kenneth',
                    'email' => 'kenneth@localhost',
                    'password' => bcrypt('password'),
                    'role_id' => $role->id
                ]);
            }
        }
    }
}
