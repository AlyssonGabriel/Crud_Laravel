<?php

namespace Tests\Unit;

use Tests\TestCase;
use Faker\Generator as Faker;


class LoginValidatorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUsuarioSemEmail(){
        $this->expectException(\App\Validator\ValidationException::class);
        $Login = factory(\App\User::class)->make();
        $dados = $Login->toArray();
        $dados['email']='';
        $dados['password']='password';
        \App\Validator\LoginValidator::validate($dados);


    }
    public function testUsuarioSemSenha(){
      $this->expectException(\App\Validator\ValidationException::class);
      $Login = factory(\App\User::class)->make();
      $dados = $Login->toArray();
      $dados['emai'] = 'email';
      $dados['password']='';
      \App\Validator\LoginValidator::validate($dados);

  }
  public function testUsuarioEmBranco(){
    $this->expectException(\App\Validator\ValidationException::class);
    $Login = factory(\App\User::class)->make();
    $dados = $Login->toArray();
    $dados['emai'] = '';
    $dados['password']='';
    \App\Validator\LoginValidator::validate($dados);
  }

  public function testUsuarioOk(){
    $Login = factory(\App\User::class)->make();
    $dados = $Login->toArray();
    $dados['emai'] = 'email';
    $dados['password']='password';
    \App\Validator\LoginValidator::validate($dados);
    $this->assertTrue(true);


  }





}
