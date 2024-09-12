@extends('layout')

@section('content')
<div class="container">
    <h2>Edit Teacher</h2>
    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $teacher->name }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ $teacher->address }}" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" class="form-control" value="{{ $teacher->mobile }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Teacher</button>
    </form>
</div>
@endsection
    