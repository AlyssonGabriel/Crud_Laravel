<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function index(){

      return view('login.index');
    }

  public function entrar(Request $req){

      try {
          \App\Validator\LoginValidator::validate( $req->all() );

          if (Auth::attempt(['email'=>$req['email'], 'password'=>$req['password']])){
              return redirect()->route('admin.loja');
          }else if (!Auth::attempt(['email'=>$req['email'], 'password'=>$req['password']])){
            return redirect()->route('site.login');
          }
      }
      catch (\App\Validator\ValidationException $exception ) {
          return redirect()->route('site.login')->withErrors($exception->getValidator());
      }



}

    public function sair()
    {
      Auth::logout();
      return redirect()->route('site.Home');
    }
    public function mensagem(){
      return 'teste mensagens';
    }

}
