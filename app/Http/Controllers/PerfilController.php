<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function mostrar(){
      return view('Perfil.perfil');


    }
}
