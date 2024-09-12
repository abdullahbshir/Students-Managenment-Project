<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// Redirect home to the students index page
Route::get('/', function () {
    return redirect()->route('students.index');
})->name('home'); // Optional: Naming the route for future reference

// Resource routes for courses, teachers, and students
Route::resource('courses', CourseController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);

// Specific route for creating a course (optional, as resource route already provides this)
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');

