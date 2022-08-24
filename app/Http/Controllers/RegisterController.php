<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index(){
        return view('/home');
    }
    public function userRegister(Request $request){
        $request->validate([
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            'referal_code' => 'required',
            'course' => 'required'
        ]);
        $register = new Register();
        $register->email = $request->email;
        $register->mobile = $request->mobile;
        $register->password = $request->password;
        $register->ref_code = $request->referal_code;
        $register->course = $request->course;
        $register->save();
    }
}
