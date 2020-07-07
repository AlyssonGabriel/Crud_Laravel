<!--o extends vai permitir vc importar qualquer coisa de outro arquivo-->
@extends('layout.site')
@section('titulo','Loja Virtual')
<!--no primeiro parametro vc cria o nome da variavel, que tem q ser o mesmo nome da variavel que tem em yield()-->
<!--no segunndo parametro vc adiciona o que vc quiser dentro da variavel-->
@section('conteudo')
<div class="container">
<h3 class"center">Lista de Produtos</h3>

<!--
<link rel="stylesheet" href="css/video.css">
<header class="container">
<video autoplay muted loop>
<source src="video/Intro Tecnologia.mp4" type="video/mp4">
</video>
<div class="content">
<h1>Bem vindo</h1>
</div>
<source src="video.mp4" type="video/mp4">
</video>
</header>
-->


<!--daqui em diante é um cartão baixado do materialize-->
<div class="row">
@foreach($produtos as $x)
<div class="col s12 m4">
<div class="card">
<div class="card-image">
<img src="{{asset($x->imagem)}}">
</div>
<div class="card-content">
<h4>{{$x->produto}}</h4>
<p>{{$x->descricao}}</p>
</div>
<div class="card-action">
<!-- <a href="{{route('site.mensagem')}}">ver mais...</a> -->
</div>
</div>
</div>
@endforeach
</div>
</div>

@endsection
