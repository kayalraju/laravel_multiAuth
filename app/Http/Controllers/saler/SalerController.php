<?php

namespace App\Http\Controllers\saler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Saler;
use Validator;
use Hash;
use Carbon\Carbon; 
use Auth;

class SalerController extends Controller
{
    public function login(){
        return view('saler.saler_login');
    }

    public function index(){
        return view('saler.saler_dashboard');
    }
     public function signup(){
        return view('saler.saler_register');
    }
    public function signupcreate(Request $request){
        
        //dd($request->all());
        // Admin::insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'created_at' => Carbon::now(),

        // ]);

        //  return redirect()->route('login_from')->with('error','Admin Created Successfully');
        $request->validate([
                'name'=> 'required|max:30',
                'phone'     => 'required|unique:salers|max:10',
                'email'     => 'required|unique:salers',
                // 'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'password' => 'required| min:4|confirmed',
                'password_confirmation' => 'required| min:4'
            ]);
        $addSaler= new Saler();
        $addSaler->name=$request->input('name');
        $addSaler->email=$request->input('email');
        $addSaler->phone=$request->input('phone');
        $addSaler->password =Hash::make($request->input('password'));
      
        $addSaler->save();
        return redirect()->route('saler.login')->with('error','Saler Register Successfully Now login');

    }

    public function salerLogin(Request $request){

        $data = $request->all();

        if(Auth::guard('saler')->attempt(['email' => $data['email'], 'password' => $data['password']  ])){
            return redirect()->route('saler.dashboard')->with('error','saler Login Successfully');
        }else{
            return back()->with('error','Invaild Email Or Password');
        }
    }

    public function salerLogout(){

        Auth::guard('saler')->logout();
        return redirect()->route('saler.login')->with('error',' Saler Logout Successfully');
    }
}
