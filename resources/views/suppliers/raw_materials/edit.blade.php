@extends('layout')

@section('title', 'Edit Raw material for supplier')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Raw material for supplier</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('suppliers.raw-materials.update', [$supplier,'raw_material' => $rawMaterial]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="materials">Raw materials</label>
                    <select id="materials" class="form-control" disabled>
                        <option value="{{ $rawMaterial->rawMaterial->id }}">{{ $rawMaterial->rawMaterial->name }}</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" required value="{{ $rawMaterial->quantity }}">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="number" step="0.01" name="price" id="price" class="form-control" required value="{{ $rawMaterial->price }}">
                </div>
                <div class="form-group mb-3">
                    <label for="purchase_date">Purchase date</label>
                    <input type="date" name="purchase_date" id="purchase_date" class="form-control" required value="{{ $rawMaterial->purchase_date }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
