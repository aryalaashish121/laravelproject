<?php

namespace App\Http\Controllers\auth;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request)
    {
        
        // dd($requrest->email);
        //validation
        $this-> validate($request, [
            'name'=>'required|max:225',
            'email'=>'required|email|max:225',
            'username'=>'required|min:5',
            'password'=>'required|min:8',
        ]);
        //store user

        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        //sign the user in
        auth()->attempt($request->only('email','password'));
        //redirect
        return redirect()->route('dashboard');
    }
}
