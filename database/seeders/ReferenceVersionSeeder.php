<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReferenceVersion;

class ReferenceVersionSeeder extends Seeder
{
    public function run()
    {
        ReferenceVersion::create([
            'name' => '2020',
            'reference_id' => 1,
            'is_in_sales' => true,
            'production_price' => 100,
        ]);

        ReferenceVersion::create([
            'name' => '2021',
            'reference_id' => 1,
            'is_in_sales' => true,
            'production_price' => 100,
        ]);
    }
}
