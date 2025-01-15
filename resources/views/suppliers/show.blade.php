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
@endsection
