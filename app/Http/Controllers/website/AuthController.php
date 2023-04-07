<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('website.auth.register');
    }
    public function postRegister(Request $request){
        dd($request)->all;
    }

        public  function login()
    {
        return view('website.auth.login');
    }
}
