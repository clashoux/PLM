@extends('layout')

@section('title', 'Show Range')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Show Range</h3>
    </div>
    <div class="card-body">
        <p>
            <strong>Name:</strong> {{ $range->name }}
            </p>
            <p>
                <strong>Prefix:</strong> {{ $range->prefix }}
            </p>
        </div>
    </div>
@endsection
