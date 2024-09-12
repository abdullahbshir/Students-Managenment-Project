@extends('layouts.app')

@section('content')
    <h2>Course Details</h2>
    <table class="table table-bordered">
        <tr>
            <th>Subject:</th>
            <td>{{ $course->subject }}</td>
        </tr>
        <tr>
            <th>Teacher:</th>
            <td>{{ $course->teacher->name }}</td>
        </tr>
        <tr>
            <th>Class:</th>
            <td>{{ $course->class }}</td>
        </tr>
    </table>
    <a href="{{ route('courses.index') }}" class="btn btn-primary">Back to List</a>
@endsection
