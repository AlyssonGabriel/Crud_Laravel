<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Loja;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
/*$factory->define(ModelLoja::class, function (Faker $faker) {
return [
'imagem' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
'classe' => $faker->unique()->word,
'nome' => $faker->unique()->word,
'tamanho' => $faker->randomLetter,
'preco' => $faker->numberBetween($min = 20, $max = 1000),
];
});

*/
$factory->define(\App\User::class, function (Faker $faker) {
    return [
        //'id'=>Int::random(10),
        'name' => $faker->unique()->word,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),

        'password' =>bcrypt("123456"), // password
        'remember_token' => Str::random(10),

    ];
});

$factory->define(\App\Loja::class, function (Faker $faker){
  return[
    'produto' => $faker->unique()->word,
    'descricao'=>$faker->name,
    'imagem' => $faker->imageUrl($width = 640, $height = 480,),

    //img/loja/imagem_8845.jpeg
    'valor'=> $faker->numberBetween(1,100),
    'publicado'=>'sim',

  ];
});
