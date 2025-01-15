@extends('layout')

@section('title', 'Edit supplier')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit supplier</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('suppliers.update', $supplier->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" maxlength="50" required value="{{ $supplier->name }}">
            </div>
            <div class="form-group">
                <label for="contact_person">Contact Person</label>
                <input type="text" name="contact_person" class="form-control" maxlength="50" value="{{ $supplier->contact_person }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" maxlength="100" value="{{ $supplier->address }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" maxlength="20" value="{{ $supplier->phone }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" maxlength="50" value="{{ $supplier->email }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
