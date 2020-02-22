@extends('layouts.app')

@section('content')
<div class="col-md-12">
<h1>Payment Details</h1>
    {!! Form::open(['action' => 'PaymentController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Student Name', 'Student Name')}}   
            {!! Form::text('StudentName',strtoupper($StudentInfo->NAME),['class' => 'form-control','disabled' => 'disabled']) !!}
        </div>

        <div class="form-group">
            {{Form::label('Address', 'Address')}}        
            {!! Form::text('ADDRESS',strtoupper($StudentInfo->ADDRESS),['class' => 'form-control','disabled' => 'disabled']) !!}
        </div>
        <div class="form-group">
            {{Form::label('Amount', 'Amount')}}        
            {!! Form::text('AMOUNT','PHP '.$StudentInfo->AMOUNT,['class' => 'form-control','disabled' => 'disabled']) !!}
        </div>
        <div class="form-group">
            {{Form::label('Select Month', 'Select Month')}}        
            <select class="form-control" name="MONTH">
                @foreach($UnPaidMonth as $item)
                        <option value="{{$item}}">{{$item}}</option>      
                @endforeach
            </select>
        </div>
        {{ Form::hidden('STUDENTID', $StudentInfo->id) }}
        {{Form::submit('Add Payment', ['class'=>'btn btn-primary'])}}
        

    {!! Form::close() !!}
<div>

@endsection