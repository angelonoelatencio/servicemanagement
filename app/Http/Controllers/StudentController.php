<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            $student = Student::all();
            return view('student.index')->with('student',$student);
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'NAME' => 'required',
            'ADDRESS' => 'required',
            'AMOUNT' => 'required'
        ]);

        // Handle File Upload
        

        // Create Post
        $s = new Student;
        $s->NAME = $request->input('NAME');
        $s->ADDRESS = $request->input('ADDRESS');
        $s->AMOUNT = $request->input('AMOUNT');
        $s->CREATED_DATETIME = 'test';
        $s->CREATED_BY =  'ID: '.auth()->user()->id.', NAME: '.auth()->user()->name;
        $s->UPDATED_DATETIME = 'test';
        $s->UPDATED_BY = 'test';
        
      
        $s->save();

        return redirect('/student')->with('success', 'Post Created');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $this->validate($request, [
            'NAME' => 'required',
            'ADDRESS' => 'required',
            'AMOUNT' => 'required'
        ]);
		$s = Student::find($student->id);
       

        // Update Post
        $s->NAME = $request->input('NAME');
        $s->ADDRESS = $request->input('ADDRESS');
        $s->AMOUNT = $request->input('AMOUNT');
        
        $s->save();

        return redirect('/student')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();
  
        return redirect()->route('student.index')
                        ->with('success','Student deleted successfully');
    }
}
