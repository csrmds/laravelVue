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

<modal nome="adicionar">
	<painel titulo="Adicionar">
		<formulario css="xa" action="#" method="put" enctype="" token="1231234413">
			
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" name="titulo" class="form-control input-sm" id="titulo">
			</div>
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" name="descricao" class="form-control input-sm" id="descricao">
			</div>

			<button class="btn btn-default btn-sm">Adicionar</button>

		</formulario>
	</painel>
</modal>

<modal nome="editar">
	<painel titulo="Editar">
		<formulario css="xa" action="#" method="put" enctype="" token="1231234413">
			
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" name="titulo" class="form-control input-sm" id="titulo">
			</div>
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" name="descricao" class="form-control input-sm" id="descricao">
			</div>

			<button class="btn btn-default btn-sm">Atualizar</button>

		</formulario>
	</painel>
</modal>

@endsection