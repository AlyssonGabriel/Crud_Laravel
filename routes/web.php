<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas da web para seu aplicativo. Estes
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo
|
*/
Route::get('/mensagem',['as'=>'site.mensagem','uses'=>'Site\LoginController@mensagem']);
Route::get('/',['as'=>'site.Home','uses'=>'Site\HomeController@index']);

//rota para a tela de loginss
Route::get('/perfil',['as'=>'Perfil.perfil','uses'=>'PerfilController@mostrar']);

Route::get('/cadastrar',['as'=>'admin.cadastrar','uses'=>'CadastrarController@index']);
Route::post('/cadastrar/cadastrado',['as'=>'admin.cadastrar.cadastrado','uses'=>'CadastrarController@cadastrado']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::group(['middleware'=>'auth'],function(){
  Route::get('/admin/loja',['as'=>'admin.loja','uses'=>'Admin\lojaController@index']);
  //rota para adicionar
  Route::get('/admin/loja/adicionar',['as'=>'admin.loja.adicionar','uses'=>'Admin\lojaController@adicionar']);
  //rota para salvar
  Route::post('/admin/loja/salvar',['as'=>'admin.loja.salvar','uses'=>'Admin\lojaController@salvar']);
  //rota para editar
  Route::get('/admin/loja/editar{id}',['as'=>'admin.loja.editar','uses'=>'Admin\lojaController@editar']);
  //rota para atualizar
  Route::put('/admin/loja/atualizar{id}',['as'=>'admin.loja.atualizar','uses'=>'Admin\lojaController@atualizar']);
  //rota para deletar
  Route::get('/admin/loja/deletar{id}',['as'=>'admin.loja.deletar','uses'=>'Admin\lojaController@deletar']);


});
