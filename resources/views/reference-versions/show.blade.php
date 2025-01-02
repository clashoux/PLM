@extends('layout')

@section('title', 'Reference version location')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Reference version location</h3>
        <div class="card-toolbar">
            <a href="{{ route('cities.locations.reference-versions.transactions.create', [$city, $location, $referenceVersionLocation]) }}" class="btn btn-primary">
                Add Transaction
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date of transaction</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total cost price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    @if($transaction->type === 'In')
                        @php($color = 'light-success')
                    @else
                        @php($color = 'light-danger')
                    @endif
                    <tr class="bg-{{ $color }}">
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->date->format('Y-m-d') }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>{{ $transaction->unit_price }}</td>
                        <td>
                            @if($transaction->type === 'In')
                                -
                            @endif
                            {{ $transaction->quantity * $transaction->unit_price }}
                        </td>
                        <td>
                            <a href="{{ route('cities.locations.reference-versions.transactions.edit', [$city, $location,  $referenceVersionLocation, $transaction]) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('cities.locations.reference-versions.transactions.edit', [$city, $location,  $referenceVersionLocation, $transaction]) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
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
