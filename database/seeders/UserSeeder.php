<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Glad2Glow Admin',
                'role' => 'admin',
                'password' => Hash::make('123456'),
            ]
        );

        User::updateOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'name' => 'Glad2Glow User',
                'role' => 'user',
                'password' => Hash::make('123456'),
            ]
        );
    }
}
