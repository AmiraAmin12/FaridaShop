<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(){
        return view('website.auth.register');
    }
    public function postRegister(Request $request){
       $request->validate(
        [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required |confirmed',
            'confirm_password'=>'required',
        ]
        );
        // $newUser = User::create($request->all());

        // if($newUser){
        //     return redirect('login');
        // }

        $inputs = $request->all();
        $inputs['password']= Hash::make( $inputs['password']);
        $newUser= User::create($request);
        if($newUser){
            return redirect('login');
        }
    }

        public  function login()
    {
        return view('website.auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}


