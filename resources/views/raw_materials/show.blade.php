@extends('layout')

@section('title', 'Show raw material')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">Show raw material</h3>
            <div class="card-toolbar">
                <a href="{{ route('raw-materials.edit', ['raw_material' => $rawMaterial->id]) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <p>
                <strong>Name:</strong> {{ $rawMaterial->name }}
            </p>
        </div>
    </div>
@endsection
