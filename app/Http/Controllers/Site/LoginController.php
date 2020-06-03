<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(){

      return view('login.index');
    }

    public function entrar(Request $req){
      if(Auth::attempt([ 'email'=>$req['email'],'password'=>$req['senha'] ])){
        return redirect()->route('admin.loja');
      }
        return redirect()->route('site.login');
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
