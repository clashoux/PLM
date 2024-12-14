@extends('layout')

@section('title', 'Create Product')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Product</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" maxlength="50" required>
            </div>
            <div class="form-group mb-3">
                <label for="prefix">Prefix</label>
                <input type="text" name="prefix" class="form-control" maxlength="4" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
