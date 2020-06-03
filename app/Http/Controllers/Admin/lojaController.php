<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Loja;

class lojaController extends Controller
{
    public function index()
    {
      $registros = Loja::all();
      return view('admin.loja.index',compact('registros'));
    }
    public function Adicionar(){
      return view('admin.loja.adicionar');
    }
    public function salvar(Request $req){
      $dados=$req->all();

      if(isset($dados['publicado'])){
        $dados['publicado']='sim';
      }else{
        $dados['publicado']='nao';
      }

      if($req->hasfile('imagem')){
        $imagem=$req->file('imagem');
        $num=rand(1111,9999);
        $dir="img/loja";
        $ex=$imagem->guessClientExtension();
        $nomeImagem="imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);

        $dados['imagem']=$dir."/".$nomeImagem;
      }
      Loja::create($dados);
      return redirect()->route('admin.loja');

    }
    public function editar($id){
      $registros=Loja::find($id);
      return view('admin.loja.editar',compact('registros'));
    }
    public function atualizar(Request $req,$id){
      $dados=$req->all();

      if(isset($dados['publicado'])){
        $dados['publicado']='sim';
      }else{
        $dados['publicado']='nao';
      }

      if($req->hasfile('imagem')){
        $imagem=$req->file('imagem');
        $num=rand(1111,9999);
        $dir="img/loja";
        $ex=$imagem->guessClientExtension();
        $nomeImagem="imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);

        $dados['imagem']=$dir."/".$nomeImagem;
      }
      Loja::find($id)->update($dados);
      return redirect()->route('admin.loja');

    }
    public function deletar($id){
      Loja::find($id)->delete();
      return redirect()->route('admin.loja');
    }



}
