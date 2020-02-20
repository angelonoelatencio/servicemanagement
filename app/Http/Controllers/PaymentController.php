<?php

namespace App\Http\Controllers;

use App\Payment;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Datatables;
class PaymentController extends Controller
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
            $payment = Payment::all();


            
           
            return view('payment.index')->with('payment',$payment);
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
            $student = Student::orderBy('NAME')->get();
            return view('payment.create',compact('student'));
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
                'STUDENTID' => 'required',
                'MONTH' => 'required',
                'AMOUNT' => 'required'
            ]);
            //student find by id
            $s = Student::find($request->input('STUDENTID'));
            
        // Create PAYMENT
        $p = new Payment;
        $p->STUDENTID = $request->input('STUDENTID');
        $p->STUDENTNAME = $s->NAME;
        $p->MONTH = $request->input('MONTH'); 
        $p->AMOUNT = $request->input('AMOUNT');   
        $p->CREATED_DATETIME = date("Y-m-d H:i:s");
        $p->CREATED_BY =  'ID: '.auth()->user()->id.', NAME: '.auth()->user()->name;
        $p->UPDATED_DATETIME = 'NOT UPDATED';
        $p->UPDATED_BY = 'NOT UPDATED';    
        $p->save();

        return redirect('/payment')->with('success', 'Post Created');
        }else{
            return redirect()->route('login');      
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
