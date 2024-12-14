<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run()
    {
        City::create([
            'name' => 'Paris',
        ]);

        City::create([
            'name' => 'Lyon',
        ]);

    }
}
