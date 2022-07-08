<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Superadmin;
use Carbon\Carbon; 
use Auth;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function index(){
    	return view('superadmin.dashboard');
    }

    public function getlogin(){
    	return view('superadmin.login');
    }



    public function postlogin(Request $request){

      //dd($request->all());
      $data = $request->all();

        if(Auth::guard('superadmin')->attempt(['email' => $data['email'], 'password' => $data['password'] ])){
            return redirect()->route('super.dashboard')->with('error','Super Admin Login Successfully');
        }else{
            return back()->with('error','Invaild Email Or Password');
        }
    }
 


    public function superAdminLogout(){

        Auth::guard('superadmin')->logout();
        return redirect()->route('login')->with('error',' Super Admin Logout Successfully');

    } 





    public function superregister(){
    	return view('superadmin.register');
    }


    public function superAdminRegisterCreate(Request $request){
   	//dd($request->all());

   	Superadmin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);

         return redirect()->route('login')->with('error','super Admin Created Successfully');
   }
}
