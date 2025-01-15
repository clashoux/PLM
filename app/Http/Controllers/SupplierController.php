<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Location;
use App\Models\Supplier;
use Illuminate\Http\Request;
class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::all();

        return view('suppliers.index', compact('suppliers'));
    }

    public function show(Supplier $supplier)
    {

        return view('suppliers.show', compact('supplier'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $supplier = Supplier::create($request->all());

        return redirect()->route('suppliers.show', [$supplier]);
    }

    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Supplier $supplier, Request $request)
    {
        $supplier->update($request->all());

        return redirect()->route('suppliers.show', [$supplier]);
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('suppliers.index');
    }
}
