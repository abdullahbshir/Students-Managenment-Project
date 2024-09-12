@extends('app')

@section('content')
<div class="container">
    <h1>Student Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $student->name }}</h5>
            <p class="card-text">Address: {{ $student->address }}</p>
            <p class="card-text">Mobile: {{ $student->mobile }}</p>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
