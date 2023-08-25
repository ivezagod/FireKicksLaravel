<?php

namespace Database\Seeders;

use App\Models\Number;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumberProudctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numbers = Number::all()->pluck('id')->toArray();
        $products = Product::all();

        foreach ($products as $product){
            $product->numbers()->attach($numbers);
        }

    }
}
