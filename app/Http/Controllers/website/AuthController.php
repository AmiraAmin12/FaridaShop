<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        $inputs = $request->all();
        $inputs['password']= Hash::make( $inputs['password']);
        $newUser= User::create($inputs);
        if($newUser){
            return redirect('login');
        }
    }

        public  function login()
    {
        return view('website.auth.login');
    }
}
