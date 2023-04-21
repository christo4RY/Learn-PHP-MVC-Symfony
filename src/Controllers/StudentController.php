<?php

namespace App\Controllers;

use App\Models\Student;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentController
{
    public function index()
    {
        return view('index.save', [
            'students'=>Student::all()
        ]);
    }

    public function show($id)
    {
        $student = Student::where('id', $id)->first();
        return view('show', [
            'student'=> $student
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Student::create($request->request->all());
        return redirect('/index');
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        return view('edit', [
            'student'=> $student
        ]);
    }
    public function update(Request $request, $id)
    {
        Student::where('id', $id)->update($request->request->all());
        return redirect('/index');
    }

    public function destory($id)
    {
        Student::destroy($id);
        return redirect('/index');
    }
}
