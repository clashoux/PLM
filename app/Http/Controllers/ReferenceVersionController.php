<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Models\Product;
use App\Models\ReferenceVersion;
use Illuminate\Http\Request;

class ReferenceVersionController extends Controller
{
    public function create(Product $product, Reference $reference)
    {
        return view('products.references.versions.create', compact('product', 'reference'));
    }

    public function store(Request $request, Product $product, Reference $reference)
    {
        $request->merge(['reference_id' => $reference->id]);
        $referenceVersion = ReferenceVersion::create($request->all());

        return redirect()->route('products.references.versions.show', ['product' => $product->id, 'reference' => $reference->id, 'version' => $referenceVersion->id]);
    }

    public function show(Product $product, Reference $reference, ReferenceVersion $version)
    {
        $referenceVersion = $version;
        return view('products.references.versions.show', compact('product', 'reference', 'referenceVersion'));
    }

    public function edit(Product $product, Reference $reference, ReferenceVersion $version)
    {
        $referenceVersion = $version;
        return view('products.references.versions.edit', compact('product', 'reference', 'referenceVersion'));
    }

    public function update(Request $request, Product $product, Reference $reference, ReferenceVersion $version)
    {
        $version->update($request->all());

        return redirect()->route('products.references.versions.show', ['product' => $product->id, 'reference' => $reference->id, 'version' => $version->id]);
    }

    public function destroy(Product $product, Reference $reference, ReferenceVersion $version)
    {
        $version->delete();

        return redirect()->route('products.references.show', ['product' => $product->id, 'reference' => $reference->id]);
    }

}
