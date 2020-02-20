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
        }else{          
            return redirect()->route('login');     
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            return view('student.create');
        }else{
            return redirect()->route('login');      
        }      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $this->validate($request, [
                'NAME' => 'required',
                'ADDRESS' => 'required',
                'AMOUNT' => 'required'
            ]);
            
        // Create Student
        $s = new Student;
        $s->NAME = $request->input('NAME');
        $s->ADDRESS = $request->input('ADDRESS');
        $s->AMOUNT = $request->input('AMOUNT');
        $s->CREATED_DATETIME = date("Y-m-d H:i:s");
        $s->CREATED_BY =  'ID: '.auth()->user()->id.', NAME: '.auth()->user()->name;
        $s->UPDATED_DATETIME = 'NOT UPDATED';
        $s->UPDATED_BY = 'NOT UPDATED';
        
      
        $s->save();

        return redirect('/student')->with('success', 'Post Created');
        }else{
            return redirect()->route('login');      
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
       // return view('student.show',compact('student'));
       if(Auth::check()){           
            return redirect('/student');
        }else{
            return redirect()->route('login');      
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        if(Auth::check()){           
            return view('student.edit',compact('student'));
        }else{
            return redirect()->route('login');      
        }   
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
        if(Auth::check()){           
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
            $s->UPDATED_DATETIME = date("Y-m-d H:i:s");
            $s->UPDATED_BY = 'ID: '.auth()->user()->id.', NAME: '.auth()->user()->name;
            
            $s->save();
    
            return redirect('/student')->with('success', 'Post Updated');
        }else{
            return redirect()->route('login');      
        }   
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        if(Auth::check()){           
            $student->delete();
  
            return redirect()->route('student.index')
                            ->with('success','Student deleted successfully');
        }else{
            return redirect()->route('login');      
        }   
       
    }
}
