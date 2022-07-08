<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function student(){
    	$student=Student::all();
    	//dd($student);
    	return view('student.home',compact('student'));
    }
    public function create(){

    	return view('student.add_student');
    }

    public function store(Request $request){
    	//dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:students|max:60'
        ],
        [
            'name.required' => 'Please Input the  student Name Field',
            
        ]);

    	$student=new Student();
    	$student->name=$request->input('name');
    	$student->email=$request->input('email');
    	$student->phone=$request->input('phone');
    	$student->city=$request->input('city');
    	$student->section=$request->input('section');
    	$student->subject=$request->input('subject');
        if ($request->file('image'))
                { 
                  $rand_val           = date('YMDHIS') . rand(11111, 99999);
                  $image_file_name    = md5($rand_val);
                  $file               = $request->file('image');
                  $fileName           = $image_file_name.'.'.$file->getClientOriginalExtension();
                  $destinationPath    = public_path().'/image/';
                  $file->move($destinationPath,$fileName);  
                  $student->image = $fileName ;
                }
    	$student->save();

    	return redirect()->route('student')->with('success',"Added data successfully");

    }

     public function edit($id){
    	$edit=Student::find($id);
    	//dd($edit);
    	return view('student.edit',compact('edit'));
    }

    public function update(Request $request,$id){
    	//dd($request->all());
    	$update=Student::find($id);
    	$update->name=$request->input('name');
    	$update->email=$request->input('email');
    	$update->phone=$request->input('phone');
    	$update->city=$request->input('city');
    	$update->section=$request->input('section');
    	$update->subject=$request->input('subject');
    	$update->save();
    	return redirect()->route('student')->with('success',"update data successfully");
    }


    public function delete($id){
    	$delete=Student::find($id);
    	$delete->delete();
    	return redirect()->route('student')->with('success',"delete data successfully");
    }
}
