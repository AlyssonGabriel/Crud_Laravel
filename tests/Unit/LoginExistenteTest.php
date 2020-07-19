<?php

namespace Tests\Unit;

use Tests\TestCase;
use Auth;
use Faker\Generator as Faker;

class LoginExistenteTest extends TestCase
{

    public function testLoginExistente()
    {
      $dados=factory(\App\User::class)->create();
      // var_dump($dados['email']);
      // var_dump($dados['password']);
      // var_dump($dados['name']);
      // var_dump($dados['imagem']);

      if (Auth::attempt(['email'=>$dados['email'], 'password'=>'oi'])){
        $this->assertTrue(true);
      }else {
        $this->assertTrue(false);
      }

    }
}
