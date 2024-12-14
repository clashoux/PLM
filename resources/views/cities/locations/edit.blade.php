@extends('layout')

@section('title', 'Edit Location')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Location</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cities.locations.update', [$city->id, $location->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $location->name }}" maxlength="50" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
