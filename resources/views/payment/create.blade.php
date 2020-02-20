@extends('layouts.app')

@section('content')
<div class="col-md-12">
<h1>Payment</h1>
    {!! Form::open(['action' => 'PaymentController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Student Name', 'Student Name')}}
            <select class="form-control" name="STUDENTID">
                @foreach($student as $item)
                <option value="{{$item->id}}">{{strtoupper($item->NAME)}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{Form::label('Month', 'Month')}}
            {!! Form::selectMonth('MONTH',null,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{Form::label('Monthly Due', 'Monthly Due')}}
            {{Form::number('AMOUNT', '', ['class' => 'form-control', 'placeholder' => '0,000.00'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <a href='/payment' type='button' class='btn btn-secondary'>Back to list</a>

    {!! Form::close() !!}
<div>
   
@endsection