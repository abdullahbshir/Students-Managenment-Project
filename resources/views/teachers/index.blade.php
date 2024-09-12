@extends('layouts.app')

@section('content')
    <h2>Teachers List</h2>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">Add Teacher</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->mobile }}</td>
                    <td>
                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
