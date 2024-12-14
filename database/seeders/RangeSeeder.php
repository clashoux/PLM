<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Range;

class RangeSeeder extends Seeder
{
    public function run()
    {
        Range::create([
            'name' => 'Bio',
            'prefix' => 'BIO',
        ]);
        Range::create([
            'name' => 'Sans matière grasse',
            'prefix' => 'SMG',
        ]);
        Range::create([
            'name' => 'Sans lactose',
            'prefix' => 'SLC',
        ]);
        Range::create([
            'name' => 'Vegan',
            'prefix' => 'VEG',
        ]);
    }
}
