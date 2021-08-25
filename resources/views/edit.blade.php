@extends('layout')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Account</h2> 

           
            <a class="btn btn-success" href="{{route('index')}}">Back </a>
            </div>
        </div>
       
    </div>
    <form action="{{URL::to('update/account/'.$account->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Account Name:<strong>
                <input type="text" name="name" class="form-control"  value="{{$account->name}}">


            </div>

        </div>
        

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Starting Balance :<strong>
                <input type="number" name="amount" class="form-control"  value="{{$account->amount}}">
                

            </div>

        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Daily Expense:<strong>
                <input type="number" name="daily_expense" class="form-control"  value="{{$account->daily_expense}}">
                

            </div>

        </div>
        
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                  <button type="submit"  class="btn btn-primary" >Submit</button>
                

            </div>

        </div>
        

    </div>
    </form>
@endsection