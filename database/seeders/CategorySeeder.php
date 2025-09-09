<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('category_product')->insert([
         [
                'name' => 'Makeup',
                'created_at' => now(),
                'updated_at' => now(),
            ],
         [
                'name' => 'Skincare',
                'created_at' => now(),
                'updated_at' => now(),
            ],
         [
                'name' => 'Haircare',
                'created_at' => now(),
                'updated_at' => now(),
            ],
         [
                'name' => 'Bodycare',
                'created_at' => now(),
                'updated_at' => now(),
            ],
    ]);
    }
}
