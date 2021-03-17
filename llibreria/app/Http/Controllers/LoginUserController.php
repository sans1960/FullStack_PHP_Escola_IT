<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RecuperarRequest;

class LoginUserController extends Controller
{
    public function __construct()
    {
      $this->middleware('dataara');
    }
    public function login(){
        return view('auth.login');
    }
    public function logout(){
        return "Pagina de logout";
    }
    public function register(){
        return view('auth.register');
    }
    public function recuperar(){
        return view('auth.recuperar');
    }
    public function loginUsuario(LoginRequest $request){
        dd($request->all());

    }
    public function registerUsuario(RegisterRequest $request){
        dd($request->all());

    }
    public function recuperarPassword(RecuperarRequest $request){
        dd($request->all());

    }

}
