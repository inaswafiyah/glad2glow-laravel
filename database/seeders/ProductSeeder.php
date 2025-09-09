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
            'name' => 'Moisturizer A',
            'description' => 'Krim pelembab wajah',
            'stock' => 50,
            'image' => 'moisturizer_a.jpg',
            'kategori_id' => 1,
            'price' => 50000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Lipstick B',
            'description' => 'Lipstik warna merah matte',
            'stock' => 30,
            'image' => 'lipstick_b.jpg',
            'kategori_id' => 2,
            'price' => 35000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Shampoo C',
            'description' => 'Shampoo untuk rambut kering',
            'stock' => 40,
            'image' => 'shampoo_c.jpg',
            'kategori_id' => 3,
            'price' => 45000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}

}
