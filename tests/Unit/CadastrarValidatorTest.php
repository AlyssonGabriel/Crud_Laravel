<?php

namespace Tests\Unit;

use Tests\TestCase;

class CadastrarValidatorTest extends TestCase
{
  public function testCadastroSemNome(){
    $this->expectException(\App\Validator\ValidationException::class);
    $Login = factory(\App\User::class)->make();
    $dados = $Login->toArray();
    $dados['name']='';
    $dados['email']='email';
    $dados['password']='password';

    \App\Validator\CadastrarValidator::validate($dados);
  }
  public function testCadastroSemEmail(){
      $this->expectException(\App\Validator\ValidationException::class);
      $Login = factory(\App\User::class)->make();
      $dados = $Login->toArray();
      $dados['email']='';
      $dados['password']='password';
      \App\Validator\CadastrarValidator::validate($dados);
    }
    public function testCadastroSemSenha(){
      $this->expectException(\App\Validator\ValidationException::class);
      $Login = factory(\App\User::class)->make();
      $dados = $Login->toArray();
      $dados['email']='email';
      $dados['password']='';
      \App\Validator\CadastrarValidator::validate($dados);
    }
    public function testCadastroEmBranco(){
      $this->expectException(\App\Validator\ValidationException::class);
      $Login = factory(\App\User::class)->make();
      $dados = $Login->toArray();
      $dados['name']='';
      $dados['email']='';
      $dados['password']='';
      \App\Validator\CadastrarValidator::validate($dados);
      }
      public function testCadastroTudoOk(){
        $Login = factory(\App\User::class)->make();
        $dados = $Login->toArray();
        $dados['name']='name';
        $dados['email']='email';
        $dados['password']='password';
        \App\Validator\CadastrarValidator::validate($dados);
        $this->assertTrue(true);


      }


}
