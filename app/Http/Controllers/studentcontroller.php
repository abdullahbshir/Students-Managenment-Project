<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a listing of the students
    public function index()
    {
        $students = Student::all(); // Fetch all students
        return view('students.index', compact('students'));
    }

    // Display the form for creating a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a newly created student in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('flash_message', 'Student added successfully!');
    }

    // Display the specified student
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Show the form for editing the specified student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update the specified student in storage
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
        ]);

        // Update the student data
        $student->update($request->all());
        return redirect()->route('students.index')->with('flash_message', 'Student updated successfully!');
    }

    // Remove the specified student from storage
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('flash_message', 'Student deleted successfully!');
    }
}
