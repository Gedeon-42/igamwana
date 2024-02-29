<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $fields = $request->validate([
            'name'=>'required',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|confirmed'

        ]);
        $user = User::create([
          'name'=>$fields['name'],
          'email'=>$fields['email']  ,
          'password'=>bcrypt($fields['password']),
        ]);
        $token = $user->createToken('maytoken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);

    }
    public function login(Request $request){
  $formData = $request->validate([
    'email'=>'required|exists:users,email',
    'password'=>'required',
  ]);

  // check email
  $user = User::where('email',$formData['email'])->first();

// check password

if(!$user || !Hash::check($formData['password'],$user->password)){
    return response ([
        'message'=>'bad credentials',
    ],401);
}
  $token = $user->createToken('maytoken')->plainTextToken;
  $response = [
    'user'=>$user,
    'token'=>$token
  ];
  return response($response,201);

    }

    // public function logout(Request $requet){
    //      auth()->user()->token()->delete();
    //      return [
    //         'message'=>'logged out'
    //      ];
    // }
}
