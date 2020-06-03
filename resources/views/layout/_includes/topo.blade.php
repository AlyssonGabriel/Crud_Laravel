<!DOCTYPE html>
<html>
<head>
<title>@yield('titulo')</title>
<!--Importar fonte do ícone do Google-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Importar materialize.css-->
<!--CSS compilado e minificado -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!--Informar ao navegador que o site é otimizado para celular-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header>
<nav>
<div class="nav-wrapper blue">
<a href="/" class="brand-logo">LaravelAffluence</a>
<a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
<ul class="right hide-on-med-and-down">
<li><a href="/">Home</a></li>

@if(Auth::guest())
<li><a href="{{route('site.login')}}">Login</a></li>
@else
<li><a href="{{route('admin.loja')}}">Produtos</a></li>
<li><a href="#">{{Auth::user()->name}}</a></li>
<li><a href="{{route('site.login.sair')}}">Sair</a></li>
@endif

</ul>
</div>
</nav>

<ul class="sidenav" id="mobile">
<<li><a href="/">Home</a></li>
@if(Auth::guest())
<li><a href="{{route('site.login')}}">Login</a></li>
@else
<li><a href="{{route('admin.loja')}}">Produtos</a></li>
<li><a href="#">{{Auth::user()->name}}</a></li>
<li><a href="{{route('site.login.sair')}}">Sair</a></li>
@endif
</ul>
</header>
