<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class UserController extends Controller
{
    function loginpage(){
        return view('front.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/back/member');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    


    function registerpage(){
        return view('front.register');

    }

    function register(Request $req){
        

        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $password=$req->password;
        $haspw=Hash::make($password);
        $user->password=$haspw;
        $user->save();

    }

    
function memberpage(){
    return view('back.member');
}


    
}
