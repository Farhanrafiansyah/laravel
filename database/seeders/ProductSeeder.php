<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop Gaming',
            'description' => 'Laptop untuk gaming berat.',
            'price' => 15000000,
        ]);
    }
}
