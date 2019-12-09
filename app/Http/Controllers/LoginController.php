<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use App\Models\UsuarioIntrajus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('public.login');
    }

    public function postLogin(LoginRequest $request){
        $usuario = UsuarioIntrajus::select('id_usuario','nome','cpf','funcao')->where('cpf',$request->input('usuario'))->whereRaw('senha = password(?)',$request->input('senha'))->where('ativo','Y')->first();
        if($usuario){
            //Auth::login($usuario);
            Auth::loginUsingId($usuario->id_usuario);
            return redirect()->intended('/');
        }
        return redirect()->back()->with('mensagemErro','Usuário ou senha incorretos');
    }
}
