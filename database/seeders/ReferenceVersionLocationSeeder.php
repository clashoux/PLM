<?php

namespace Database\Seeders;

use App\Http\Type;
use Illuminate\Database\Seeder;
use App\Models\ReferenceVersionLocation;

class ReferenceVersionLocationSeeder extends Seeder
{
    public function run()
    {
        $rvl1 = ReferenceVersionLocation::create([
            'location_id' => 1,
            'reference_version_id' => 1,
            'quantity' => 100,
            'selling_price' => 100,
        ]);

        $rvl1->transactions()->create([
            'type' => Type::IN,
            'quantity' => 25,
            'unit_price' => 100,
            'date' => now(),
        ]);

        $rvl1->transactions()->create([
            'type' => Type::OUT,
            'quantity' => 50,
            'unit_price' => 200,
            'date' => now(),
        ]);

        $rvl2 = ReferenceVersionLocation::create([
            'location_id' => 2,
            'reference_version_id' => 1,
            'quantity' => 100,
            'selling_price' => 100,
        ]);

        $rvl2->transactions()->create([
            'type' => Type::IN,
            'quantity' => 25,
            'unit_price' => 100,
            'date' => now(),
        ]);

        $rvl2->transactions()->create([
            'type' => Type::OUT,
            'quantity' => 50,
            'unit_price' => 200,
            'date' => now(),
        ]);
    }
}

