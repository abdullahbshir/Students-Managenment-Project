@extends('layouts.app')

@section('content')
    <h2>Add Course</h2>
    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" required>
        </div>
        <div class="form-group">
            <label for="teacher_id">Teacher</label>
            <select name="teacher_id" class="form-control" id="teacher_id" required>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input type="text" name="class" class="form-control" id="class" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Course</button>
    </form>
@endsection
