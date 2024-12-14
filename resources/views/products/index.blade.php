@extends('layout')

@section('title', 'Products')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Products List</h3>
        <div class="card-toolbar">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-rounded table-striped border gy-7 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                        <th>#</th>
                        <th>Name</th>
                        <th>Prefix</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->prefix }}</td>
                            <td class="text-end">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post" class="d-inline">
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
</div>


@endsection

