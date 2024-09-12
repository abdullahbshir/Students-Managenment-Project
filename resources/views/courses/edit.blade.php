@extends('layouts.app')

@section('content')
    <h2>Edit Course</h2>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" class="form-control" value="{{ $course->subject }}" required>
        </div>
        <div class="form-group">
            <label for="teacher_id">Teacher:</label>
            <select id="teacher_id" name="teacher_id" class="form-control" required>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $course->teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="class">Class:</label>
            <input type="text" id="class" name="class" class="form-control" value="{{ $course->class }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
@endsection
