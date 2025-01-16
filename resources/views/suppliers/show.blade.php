@extends('layout')

@section('title', 'Show Supplier')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">Show Supplier</h3>
            <div class="card-toolbar">
                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <p>
                <strong>Name:</strong> {{ $supplier->name }}
            </p>
            <p>
                <strong>Contact Person:</strong> {{ $supplier->contact_person }}
            </p>
            <p>
                <strong>Address:</strong> {{ $supplier->address }}
            </p>
            <p>
                <strong>Phone:</strong> {{ $supplier->phone }}
            </p>
            <p>
                <strong>Email:</strong> {{ $supplier->email }}
            </p>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste of raw materials</h3>
            <div class="card-toolbar">
                <a href="{{ route('suppliers.raw-materials.create', $supplier) }}" class="btn btn-primary">Add raw material</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-rounded table-striped border gy-7 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                            <th>#</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier->rawMaterialStocks as $rawMaterial)
                            <tr>
                                <td>{{ $rawMaterial->id }}</td>
                                <td>{{ $rawMaterial->rawMaterial->name }}</td>
                                <td>{{ $rawMaterial->quantity }}</td>
                                <td>{{ $rawMaterial->price }}</td>
                                <td class="text-end">
                                    <a href="{{ route('suppliers.raw-materials.edit', [$supplier, $rawMaterial]) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('suppliers.raw-materials.destroy', [$supplier, $rawMaterial]) }}"
                                        method="post" class="d-inline">
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
