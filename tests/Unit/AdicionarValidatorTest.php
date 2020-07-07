<?php

namespace Tests\Unit;

use Tests\TestCase;
use Faker\Generator as Faker;


class AdicionarValidatorTest extends TestCase
{

    public function testProdutoSemNome()
    {
      $this->expectException(\App\Validator\ValidationException::class);
      $produto = factory(\App\Loja::class)->make();
      $dados = $produto->toArray();
      $dados['produto'] = '';
    \App\Validator\AdicionarValidator::validate($dados);
  }

    public function testProdutoSemvalor(){
      $this->expectException(\App\Validator\ValidationException::class);
      $produto = factory(\App\Loja::class)->make();
      $dados = $produto->toArray();
      $dados['valor'] = '';
      \App\Validator\AdicionarValidator::validate($dados);

    }
    public function testProdutoSemImagem(){
      $this->expectException(\App\Validator\ValidationException::class);
      $produto = factory(\App\Loja::class)->make();
      $dados = $produto->toArray();
      $dados['imagem'] = '';

      \App\Validator\AdicionarValidator::validate($dados);
    }
    public function testProdutoSemDescricao(){
      $this->expectException(\App\Validator\ValidationException::class);
      $produto = factory(\App\Loja::class)->make();
      $dados = $produto->toArray();
      $dados['descricao'] = '';
    \App\Validator\AdicionarValidator::validate($dados);
    }
    public function testProdutoSemInfomacao(){
      $this->expectException(\App\Validator\ValidationException::class);
      $produto = factory(\App\Loja::class)->make();
      $dados = $produto->toArray();
      $dados['produto'] = '';
      $dados['valor'] = '';
      $dados['imagem'] = '';
      $dados['descricao'] = '';
      \App\Validator\AdicionarValidator::validate($dados);
    }
    public function testProdutoTudoOk(){
      $produto = factory(\App\Loja::class)->make();
      $dados = $produto->toArray();
      $dados['produto'] = 'produto';
      $dados['valor'] = 'valor';
      $dados['imagem'] = 'imagem';
      $dados['descricao'] = 'descricao';
      \App\Validator\AdicionarValidator::validate($dados);
      $this->assertTrue(true);

    }
}
