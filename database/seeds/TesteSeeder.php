<?php

use Illuminate\Database\Seeder;
use App\User;
class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados=[
        'name'=>"alysson",
        'email'=>"alysson@gmail.com",
        'password'=>bcrypt("123456"),
      ];
    

      User::create($dados);

    }
}
