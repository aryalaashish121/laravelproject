<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        //validation
        $this->validate($request, [
            'username'=>'required|min:5',
            'password'=>'required|min:8',
        ]);

        //checking user details
        if(!auth()->attempt($request->only('username','password'))){
                return back()->with('status', 'Invalid Login Details');
        }

        //redirecting to dashboard if correct
        return redirect()->route('dashboard');
    }
}
