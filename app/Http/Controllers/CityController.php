<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
class CityController extends Controller
{
    public function index()
    {

        $cities = City::all();

        return view('cities.index', compact('cities'));
    }

    public function show(City $city)
    {

        return view('cities.show', compact('city'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $city = City::create($request->all());

        return redirect()->route('cities.index');
    }

    public function edit(City $city)
    {

        return view('cities.edit', compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->all());

        return redirect()->route('cities.index');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index');
    }
}
