@extends('layout')

@section('title', 'Edit raw material')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit raw material</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('raw-materials.update', $rawMaterial->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" maxlength="50" required value="{{ $rawMaterial->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
