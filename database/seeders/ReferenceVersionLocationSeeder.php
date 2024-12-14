<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReferenceVersionLocation;

class ReferenceVersionLocationSeeder extends Seeder
{
    public function run()
    {
        ReferenceVersionLocation::create([
            'location_id' => 1,
            'reference_version_id' => 1,
            'quantity' => 100,
            'selling_price' => 100,
        ]);

        ReferenceVersionLocation::create([
            'location_id' => 2,
            'reference_version_id' => 1,
            'quantity' => 100,
            'selling_price' => 100,
        ]);
    }
}

