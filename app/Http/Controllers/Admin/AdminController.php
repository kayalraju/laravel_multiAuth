<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Carbon\Carbon; 
use Auth;
use App\Models\Saler;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index(){
    	return view('admin.login');
    }


    public function login(Request $request){

      //dd($request->all());
      $data = $request->all();

        if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']  ])){
            return redirect()->route('admin.dashboard')->with('error','Admin Login Successfully');
        }else{
            return back()->with('error','Invaild Email Or Password');
        }
    }

public function Dashboard(){

        $saler=Saler::all();
        //dd($saler);
    	return view('admin.admin_dashboard',compact('saler'));
    }


    public function AdminLogout(){

        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('error','Admin Logout Successfully');

    } 


    public function register(){
    	return view('admin.register');
    }


   public function AdminRegisterCreate(Request $request){
   	//dd($request->all());

   	Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);

         return redirect()->route('login_from')->with('error','Admin Created Successfully');
   }


   public function adminChangeStatus(Request $request){

    $salerstatus = Saler::find($request->user_id);
        $status = (isset($request->status) && $request->status == 0) ? 1 : 0;
        $salerstatus->status = $status;
        if($salerstatus->save()){
          return ['status'=>'success','message'=>'Status change successfully!'];
        }else{
          return ['status'=>'error','message'=>'Something going wrong'];
        }
   }
}
