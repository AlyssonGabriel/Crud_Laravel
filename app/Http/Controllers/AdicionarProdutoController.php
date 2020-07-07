<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdicionarProdutoController extends Controller
{
    public function Adicionar(Request $request){
      $this->authorize("admin.loja.adicionar", \App\Loja::class);
      try {
        \App\Validator\AdicionarValidator::validate($request->all());
        $dados= $request->all();
        \App\Loja::create($dados);
        return "Produto criado";
      } catch (\App\Validator\ValidationException $exception) {
        return redirect('/');
        ->withErrors($exception->getValidator())
        ->withInput();
      }






    }
}
