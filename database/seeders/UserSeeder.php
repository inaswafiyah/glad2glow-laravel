<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert(array(
            array(
                'username' => 'Glad2Glow',
                'email' => 'admin@gmail.com',
                'phone' => '089765433',
                'role' => '1',
                'password' => bcrypt('123456')
            ),
            array(
                'username' => 'vespeora',
                'email' => 'user@gmail.com',
                'phone' => '08765489337',
                'role' => '2',
                'password' => bcrypt('123456')
            ),
        ));
    }
}
