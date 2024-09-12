<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">Welcome to the Student Management System</h1>
            <p class="lead">Manage students, teachers, and courses efficiently with our system.</p>
            <hr class="my-4">
            <p>Use the links below to navigate to different sections:</p>
            <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}" role="button">View Students</a>
            <a class="btn btn-secondary btn-lg" href="{{ route('teachers.index') }}" role="button">View Teachers</a>
            <a class="btn btn-success btn-lg" href="{{ route('courses.index') }}" role="button">View Courses</a>
        </div>
    </div>
</body>
</html>
