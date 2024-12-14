@extends('layout')

@section('title', 'Edit City')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit City</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cities.update', $city->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $city->name }}" maxlength="50" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
