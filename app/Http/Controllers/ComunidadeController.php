<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunidadeController extends Controller
{
    public function listagem(){
      $v=\App\User::all();
      dd($v);
    }
}
