@extends('layout')

@section('title', 'Create City')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create City</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cities.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" maxlength="50" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
