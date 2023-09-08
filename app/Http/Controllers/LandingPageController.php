<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product,
    User,
};
use App\Mail\WelcomeNewUSer;

use Illuminate\Support\Facades\Mail;
use App\PasswordGenerator;
class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        if($request->search){
            $product = Product::where('name_product', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $product = Product::take(10)->where('show', 1)->get();
        }
        $new_product = Product::take(5)->latest()->where('show', 1)->get();
        
       
        return view('welcome', compact('new_product', 'product'));
    }
    public function register(Request $request)
    {
        
        if($request->all()){
            
            $request->validate([
                'username'=> 'required',
                'email'=> 'required|email|max:255',
                'notelp' => 'required'
            ]);
            if($request){
                $password = PasswordGenerator::generate(16);
                
                $newUser = User::create([
                    'name' => $request->username,
                    'email' => $request->email,
                    'notelp' => $request->notelp, 
                    'password'=> bcrypt($password),
                    'role' => 'user',
                    'active'=> 0,
                ]);
              
                Mail::to($newUser->email)->send(new WelcomeNewUser($password, $newUser));
                $request->session()->flash('sukses');
                return redirect('/register');
            }
        }else{
            return view('register');
        }
    }
}
