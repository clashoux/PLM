@extends('layout')

@section('title', 'Ranges')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Ranges List</h3>
        <div class="card-toolbar">
            <a href="{{ route('ranges.create') }}" class="btn btn-primary">Create Range</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-rounded table-striped border gy-7 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                        <th>#</th>
                        <th>Name</th>
                        <th>Prefix</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ranges as $range)
                        <tr>
                            <td>{{ $range->id }}</td>
                            <td>{{ $range->name }}</td>
                            <td>{{ $range->prefix }}</td>
                            <td class="text-end">
                                <a href="{{ route('ranges.show', $range->id) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('ranges.edit', $range->id) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('ranges.destroy', $range->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

