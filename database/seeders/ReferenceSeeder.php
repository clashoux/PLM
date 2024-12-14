<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reference;

class ReferenceSeeder extends Seeder
{
    public function run()
    {
        Reference::create([
            'name' => 'Framboise',
            'prefix' => 'FR',
            'product_id' => 1,
            'range_id' => 1,
        ]);
        Reference::create([
            'name' => 'Pomme',
            'prefix' => 'PM',
            'product_id' => 1,
            'range_id' => 1,
        ]);
    }
}
