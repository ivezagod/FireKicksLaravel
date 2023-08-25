<?php

namespace Database\Seeders;

use App\Models\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Number::create([
           'number'=>36
        ]);
        Number::create([
           'number'=>37
        ]);
        Number::create([
           'number'=>38
        ]);
        Number::create([
           'number'=>39
        ]);
        Number::create([
           'number'=>40
        ]);
        Number::create([
           'number'=>41
        ]);
        Number::create([
           'number'=>42
        ]);
        Number::create([
           'number'=>43
        ]);
        Number::create([
           'number'=>44
        ]);
        Number::create([
           'number'=>45
        ]);
        Number::create([
           'number'=>46
        ]);

        Number::create([
           'number'=>47
        ]);

        Number::create([
           'number'=>48
        ]);
    }
}
