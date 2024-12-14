<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Models\Product;
use App\Models\Range;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index(Product $product)
    {
        $references = $product->references;

        return view('products.references.index', compact('references'));
    }

    public function show(Product $product, Reference $reference)
    {
        return view('products.references.show', compact('product', 'reference'));
    }

    public function create(Product $product)
    {
        $ranges = Range::all();
        return view('products.references.create', compact('product', 'ranges'));
    }

    public function store(Request $request, Product $product)
    {
        $request->merge(['product_id' => $product->id]);
        $reference = Reference::create($request->all());

        return redirect()->route('products.references.show', ['product' => $reference->product_id, 'reference' => $reference->id]);
    }

    public function edit(Product $product, Reference $reference)
    {
        $ranges = Range::all();
        return view('products.references.edit', compact('product', 'reference', 'ranges'));
    }

    public function update(Request $request, Product $product, Reference $reference)
    {
        $reference->product_id = $product->id;
        $reference->update($request->all());

        return redirect()->route('products.references.show', ['product' => $product->id, 'reference' => $reference->id]);
    }

    public function destroy(Product $product, Reference $reference)
    {
        $reference->delete();

        return redirect()->route('products.show', ['product' => $product->id]);
    }
}
