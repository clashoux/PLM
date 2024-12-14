@extends('layout')

@section('title', 'Edit Reference')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Reference</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('products.references.update', ['product' => $product->id, 'reference' => $reference->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $reference->name }}" maxlength="50" required>
            </div>
            <div class="form-group mb-3">
                <label for="prefix">Prefix</label>
                <input type="text" name="prefix" class="form-control" value="{{ $reference->prefix }}" maxlength="4" required>
            </div>
            <div class="form-group mb-3">
                <label for="range_id">Range</label>
                <select name="range_id" class="form-control" required>
                    @foreach ($ranges as $range)
                        <option value="{{ $range->id }}" {{ $reference->range_id == $range->id ? 'selected' : '' }}>{{ $range->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
