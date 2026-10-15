<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Kopi Kenangan Mantan',
            'category' => 'drinks',
            'description' => 'Espresso dengan susu segar dan gula aren asli.',
            'price' => 18000,
            'image_url' => 'https://via.placeholder.com/150',
        ]);

        Product::create([
            'name' => 'Americano Cold',
            'category' => 'drinks',
            'description' => 'Espresso ganda disajikan dingin.',
            'price' => 15000,
            'image_url' => 'https://via.placeholder.com/150',
        ]);
    }
}