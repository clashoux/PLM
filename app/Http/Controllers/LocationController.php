<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Location;
use Illuminate\Http\Request;
class LocationController extends Controller
{

    public function show(City $city, Location $location)
    {

        return view('cities.locations.show', compact('city', 'location'));
    }

    public function create(City $city)
    {
        return view('cities.locations.create', compact('city'));
    }

    public function store(City $city, Request $request)
    {
        $request->merge(['city_id' => $city->id]);
        $location = Location::create($request->all());

        return redirect()->route('cities.locations.show', [$city->id, $location->id]);
    }

    public function edit(City $city, Location $location)
    {

        return view('cities.locations.edit', compact('city', 'location'));
    }

    public function update(City $city, Location $location, Request $request)
    {
        $location->update($request->all());

        return redirect()->route('cities.locations.index', $city->id);
    }

    public function destroy(City $city, Location $location)
    {
        $location->delete();

        return redirect()->route('cities.locations.index', $city->id);
    }
}
