<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Generator as Faker;
use App\User;

class LoginExistenteTest extends TestCase
{

    public function testLoginExistente()
    {


  /*  jeito 2
    $Login= factory(\App\User::class)->make();
    $dados=$Login->toArray();
    User::create($dados);
    if (Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['password']])){
    $this->assertTrue(true);
  }else {
    $this->assertTrue(false);
}*/


  //  jeito 3
// $Login= factory(\App\User::class)->create();
// $dados = $Login->toArray();
// if (Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['password']])){
// $this->assertTrue(true);
// }else {
// $this->assertTrue(false);
// }
//
// }

$this->assertDatabaseHas('users', [
        'email' => 'a',
    ]);
}
}
