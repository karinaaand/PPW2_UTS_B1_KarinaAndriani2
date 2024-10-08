<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'code' => 'A001',
            'name' => 'Produk 1',
            'quantity' => 10,
            'price' => 100.000,
            'description' => 'Ini adalah Produk 1',
        ]);

        Product::create([
            'code' => 'A002',
            'name' => 'Produk 2',
            'quantity' => 20,
            'price' => 200.000,
            'description' => 'Ini adalah Produk 2',
        ]);

        Product::create([
            'code' => 'A003',
            'name' => 'Produk 3',
            'quantity' => 30,
            'price' => 300.000,
            'description' => 'Ini adalah Produk 3',
        ]);

        // Tambahkan lebih banyak produk jika diperlukan
    }
}
