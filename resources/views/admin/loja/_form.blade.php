<!--campo Produto-->
<div class="input-field">
<input type="text" name="produto" value="{{isset($registros->produto) ? $registros->produto : ''}}">
<label>Produto</label>
</div>
<!--campo Descrição-->
<div class="input-field">
<input type="text" name="descricao" value="{{isset($registros->descricao) ? $registros->descricao : ''}}">
<label>Descrição</label>
</div>
<!--campo valor-->
<div class="input-field">
<input type="text" name="valor" value="{{isset($registros->valor) ? $registros->valor : ''}}">
<label>valor</label>
</div>
<!--upload de imagem-->
<div class="file-field" class="input-field">
<div class="btn blue">
<span>Imagem</span>
<input type="file" name="imagem">
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

<div class="input-field">
<p>
<label>
<input type="checkbox" id="test5" name="publicado" {{isset($registros->publicado) && $registros->publicado== 'sim' ? 'cheked' : ''}}value="true"/>
<span>Clique para publicar</span>
</label>
</p>
<br></br>
</div>
