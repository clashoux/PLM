@extends('layout')

@section('title', 'Show Product')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">Show Product</h3>
            <div class="card-toolbar">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <p>
                <strong>Name:</strong> {{ $product->name }}
            </p>
            <p>
                <strong>Prefix:</strong> {{ $product->prefix }}
            </p>
        </div>
    </div>

    {{-- List of references --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">References</h3>
            <div class="card-toolbar">
                <a href="{{ route('products.references.create', $product->id) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-rounded table-striped border gy-7 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                        <th>#</th>
                        <th>Name</th>
                        <th>Prefix</th>
                        <th>Range</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product->references as $reference)
                        <tr>
                            <td>{{ $reference->id }}</td>
                            <td>{{ $reference->name }}</td>
                            <td>{{ $reference->prefix }}</td>
                            <td>{{ $reference->range->name }}</td>
                            <td>
                                <a href="{{ route('products.references.show', ['product' => $product->id, 'reference' => $reference->id]) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('products.references.edit', ['product' => $product->id, 'reference' => $reference->id]) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
