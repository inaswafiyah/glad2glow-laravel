<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    DB::table('products')->insert([
        [
            'name' => 'Toner',
            'description' => 'Toner untuk semua jenis kulit',
            'stock' => 50,
            'image' => 'https://i.pinimg.com/1200x/1d/7e/32/1d7e32ae763ba671fc375885da83a342.jpg',
            'kategori_id' => 1,
            'price' => 50000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'HandBody Lotion',
            'description' => 'Lotion untuk melembapkan kulit tubuh',
            'stock' => 30,
            'image' => 'https://i.pinimg.com/1200x/22/7e/bf/227ebf4ceffa6f68b856a189a88d8d1e.jpg',
            'kategori_id' => 2,
            'price' => 35000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Serum',
            'description' => 'Serum untuk wajah',
            'stock' => 40,
            'image' => 'https://i.pinimg.com/736x/6c/1f/4e/6c1f4e8afcf86d6a051a305de2f16560.jpg',
            'kategori_id' => 3,
            'price' => 45000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}

}
