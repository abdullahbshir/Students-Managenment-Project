<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Method to show the list of courses
    public function index()
    {
        $courses = Course::with('teacher')->get(); // Retrieve all courses with teacher info
        return view('courses.index', compact('courses')); // Pass courses to the view
    }

    // Method to show the form for creating a new course
    public function create()
    {
        $teachers = Teacher::all(); // Fetch all teachers
        return view('courses.create', compact('teachers')); // Pass teachers to the view
    }

    // Method to store a new course
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'subject' => 'required|string|max:255',
            'teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|integer',
        ]);

        // Create a new course
        Course::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('courses.index')->with('success', 'Course added successfully!');
    }

    // Method to show the form for editing a course
    public function edit($id)
    {
        $course = Course::findOrFail($id); // Find the course by ID
        $teachers = Teacher::all(); // Retrieve all teachers
        return view('courses.edit', compact('course', 'teachers')); // Pass course and teachers to the view
    }

    // Method to update a course
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'subject' => 'required|string|max:255',
            'teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|integer',
        ]);

        $course = Course::findOrFail($id); // Find the course by ID
        $course->update($request->all()); // Update the course

        // Redirect to the index page with a success message
        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    // Method to show the details of a course
    public function show($id)
    {
        $course = Course::findOrFail($id); // Find the course by ID
        return view('courses.show', compact('course')); // Pass course to the view
    }

    // Method to delete a course
    public function destroy($id)
    {
        $course = Course::findOrFail($id); // Find the course by ID
        $course->delete(); // Delete the course

        // Redirect back to the courses index page with a success message
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}
