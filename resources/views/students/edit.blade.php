@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This specifies that it's a PUT request -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ $student->address }}" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" class="form-control" value="{{ $student->mobile }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
</div>
@endsection
