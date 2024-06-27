<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerateToken();

            if(auth()->user()->role == 'petugas'){ // route customer
                return redirect()->route('dashboard');
            }else if(auth()->user()->role == 'dokter'){ // route admin
                return redirect()->route('dashboard');
            }else{ // route seller
                return;
            }
        }
        return redirect()->back()->with('loginError', "username atau password salah");
    }

    
    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
