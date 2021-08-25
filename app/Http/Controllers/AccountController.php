<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AccountController extends Controller
{
 
        public function index(){
            $account = DB::table('accountss')->get();
            return view('index',compact('account'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'daily_expense'=>'required'
        ]);
    $data = array();
    $data['name']=$request->name;
    $data['amount']=$request->amount;
    $last_amount=($request->amount)-($request->daily_expense);
    $data['daily_expense']=$request->daily_expense;
    $data['last_balance']=$last_amount;
    $account=DB::table('accountss')->insert($data);
        
    return redirect()->route('index');

    }
    public function show( $id)
    {
        $account = DB::table('accountss')->where('id',$id)->first();
        return view('show',compact('account'));


    }

    public function Edit($id){
        $account = DB::table('accountss')->where('id',$id)->first();
        return view('edit',compact('account'));
    }


    public function update(Request $request){
        
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'daily_expense'=>'required'
        ]);
    $data = array();
    $data['name']=$request->name;
    $data['amount']=$request->amount;
    $last_amount=($request->amount)-($request->daily_expense);
    $data['daily_expense']=$request->daily_expense;
    $data['last_balance']=$last_amount;
    $account=DB::table('accountss')->where('id',$request->id)->update($data);
        
    return redirect()->route('index');

    }
    public function delete($id){
        $account = DB::table('accountss')->where('id',$id)->delete();
        return redirect()->route('index');
    }

}
                         