@extends('layouts.app')

@section('content')
   
    @if($paid->count() > 0)
    <div class="col-md-12">
   
    <div class="form-group">
    <h1>Month Paid</h1>
    <a type="button" class="btn btn-dark" href="/">Back</a>
        </div>
    <div class="form-group">
            {{Form::label('Student Name', 'Student Name')}}   
            {!! Form::text('StudentName',strtoupper($StudentInfo->NAME),['class' => 'form-control','disabled' => 'disabled']) !!}
        </div>

        <div class="form-group">
            {{Form::label('Address', 'Address')}}        
            {!! Form::text('ADDRESS',strtoupper($StudentInfo->ADDRESS),['class' => 'form-control','disabled' => 'disabled']) !!}
        </div>
        <div class="form-group">
            {{Form::label('Amount', 'Monthly Payment')}}        
            {!! Form::text('AMOUNT','PHP '.$StudentInfo->AMOUNT,['class' => 'form-control','disabled' => 'disabled']) !!}
        </div>
        <div class="form-group">
            <table class="table table-bordered table-hover" id="table">
            <thead>
                    <tr>
                        <th>Payment Date</th>
                        <th>Month</th>

                    </tr>
            </thead>
            <tbody>
                    @foreach($paid as $s)
                        <tr>
                            <td>{{date('M d, yy',strtotime($s->CREATED_DATETIME))}}</td>
                            <td>{{strtoupper($s->MONTH)}}</td>
 

                        </tr>
                    @endforeach
            </tbody>
                
                
            
            </table>
        </div>
    
    </div>
        
    @else
        <div class="col-md-12">
        <h1>Month Paid</h1>
       
            <table class="table table-bordered table-hover" id="table">
                <tr>
                <th>Payment Date</th>
                <th>Student Name</th>
                <th>Month</th>
                <th>Amount Paid</th>
                </tr>            
                        <tr>
                            <td colspan="6"><p style="text-align:center">No Payment found</p></td>
                        </tr>              
            </table>
        </div>
       
    @endif
    

   

@endsection





