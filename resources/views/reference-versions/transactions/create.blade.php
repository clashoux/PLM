@extends('layout')

@section('title', 'Edit Transaction')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Transaction</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cities.locations.reference-versions.transactions.store', [$city->id, $location->id, $referenceVersionLocation->id]) }}" method="post">
            @csrf
            <select name="type" class="form-control mb-3">
                <option value="{{ \App\Http\Type::IN }}">In</option>
                <option value="{{ \App\Http\Type::OUT }}">Out</option>
            </select>
            <div class="form-group mb-3">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="" required>
            </div>
            <div class="form-group mb-3">
                <label for="unit_price">Unit Price</label>
                <input type="number" name="unit_price" class="form-control" value="" required>
            </div>
            <div class="form-group mb-3">
                <label for="date">Date of transaction</label>
                <input type="date" name="date" class="form-control" value="" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
