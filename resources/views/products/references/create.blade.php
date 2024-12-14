@extends('layout')

@section('title', 'Create Reference')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Reference</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('products.references.store', $product->id) }}" method="post">
            @csrf
            
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" maxlength="50" required>
            </div>
            <div class="form-group mb-3">
                <label for="prefix">Prefix</label>
                <input type="text" name="prefix" class="form-control" maxlength="4" required>
            </div>
            <div class="form-group mb-3">
                <label for="range_id">Range</label>
                <select name="range_id" class="form-control" required>
                    <option value="">Select Range</option>
                    @foreach ($ranges as $range)
                        <option value="{{ $range->id }}">{{ $range->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
