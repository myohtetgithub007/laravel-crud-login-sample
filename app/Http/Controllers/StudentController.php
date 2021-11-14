<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $aa = Student::all();
        return view('student.index', compact('aa'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:students',
            'email' => 'required',

        ]);

        $stu = new Student();
        $stu->name =  $request->get('name');
        $stu->email =  $request->get('email');
        $stu->save();
        return redirect('/create');
        // return redirect('/create')->with('status', 'Form Data Has Been validated and insert');
    }



    public function edit($id)
    {
        $stu = student::find($id);
        // return view('student.edit')->with('aa', $stu);
        return view('student.edit', compact('stu'));
    }

    public function update(Request $res, $id)

    {
        $validatedData = $res->validate([
            'name' => 'required|unique:students',
            'email' => 'required',

        ]);
        $stu  = Student::find($id);
        $stu->name =  $res->get('name');
        $stu->email =  $res->get('email');
        $stu->update();
        return redirect('/');
    }
}
