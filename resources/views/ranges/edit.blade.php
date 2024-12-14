@extends('layout')

@section('title', 'Edit Range')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Range</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('ranges.update', $range->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $range->name }}" maxlength="50" required>
            </div>
            <div class="form-group mb-3">
                <label for="prefix">Prefix</label>
                <input type="text" name="prefix" class="form-control" value="{{ $range->prefix }}" maxlength="4" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
