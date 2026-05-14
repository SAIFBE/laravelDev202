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
            'nom' => 'Laptop',
            'prix' => 1500,
            'id_category' => 1
        ]);

        Product::create([
            'nom' => 'Phone',
            'prix' => 800,
            'id_category' => 1
        ]);

        Product::create([
            'nom' => 'T-Shirt',
            'prix' => 25,
            'id_category' => 2
        ]);

        Product::create([
            'nom' => 'Football',
            'prix' => 40,
            'id_category' => 4
        ]);
    }
}