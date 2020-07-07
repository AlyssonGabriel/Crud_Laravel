<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
//o protected é para quando v quer criar resgistros em massas
  protected $fillable = [
      'produto', 'descricao','valor','imagem','publicado',
  ];

  //regras de iserção dos dados
  public static $rules = ['produto' => 'required|max:20',
    'descricao' => 'required|max :20',
    'valor' => 'required',
    'imagem'=>'required',
  ];
  //mensagem
  public static $messages=['required'=>'*esse campo é obrigatório'];

}
