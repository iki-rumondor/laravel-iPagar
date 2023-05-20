<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'admin',
            'password' => \bcrypt('admin'),
            'phone_num' => 123124109009,
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'username' => 12345678,
            'password' => \bcrypt(12345678),
            'phone_num' => 123,
            'level' => 'Basic',
        ]);
        $user->assignRole('customer');
        
    }
}
