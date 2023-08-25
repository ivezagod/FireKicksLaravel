<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsData = [
            [1, 1, 'Nike Air Force High', 'Waterproof winter boots', 150, 'image/EEPVaDTR2XdfJGbtKJcRahKcQPBNfQXcPvUmm2iz.png', 3, 'Kids'],
            [2, 1, 'Nike Air Force Low', 'Street wear sneaker', 150, 'image/DvoTs6COCWz6LiAbH4X9zcdjdRJKdSLRPWolsviW.png', 2, 'Kids'],
            [3, 2, 'Adidas Forum Low', 'Street wear sneaker', 110, 'image/iehnw7BuCza4r0nQ3vCEQIlL3GIg2O8T8Xk5n74x.png', 1, 'Kids'],
            [4, 1, 'Nike Air Jordan 1 Mid', 'Basketball Sneaker', 160, 'image/oMp3Fv7woVnUhYUhCx8VJXEME9z7WOWmDaOb7Jvy.png', 2, 'Kids'],
            [5, 3, 'Convers Chuck Taylor', 'Casual low top sneaker', 80, 'image/KsjLqH5zEHzI2aWvKUi6dJNyF3ITi5i77E7AqHKI.png', 1, 'Kids'],
            [6, 3, 'Convers Chuck Tylor', 'Casual high top sneaker', 100, 'image/uaKMguEulAThOBELg4XbM79MQRvPCycLENojsQtF.png', 1, 'Kids'],
            [7, 1, 'Nike Air Max Plus', 'Low top waterproof sneaker', 180, 'image/XlhbG0R2SuzkHZqqqH8013wrHP4bv8pUOxqGOBwz.png', 3, 'Male'],
            [8, 1, 'Nike Air Max 90', 'Low top casual sneaker', 150, 'image/rZW8ENP4TjqxLtCzDn5MgkTCPniaejMxmMDk33I5.png', 2, 'Male'],
            [9, 1, 'Nike Air Presto', 'High top walking sneaker', 130, 'image/1u7djPM1QafGHHPng7612DrYSGXJ9tjezxsZj6AA.png', 2, 'Male'],
            [10, 1, 'Nike Air Max 97', 'Low top waterproof sneaker', 180, 'image/A3nE1gbraFbTuUyAdGl2TFpaqupKKnDlU3n5v1ZP.png', 1, 'Male'],
            [11, 1, 'Nike Air Jordan 13', 'Basketball Sneaker', 130, 'image/wjUo8gH7jQbTWGVAcLK9RffIVJk1QHmAERHyvSPi.png', 1, 'Male'],
            [12, 1, 'Nike Air Force 1', 'Casual low top sneaker', 120, 'image/4t0CsAQfpX2fDJbbh7COJFRtU6wsO8rVjFFT0a8m.png', 1, 'Male'],
            [14, 1, 'Nike Air Max 90', 'Low top waterproof sneaker', 140, 'image/VGJoziXwjV6BNMVZj4BEj7o7haTTnq2yzyKrug6u.png', 2, 'Female'],
            [15, 2, 'Adidas Forum XLG', 'Low top casual sneaker', 70, 'image/vGIR8NhfUy5XcLMUGiqpQFPQLOHMnTBmebODBCUW.png', 2, 'Female'],
            [16, 1, 'Nike Air Force 1 Mid', 'High top walking sneaker', 130, 'image/QeFRKAa6sxm5bFX86v5mRDZm98RPn4PVjcTuosxp.png', 1, 'Female'],
            [17, 1, 'Nike Air Max 90', 'Low top casual sneaker', 130, 'image/SqSxd60LGQoeVU63JQPoWMnQY3RbhFcJqN6d03uS.png', 1, 'Female'],
            [18, 3, 'Convers Chuck Tylor', 'High top walking sneaker', 100, 'image/5kas3STyfnd7A2mxO59qwucrzzPAfYgBkzxY7x3m.png', 3, 'Female'],
            [19, 3, 'Convers Chuck Tylore', 'High top walking sneaker', 70, 'image/5dfMVniOawdNWxFkXbIRHEzgzIElmkcY8wEeSRSn.png', 2, 'Female'],
        ];

        foreach ($productsData as $productData) {
            Product::create([
                'brand_id' => $productData[1],
                'title' => $productData[2],
                'description' => $productData[3],
                'price' => $productData[4],
                'image' => $productData[5],
                'num_color' => $productData[6],
                'gender' => $productData[7],
            ]);

        }

    }
}
