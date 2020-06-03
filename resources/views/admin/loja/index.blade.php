<!--o extends vai permitir vc importar qualquer coisa de outro arquivo-->
@extends('layout.site')
@section('titulo','Loja Virtual')
<!--no primeiro parametro vc cria o nome da variavel, que tem q ser o mesmo nome da variavel que tem em yield()-->
<!--no segunndo parametro vc adiciona o que vc quiser dentro da variavel-->
@section('conteudo')
<div class="container">
<h3 class"center">Lista de Produtos</h3>
<div class="row">
<table>
<thead>
<tr>
<th>Id</th>
<th>produto</th>
<th>descricao</th>
<th>valor</th>
<th>imagem</th>
<th>publicado</th>
<th>acao</th>
</tr>
</thead>
<tbody>
<!--o foreach para mover-se pelos elementos de uma estrutura de dados, como poderia ser um vetor, e realizar ações para cada um dos elementos-->
<!--<tr> são as linhas da tabela-->
<!--<td>  td significam table data que é o conteúdo de uma célula de dados-->
@foreach ($registros as $y)
<tr>
<td>{{$y->id}}</td>
<td>{{$y->produto}}</td>
<td>{{$y->descricao}}</td>
<td>{{$y->valor}}</td>
<td><img width="90" src="{{asset($y->imagem)}}" alt="{{$y->titulo}}"/></td>
<td>{{$y->publicado}}</td>
<td>
<a class="btn green" href="{{route('admin.loja.editar',$y->id)}}">Editar</a>
<a class="btn red" href="{{route('admin.loja.deletar',$y->id)}}">deletar</a>

</td>

</tr>

@endforeach
</tbody>
</table>
</div>
<div class="row">
<a class="btn orange" href="{{route('admin.loja.adicionar')}}">Adicionar</a>

</div>

</div>

@endsection
