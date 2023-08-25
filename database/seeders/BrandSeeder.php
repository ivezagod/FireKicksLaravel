<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
           'name'=>'Nike',
           'image'=>'/images/nikelogo.png'
        ]);

        Brand::create([
           'name'=>'Adidas',
           'image'=>'/images/adidaslogo.png'
        ]);

        Brand::create([
           'name'=>'Convers',
           'image'=>'/images/converslogo.png'
        ]);

    }
}
