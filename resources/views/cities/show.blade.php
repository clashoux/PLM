@extends('layout')

@section('title', 'Show City')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title">Show City</h3>
    </div>
    <div class="card-body">
        <p>
            <strong>Name:</strong> {{ $city->name }}
        </p>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Locations</h3>
        <div class="card-toolbar">
            <a href="{{ route('cities.locations.create', $city->id) }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($city->locations as $location)
                    <tr>
                        <td>{{ $location->name }}</td>
                        <td>
                            <a href="{{ route('cities.locations.edit', [$city->id, $location->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('cities.locations.destroy', [$city->id, $location->id]) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
