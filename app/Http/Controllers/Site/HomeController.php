<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Loja;

class HomeController extends Controller
{
    public function index(){
      $produtos=Loja::all();
      return view('Home',compact('produtos'));

    }
    public function outra(){
      return view('intro');
    }
}
