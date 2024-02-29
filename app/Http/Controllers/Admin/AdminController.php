<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }
 public function store(Request $request){
 $formFields = $request->validate([
    'name'=>'required|min:3',
    'email'=>'required|email|unique:users,email',
    'password'=>'required|confirmed'
 ]);

 // Hash password
 $formFields['password']= bcrypt($formFields['password']);

 // create User
 $user = User::create($formFields);

 // Login user
 auth()->login($user);
 return redirect('/')->with('message','user registred successfully');

 }


 public function logout(Request $request){

    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerate();
    return redirect('/login')->with('message','you have been logged out');
 }

public function create(){
    return view('admin.auth.Register');
}

    public function login(){
        return view('admin.auth.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required'
         ]);

         if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/admin/dashboard')->with('message','login successfully');
         }
         return back()->withErrors(['email'=>'incorrect email or password'])->onlyInput('email');
    }
}
