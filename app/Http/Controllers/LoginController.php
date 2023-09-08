<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if($request->all()){
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);
            $credentials = [
                'name' => $request->input('username'), 
                'password' => $request->input('password'), 
            ];
            $credentials_email = [
                'email' => $request->input('username'), 
                'password' => $request->input('password'), 
            ];
        
            if (Auth::attempt($credentials) OR Auth::attempt($credentials_email)  ) {
                if(Auth()->user()->role == 'admin'){
                    return redirect()->intended('/dashboard');
                }else{
                    Auth::logout();
                    return redirect('/login/admin');
                }
                
            } else {
            
                return back()->withErrors(['login' => 'Username atau password salah.']); 
            }
        }else{
            return view('login');
        }

       
    }

    public function loginuser(Request $request)
    {
        if($request->all()){
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);
            $credentials = [
                'name' => $request->input('username'), 
                'password' => $request->input('password'), 
            ];
            $credentials_email = [
                'email' => $request->input('username'), 
                'password' => $request->input('password'), 
            ];
            if (Auth::attempt($credentials) OR Auth::attempt($credentials_email)  ) {
                if(Auth()->user()->active == 1){
                    return redirect()->intended('/'); 
                }else{
                    Auth::logout();
                    return redirect('/login');
                }
                
            } else {
            
                return back()->withErrors(['login' => 'Username atau password salah.']); 
            }
        }else{
            return view('loginuser');
        }
    }
}
