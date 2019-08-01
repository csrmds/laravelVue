@extends('layouts.app')

@section('content')

<pagina tamanho="12">
	<painel titulo="Lista de Artigos">
		
		<migalhas v-bind:lista="{{ $listaMigalhas }}"></migalhas>
		
		<tabela-lista 
			v-bind:titulos="['#','Título','Descrição']"
			v-bind:itens="{{ $listaArtigos }}"
			detalhe="#detalhe"
			criar="#criar"
			editar="#editar"
			deletar="#deletar"
			token="564987sad5f4sad74665sadf4"
			ordem="asc" ordemcol="0"
			modal="sim"
		>

			
		</tabela-lista>

	</painel>
</pagina>

<modal nome="adicionar" titulo="Adicionar" >
	<formulario id="formAdicionar" css="xa" action="#" method="put" enctype="" token="1231234413">
			
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" name="titulo" class="form-control input-sm" id="titulo">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" name="descricao" class="form-control input-sm" id="descricao">
		</div>

	</formulario>
	<span slot="botoes" >
		<button form="formAdicionar" class="btn btn-default btn-sm">Adicionar</button>
	</span>
	

</modal>

<modal nome="editar" titulo="Editar">
	<formulario id="formEditar" css="xa" action="#" method="put" enctype="" token="1231234413">
			
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control input-sm" name="titulo" v-model="$store.state.item.titulo" id="titulo">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" class="form-control input-sm" name="descricao" v-model="$store.state.item.descricao"  id="descricao">
		</div>

	</formulario>

	<span slot="botoes">
		<button form="formEditar" class="btn btn-default btn-sm">Atualizar</button>
	</span>
</modal>

<modal nome="detalhe" v-bind:titulo="$store.state.item.titulo">
	<p>@{{ $store.state.item.descricao }}</p>
</modal>

@endsection