@extends('layout')

@section('title', 'Add Raw material for supplier')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add Raw material for supplier</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('suppliers.raw-materials.store', $supplier) }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="materials">Raw materials</label>
                <select name="raw_material_id" id="materials" class="form-control">
                    @foreach ($materials as $rawMaterial)
                        <option value="{{ $rawMaterial->id }}">{{ $rawMaterial->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="purchase_date">Purchase date</label>
                <input type="date" name="purchase_date" id="purchase_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
