<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
//o protected é para quando v quer criar resgistros em massas
  protected $fillable = [
      'produto', 'descricao','valor','imagem','publicado'
  ];
}
