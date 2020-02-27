@extends('layouts.app')

@section('content')
    @if(session('success'))
    <script>
    Swal.fire(
    'Payment Added!',
    '{{session('success')}}',
    'success'
    )
    </script>
    @endif
    @if(count($payment) > 0)
    <div class="col-md-12">
 
    <div class="form-group">
        <h1>List of Paid Student</h1>
        <a type="button" class="btn btn-success" href="/payment/create">Pay Now</a>
    </div>
    <div class="form-group">
    <table class="table table-bordered table-hover" id="table">
            <tr>
                <th>Account Number</th>
                <th>Last Payment Date</th>
                <th>Student Name</th>
                <th>Completed Month Paid</th>
                <th>Amount Paid</th>
            </tr>
            
                @foreach($payment as $s)
                    <tr>
                        <td>{{$s->STUD_ACC}}</td>
                        <td>{{$s->CREATED_DATETIME}}</td>
                        <td>{{strtoupper($s->STUDENTNAME)}}</td>
                        <td>{{strtoupper($s->MONTH)}}</td>
                        <td>PHP {{$s->AMOUNT}}</td>
                    </tr>
                @endforeach
          
        </table>
    </div>
    </div>
        
    @else
        <div class="col-md-12">
        <h1>Student List</h1>
        <a type="button" class="btn btn-success" href="/payment/create">Pay Now</a>
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





