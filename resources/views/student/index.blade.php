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
                        <td>
                        <a href='/student/{{$s->id}}/edit' class='btn btn-warning'>Update</a> 
                        {!!Form::open(['action' => ['StudentController@destroy', $s->id], 'method' => 'POST', 'class' => 'pull-right','id' => 'confirm_delete'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                        </td>
                    </tr>
                @endforeach
          
        </table>
    </div>
        
    @else
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
                        <tr>
                            <td colspan="6"><p style="text-align:center">No student found</p></td>
                        </tr>              
            </table>
        </div>
       
    @endif
    

    <script type="text/javascript">
    $(document).ready(function(){
        $( "#confirm_delete" ).submit(function( event ) {
            event.preventDefault();
            swal.fire({
                title: 'Are you sure?',
                text: "Please click confirm to delete this item",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: true
                }).then((result) => {
                    if (result.value) {
                        $("#confirm_delete").off("submit").submit();
                        Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
                    }
            })
    
        });
    });
</script>
@endsection





