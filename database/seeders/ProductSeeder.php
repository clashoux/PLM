<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'YaourtClassique',
            'prefix' => 'CL',
        ]);
        Product::create([
            'name' => 'Yaourt Brassé',
            'prefix' => 'BR',
        ]);
        Product::create([
            'name' => 'Yaourt à la Grecque',
            'prefix' => 'GC'
        ]);
        Product::create([
            'name' => 'Yaourt à Boire',
            'prefix' => 'BO'
        ]);
    }
}
