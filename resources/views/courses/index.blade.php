@extends('layouts.app')

@section('content')
    <h2>Courses List</h2>

    {{-- Display success message if available --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
    <table class="table">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Teacher</th>
                <th>Class</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->subject }}</td>
                    <td>{{ $course->teacher->name }}</td>
                    <td>{{ $course->class }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
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
