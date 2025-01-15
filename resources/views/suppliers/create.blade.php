@extends('layout')

@section('title', 'Create Supplier')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Supplier</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('suppliers.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="contact_person">Contact Person</label>
                <input type="text" name="contact_person" class="form-control" maxlength="50">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" maxlength="100">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" maxlength="20">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" maxlength="50">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
