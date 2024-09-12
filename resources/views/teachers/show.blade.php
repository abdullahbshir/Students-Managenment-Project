@extends('app')

@section('content')
<div class="container">
    <h1>Teacher Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $teacher->name }}</h5>
            <p class="card-text">Address: {{ $teacher->address }}</p>
            <p class="card-text">Mobile: {{ $teacher->mobile }}</p>
            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
