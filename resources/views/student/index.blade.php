@extends('layouts.app')

@section('content')
   
    @if(count($student) > 0)
    <div class="col-md-12">
    <h1>Student List</h1>
    <a type="button" class="btn btn-success" href="/student/create">Add New Student</a>
    <table class="table table-bordered table-hover">
            <tr>
                <th>Student Name</th>
                <th>Address</th>
                <th>Monthly Due</th>
                <th>Action</th>
            </tr>
            
                @foreach($student as $s)
                    <tr>
                        <td>{{strtoupper($s->NAME)}}</td>
                        <td>{{strtoupper($s->ADDRESS)}}</td>
                        <td>PHP {{$s->AMOUNT}}</td>
                        <td><a href='/student/{{$s->id}}/edit' class='btn btn-warning'>Update</a></td>
                    </tr>
                @endforeach
          
        </table>
    </div>
        
    @else
        <p>No student found</p>
    @endif
@endsection