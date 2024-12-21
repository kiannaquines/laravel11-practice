<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $context['students'] =  Student::all();
        return view('students.index',$context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Store';
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return 'Show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('form', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'student_id' => 'required|string|max:20',
        ]);

        $student->update($validated);

        return redirect()->route('student.edit', $student->id)->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        return 'Destroy';
    }
}
