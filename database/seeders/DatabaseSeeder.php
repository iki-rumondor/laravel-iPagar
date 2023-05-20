<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $role = Role::create(['name' => 'customer']);
        
        Permission::create(['name' => 'request order'])->assignRole($role);
        Permission::create(['name' => 'gallery'])->assignRole($role);
        Permission::create(['name' => 'warranty'])->assignRole($role);
        
        $role = Role::create(['name' => 'admin']);
        Permission::create(['name' => 'accept order'])->assignRole($role);


        $this->call([
            UserSeeder::class,
        ]);
    }
}
