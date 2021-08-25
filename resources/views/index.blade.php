@extends('layout')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <a class="btn btn-success" href="{{route('create.account')}}">Add new Account </a>

        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th >Account Name</th>
            <th >Starting Balance</th>
         
            <th >Actions</th>
            
        
        </tr>
            @foreach ($account as $acc)
        <tr>
            
                <td>{{$acc->name}}</td> 
                <td>{{$acc->amount}}</td>
               
                <td>
                    <a class="btn btn-info" href="{{URL::to('show'.$acc->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{URL::to('edit/account/'.$acc->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{URL::to('delete/account/'.$acc->id)}}" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
           
        
        </tr> @endforeach

    </table>
@endsection