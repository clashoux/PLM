<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Location;
use App\Models\ReferenceVersion;
use App\Models\ReferenceVersionLocation;
use App\Models\Transaction;
use Illuminate\Http\Request;
class TransactionController extends Controller
{
//    Create and store
    public function create(City $city, Location $location, ReferenceVersionLocation $reference_version)
    {
        $referenceVersionLocation = $reference_version;
        return view('reference-versions.transactions.create', compact('city', 'location', 'referenceVersionLocation'));
    }

    public function store(City $city, Location $location, ReferenceVersionLocation $reference_version, Request $request)
    {
        $transaction = new Transaction($request->all());
        $transaction->referenceVersionLocation()->associate($reference_version);
        $transaction->save();

        return redirect()->route('cities.locations.reference-versions.show', [
            $city->id,
            $location->id,
            $reference_version->id,
        ]);
    }

    public function edit(City $city, Location $location, ReferenceVersionLocation $reference_version, Transaction $transaction)
    {
        $referenceVersionLocation = $reference_version;
        return view('reference-versions.transactions.edit', compact('city', 'location', 'referenceVersionLocation', 'transaction'));
    }

    public function update(City $city, Location $location, ReferenceVersionLocation $reference_version, Transaction $transaction, Request $request)
    {
        $transaction->update($request->all());

        return redirect()->route('cities.locations.reference-versions.show', [
            $city->id,
            $location->id,
            $reference_version->id,
        ]);
    }

    public function destroy(City $city, Location $location, ReferenceVersionLocation $reference_version, Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('cities.locations.reference-versions.show', [
            $city->id,
            $location->id,
            $reference_version->id,
        ]);
    }
}
