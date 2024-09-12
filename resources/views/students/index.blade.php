@extends('layout')

@section('content')
    <div class="card">
        <h2>Student Application</h2>
    </div>
    <div class="card-body">
        @if(session('flash_message'))
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        @endif

        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm" title="Add new student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add new
        </a>
        <br /><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>
                            <a href="{{ route('students.show', $item->id) }}" title="View Student">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>
                            <a href="{{ route('students.edit', $item->id) }}" title="Edit student">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>
                            <form method="POST" action="{{ route('students.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete student" onclick="return confirm('Confirm delete?')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
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
