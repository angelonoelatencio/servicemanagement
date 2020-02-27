@extends('layouts.app')

@section('content')
   
    @if(count($payment) > 0)
    <div class="col-md-12">
    <h1>List of Paid Student</h1>
    <a type="button" class="btn btn-success" href="/payment/create">Pay Now</a>
    <table class="table table-bordered table-hover" id="table">
            <tr>
                <th>Payment Date</th>
                <th>Student Name</th>
                <th>Month</th>
                <th>Amount Paid</th>
            </tr>
            
                @foreach($payment as $s)
                    <tr>
                        <td>{{date('M d, yy',strtotime($s->CREATED_DATETIME))}}</td>
                        <td>{{strtoupper($s->STUDENTNAME)}}</td>
                        <td>{{strtoupper($s->MONTH)}}</td>
                        <td>PHP {{$s->AMOUNT}}</td>
                    </tr>
                @endforeach
          
        </table>
    </div>
        
    @else
        <div class="col-md-12">
        <h1>List of Paid Student</h1>
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
    

   
<script>


        $(document).ready( function () {
    $('#table').DataTable();
} );
         </script>
@endsection





