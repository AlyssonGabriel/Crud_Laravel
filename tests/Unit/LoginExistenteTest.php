<?php

namespace Tests\Unit;

use Tests\TestCase;
use Auth;
use Faker\Generator as Faker;
use App\User;

class LoginExistenteTest extends TestCase
{

    public function testLoginExistente()
    {
      $dados=[
        'name'=>'teste',
        'email'=>'teste@email',
        'password' =>'$2a$10$vcd2AHzq3jlXrR7SccF2T.Qw7v3Adtf7UbRlCfR79gZmgtnuwWpWK', // oi
        'imagem'=>'1.jpg',
      ];
      User::create($dados);
      


      if (Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['password']])){
            $this->assertTrue(true);
      }
      else {
        $this->assertTrue(false);
      }

    }
}
