@extends('layout')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-md-4 margin-tb">
            <div class="pull-left">
                <h2> Accounts Details</h2> 
                <a class="btn btn-success" href="{{route('index')}}">Back </a>

            </div>
         
        </div>
    </div>
    <div class=" col-md-4 margin-tb">
    <table class="table table-dark table-sm">
        <tr>
            <th width="100px">Account Name</th>
            <th width="80px">Starting Balance</th>
            <th>Daily Expense</th>
            <th width="80px">Last Balance</th>
        </tr>
        <tr>
            
           
                <td>{{$account->name}}</td> 
                <td>{{$account->amount}}</td>
                <td>{{$account->daily_expense}}</td>
                <td>{{$account->last_balance}}</td>
               
           
           
        </tr>

    </table>
    </div>
   
@endsection