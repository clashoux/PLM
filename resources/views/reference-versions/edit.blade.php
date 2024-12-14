@extends('layout')

@section('title', 'Edit Reference Version')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Reference Version</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cities.locations.reference-versions.update', [$city->id, $location->id, $referenceVersionLocation->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{ $referenceVersionLocation->quantity }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="selling_price">Selling Price</label>
                <input type="number" name="selling_price" class="form-control" value="{{ $referenceVersionLocation->selling_price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
