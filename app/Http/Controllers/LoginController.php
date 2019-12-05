<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(){
        return view('public.login');
    }

    public function postLogin(LoginRequest $request){

    }
}
