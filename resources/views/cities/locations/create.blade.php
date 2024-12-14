@extends('layout')

@section('title', 'Create Location')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Location</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cities.locations.store', $city->id) }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" maxlength="50" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
