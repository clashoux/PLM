<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Location;
use App\Models\ReferenceVersion;
use App\Models\ReferenceVersionLocation;
use Illuminate\Http\Request;
class ReferenceVersionLocationController extends Controller
{

    public function edit(City $city, Location $location, ReferenceVersionLocation $reference_version)
    {
        $referenceVersionLocation = $reference_version;

        return view('reference-versions.edit', compact('city', 'location', 'referenceVersionLocation'));
    }

    public function update(City $city, Location $location, ReferenceVersionLocation $reference_version, Request $request)
    {
        $reference_version->update($request->all());

        return redirect()->route('cities.locations.show', [$city->id, $location->id]);
    }

    public function destroy(City $city, Location $location, ReferenceVersionLocation $reference_version)
    {
        $reference_version->delete();

        return redirect()->route('cities.locations.show', [$city->id, $location->id]);
    }
}
