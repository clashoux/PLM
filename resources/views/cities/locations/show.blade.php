@extends('layout')

@section('title', 'Show Location')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title">Show Location</h3>
        <div class="card-toolbar">
            <a href="{{ route('cities.locations.edit', [$location->city_id, $location->id]) }}" class="btn btn-primary btn-sm">
                <i class="fas fa-edit"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <p>
            <strong>Name:</strong> {{ $location->name }}
        </p>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">References version</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Reference Version</th>
                    <th>Quantity</th>
                    <th>Selling Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($location->referenceVersionLocations as $referenceVersionLocation)
                    <tr>
                        <td>{{ $referenceVersionLocation->referenceVersion->name }}</td>
                        <td>{{ $referenceVersionLocation->quantity }}</td>
                        <td>{{ $referenceVersionLocation->selling_price }}</td>
                        <td>
                            <a href="{{ route('cities.locations.reference-versions.edit', [$location->city_id, $location->id, $referenceVersionLocation->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('cities.locations.reference-versions.destroy', [$location->city_id, $location->id, $referenceVersionLocation->id]) }}" method="post" class="d-inline">
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
