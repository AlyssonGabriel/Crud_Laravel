<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;


class CadastrarController extends Controller
{
    public function index(){
      return view('Cadastrar');

    }
    public function cadastrado(Request $req){
      try {
        \App\Validator\CadastrarValidator::validate($req->all());
        $dados=[
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
            'imagem'=>$req->imagem,
          ];
          //
          // if($req->hasfile('imagem')){
          //   $imagem=$req->file('imagem');
          //   $num=rand(1111,9999);
          //   $dir="img/loja";
          //   $ex=$imagem->guessClientExtension();
          //   $nomeImagem="imagem_".$num.".".$ex;
          //   $imagem->move($dir,$nomeImagem);
          //
          //   $dados['imagem']=$dir."/".$nomeImagem;
          // }


        User::create($dados);
        return redirect()->route('admin.loja');

      } catch (\App\Validator\ValidationException $exception ) {
        return redirect()->route('admin.cadastrar')->withErrors($exception->getValidator());

      }

    $dados=[
        'name'=>$req->name,
        'email'=>$req->email,
        'password'=>Hash::make($req->password),
      ];
    //  dd($req->all());

      //$dados=$req->all();
      User::create($dados);



      return redirect()->route('admin.loja');
    }
}
