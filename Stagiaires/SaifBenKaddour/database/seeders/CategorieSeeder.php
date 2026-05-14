<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nom' => 'Electronics',
            'description' => 'Electronic devices and gadgets'
        ]);

        Category::create([
            'nom' => 'Clothes',
            'description' => 'Fashion and clothing products'
        ]);

        Category::create([
            'nom' => 'Books',
            'description' => 'Educational and entertainment books'
        ]);

        Category::create([
            'nom' => 'Sports',
            'description' => 'Sports materials and accessories'
        ]);
    }
}