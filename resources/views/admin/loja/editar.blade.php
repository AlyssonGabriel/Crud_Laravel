<!--o extends vai permitir vc importar qualquer coisa de outro arquivo-->
@extends('layout.site')
@section('titulo','Loja Virtual')
<!--no primeiro parametro vc cria o nome da variavel, que tem q ser o mesmo nome da variavel que tem em yield()-->
<!--no segunndo parametro vc adiciona o que vc quiser dentro da variavel-->
@section('conteudo')
<div class="container">
<h3 class"center">Editando Produtos</h3>
<div class="row">
<form class="" action="{{route('admin.loja.atualizar',$registros->id)}}" method="post" enctype="multipart/form-data">
<!--Esse token é usado para verificar se o usuário autenticado é aquele que realmente faz os pedidos para o aplicativo.-->
{{csrf_field()}}
<input type="hidden" name="_method" value="put">
<!--o include serve para importar coisas de outras views-->
@include('admin.loja._form')
<button class="btn green">Atualizar</button>
</form>
</div>
</div>

@endsection
