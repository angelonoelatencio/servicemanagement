@extends('layouts.app')

@section('content')
<div class='col-md-12'>
<h1>Edit Student</h1>
    {!! Form::open(['action' => ['StudentController@update', $student->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Full Name', 'Full Name')}}
            {{Form::text('NAME',$student->NAME, ['class' => 'form-control', 'placeholder' => 'Full Name'])}}
        
        </div>
        <div class="form-group">
        {{Form::label('body', 'Address')}}
        {{Form::textarea('ADDRESS', $student->ADDRESS, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Address'])}}
           
        </div>
        <div class="form-group">
        {{Form::label('Monthly Due', 'Monthly Due')}}
            {{Form::number('AMOUNT', $student->AMOUNT, ['class' => 'form-control', 'placeholder' => '0000.00'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
       
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <a href='/student' type='button' class='btn btn-secondary'>Back to list</a>
    {!! Form::close() !!}
</div>
   
@endsection