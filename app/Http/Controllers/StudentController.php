<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('home', compact('students'));
    }
    public function create()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required",
            'email' => "required",
            'password' => "required",
            'age' => "required",
            'course' => "required",
            'city' => "required"
        ]);
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->age = $request->age;
        $student->course = $request->course;
        $student->city = $request->city;
        $student->save();

        return redirect(route('home'));
    }
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('show', compact('student'));
    }
   
        public function destroy(string $id)
    {
        $student = Student::find($id)->delete();
        return redirect(route('home'));
    }
        public function edit(string $id)
    {
        $student = Student::find($id);
        return view('edit',compact('student'));
    }
        public function update(Request $request , string $id)
    {
        $student = Student::find($id);
       $request->validate([
            'name' => "required",
            'email' => "required",
            'password' => "required",
            'age' => "required",
            'course' => "required",
            'city' => "required"
        ]);
       
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->age = $request->age;
        $student->course = $request->course;
        $student->city = $request->city;
        $student->save();

        return redirect(route('home'));
    }


}
