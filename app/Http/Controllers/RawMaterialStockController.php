<?php

namespace App\Http\Controllers;

use App\Models\RawMaterial;
use App\Models\RawMaterialStock;
use App\Models\Supplier;
use Illuminate\Http\Request;
class RawMaterialStockController extends Controller
{
    public function create(Supplier $supplier)
    {
        $materials = RawMaterial::all();
        return view('suppliers.raw_materials.create', compact('supplier', 'materials'));
    }

    public function store(Supplier $supplier, Request $request)
    {
        $request->merge(['supplier_id' => $supplier->id]);
        RawMaterialStock::create($request->all());


        return redirect()->route('suppliers.show', [$supplier]);
    }

    public function edit(Supplier $supplier, RawMaterialStock $rawMaterial)
    {
//        $materials = RawMaterial::all();
        return view('suppliers.raw_materials.edit', compact('supplier', 'rawMaterial'));
    }

    public function update(Supplier $supplier, RawMaterialStock $rawMaterial, Request $request)
    {
        $rawMaterial->update($request->all());

        return redirect()->route('suppliers.show', [$supplier]);
    }

    public function destroy(Supplier $supplier, RawMaterialStock $rawMaterial)
    {
        $rawMaterial->delete();

        return redirect()->route('suppliers.show', [$supplier]);
    }
}
