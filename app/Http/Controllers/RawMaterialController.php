<?php

namespace App\Http\Controllers;

use App\Models\RawMaterial;
use Illuminate\Http\Request;
class RawMaterialController extends Controller
{

    public function index()
    {
        $materials = RawMaterial::all();

        return view('raw_materials.index', compact('materials'));
    }

    public function show(RawMaterial $rawMaterial)
    {

        return view('raw_materials.show', compact('rawMaterial'));
    }

    public function create()
    {
        return view('raw_materials.create');
    }

    public function store(Request $request)
    {
        $material = RawMaterial::create($request->all());

        return redirect()->route('raw-materials.show', [$material]);
    }

    public function edit(RawMaterial $rawMaterial)
    {
        return view('raw_materials.edit', compact('rawMaterial'));
    }

    public function update(RawMaterial $rawMaterial, Request $request)
    {
        $rawMaterial->update($request->all());

        return redirect()->route('raw-materials.show', [$rawMaterial]);
    }

    public function destroy(RawMaterial $rawMaterial)
    {
        $rawMaterial->delete();

        return redirect()->route('raw-materials.index');
    }
}
