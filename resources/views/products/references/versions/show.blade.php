@extends('layout')

@section('title', 'Show Reference Version')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">Show Reference Version</h3>
            <div class="card-toolbar">
                <a href="{{ route('products.references.versions.edit', ['product' => $product->id, 'reference' => $reference->id, 'version' => $referenceVersion->id]) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <p>
                <strong>Name:</strong> {{ $referenceVersion->name }}
            </p>
            <p>
                <strong>In Sales:</strong> {{ $referenceVersion->is_in_sales ? 'Yes' : 'No' }}
            </p>
            <p>
                <strong>Production Price:</strong> {{ $referenceVersion->production_price }}
            </p>
        </div>
    </div>
@endsection
