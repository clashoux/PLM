@extends('layout')

@section('title', 'Create Reference')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Reference</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('products.references.versions.store', ['product' => $product->id, 'reference' => $reference->id]) }}" method="post">
            @csrf
            
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" maxlength="50" required>
            </div>
            <div class="form-group mb-3">
                <label for="production_price">Production Price</label>
                <input type="number" name="production_price" step="0.01" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="is_in_sales" id="is_in_sales" value="1" />
                    <label class="form-check-label" for="is_in_sales">
                        In Sales
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
