<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Course;

class RegisterController extends Controller
{
    public function index(){
        $course = Course::all();
        return view('home',compact('course'));
    }

    public function test(){
        return view('/test');
    }
    public function userRegister(Request $request){
        $request->validate([
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            'referal_code' => 'required',
            'course' => 'required',
          
        ]);
        $register = new Register();
        $register->email = $request->email;
        $register->mobile = $request->mobile;
        $register->password = $request->password;
        $register->ref_code = $request->referal_code;
        $register->course = $request->course;
        $register->save();
        $course = Course::find($request->course);
     
        return redirect($course->link);
    }
}
