@extends('layout')

@section('title', 'Show Reference')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">Show Reference | {{ $reference->getPrefix() }} </h3>
        </div>
        <div class="card-body">
            <p>
                <strong>Name:</strong> {{ $reference->name }}
            </p>
            <p>
                <strong>Prefix:</strong> {{ $reference->prefix }}
            </p>
            <p>
                <strong>Range:</strong> {{ $reference->range->name }}
            </p>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <div class="card-title">Versions ({{ $reference->referenceVersions->count() }})</div>
            <div class="card-toolbar">
                <a href="{{ route('products.references.versions.create', ['product' => $product->id, 'reference' => $reference->id]) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>In Sales</th>
                        <th>Production Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reference->referenceVersions as $version)
                        <tr>
                            <td>{{ $version->name }}</td>
                            <td>{{ $version->is_in_sales ? 'Yes' : 'No' }}</td>
                            <td>{{ $version->production_price }}</td>
                            <td>
                                <a href="{{ route('products.references.versions.show', ['product' => $product->id, 'reference' => $reference->id, 'version' => $version->id]) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('products.references.versions.edit', ['product' => $product->id, 'reference' => $reference->id, 'version' => $version->id]) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('products.references.versions.destroy', ['product' => $product->id, 'reference' => $reference->id, 'version' => $version->id]) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
