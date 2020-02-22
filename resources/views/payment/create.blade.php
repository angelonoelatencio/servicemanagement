@extends('layouts.app')

@section('content')
<div class="col-md-12">
<h1>Select Student</h1>
    {!! Form::open(['action' => 'PaymentController@showPaymentDetails', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Student Name', 'Student Name')}}
            <select class="form-control" name="STUDENTID">
                @foreach($student as $item)
                <option value="{{$item->id}}">{{strtoupper($item->NAME)}}</option>
                @endforeach
            </select>
        </div>
        <!-- <div class="form-group">
            {{Form::label('Month', 'Month')}}
            {!! Form::selectMonth('MONTH',null,['class' => 'form-control']) !!}
        </div> -->
        <!-- <div class="form-group">
            {{Form::label('Monthly Due', 'Monthly Due')}}
            {{Form::number('AMOUNT', $item->AMOUNT, ['class' => 'form-control', 'placeholder' => '0,000.00'])}}
        </div> -->
        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
       

    {!! Form::close() !!}
<div>
@if(!empty($errormsg))
    
   <script>
   
   Swal.fire({icon: 'info',title: 'Already Paid',html: 'Student Name: {{strtoupper($errormsg->STUDENTNAME)}} <br>' + 'Payment Date: {{date('M d, yy',strtotime($errormsg->CREATED_DATETIME))}}'})
   </script>
@endif
@endsection