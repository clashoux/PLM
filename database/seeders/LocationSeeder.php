<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run()
    {
        Location::create([
            'name' => 'Main Factory',
            'city_id' => 1,
            'type' => 'Factory',
        ]);

        Location::create([
            'name' => 'Paris Warehouse 6589T',
            'city_id' => 2,
            'type' => 'Warehouse',
        ]);

    }
}

