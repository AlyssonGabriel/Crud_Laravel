<!--o extends vai permitir vc importar qualquer coisa de outro arquivo-->
@extends('layout.site')
@section('titulo','Loja Virtual')
<!--no primeiro parametro vc cria o nome da variavel, que tem q ser o mesmo nome da variavel que tem em yield()-->
<!--no segunndo parametro vc adiciona o que vc quiser dentro da variavel-->
@section('conteudo')
<div class="container">
<h3 class"center">Cadastrar</h3>
<div class="row">
<form class="" action="{{route('admin.cadastrar.cadastrado')}}" method="post">
<!--Esse token é usado para verificar se o usuário autenticado é aquele que realmente faz os pedidos para o aplicativo.-->
{{csrf_field()}}
<!--o include serve para importar coisas de outras views-->
<div class="input-field">
<input type="text" name="name">
<label>nome</label>
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>


<div class="input-field">
<input type="text" name="email">
<label>E-mail</label>
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="input-field">
<input type="password" name="password">
<label>Senha</label>
@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="file-field" class="input-field">
<div class="btn blue">
<span>Imagem</span>
<input type="file" name="imagem">
@error('imagem')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="file-path-wrapper">
<input class="file-path validate" type="text">
</div>
</div>
@if(isset($registros->imagem))
<div class="input-field">
<img width="150" src="{{asset($registros->imagem)}}" alt="">
</div>
@endif

<button class="btn green">Pronto</button>
</form>
</div>
</div>

@endsection
