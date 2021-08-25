@extends('layout')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h2>Create New Account</h2> 

            </div>
            <a class="btn btn-success" href="{{route('index')}}">Back </a>

        </div>
    </div>
    <form action="{{route('store.account')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Account Name:<strong>
                <input type="text" name="name" class="form-control" placeholder="Account Name">


            </div>

        </div>
        

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Starting Balance :<strong>
                <input type="number" name="amount" class="form-control" placeholder="Account Name">
                

            </div>

        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Daily Expense:<strong>
                <input type="number" name="daily_expense" class="form-control" placeholder="Account Name">
                

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