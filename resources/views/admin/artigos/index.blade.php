@extends('layouts.app')

@section('content')

<pagina tamanho="12">

	@if($errors->all())
		<div class="alert alert-danger alert-dismissible text-center" role="alert">
			<button type="button" class="close" data-dismiss="alert" arial-label="Close"><span aria-hidden="true">&times;</span></button>
		@foreach ($errors->all() as $key => $value)
			<li><strong>{{ $value }}</strong></li>
		@endforeach
		</div>
	@endif

	<painel titulo="Lista de Artigos">
		
		<migalhas v-bind:lista="{{ $listaMigalhas }}"></migalhas>
		
		<tabela-lista 
			v-bind:titulos="['#','Título','Descrição','Autor','Data']"
			v-bind:itens="{{ json_encode($listaArtigos) }}"
			detalhe="/admin/artigos/"
			criar="#criar"
			editar="/admin/artigos/"
			deletar="/admin/artigos/"
			token="{{ csrf_token() }}"
			ordem="asc" ordemcol="0"
			modal="sim"
		>

			
		</tabela-lista>

		<div align="center">
			<!--PAGINAÇÃO-->
			{{ $listaArtigos->links() }}
		</div>

	</painel>
</pagina>

<modal nome="adicionar" titulo="Adicionar" >
	<formulario id="formAdicionar" css="" action="{{ route('artigos.store') }}" method="post" enctype="" token="{{ csrf_token() }}">
			
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" name="titulo" class="form-control input-sm" id="titulo" value="{{ old('titulo') }}">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" name="descricao" class="form-control input-sm" id="descricao" value="{{ old('descricao') }}">
		</div>
		<div class="form-group">
			<label for="conteudo">Conteúdo</label>
			<textarea type="text" name="conteudo" id="conteudo" class="form-control input-sm">{{ old('conteudo') }}</textarea>
		</div>
		<div class="form-group">
			<label for="data">Data</label>
			<input type="date" name="data" class="form-control" id="data" value="{{ old('data') }}">
		</div>

	</formulario>
	<span slot="botoes" >
		<button form="formAdicionar" class="btn btn-default btn-sm">Adicionar</button>
	</span>
	

</modal>

<modal nome="editar" titulo="Editar">
	<formulario id="formEditar" css="" v-bind:action="'/admin/artigos/'+$store.state.item.id" method="put" enctype="" token="{{ csrf_token() }}">
			
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control input-sm" name="titulo" v-model="$store.state.item.titulo" id="titulo">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" class="form-control input-sm" name="descricao" v-model="$store.state.item.descricao"  id="descricao">
		</div>
		<div class="form-group">
			<label for="conteudo">Conteúdo</label>
			<textarea type="text" name="conteudo" id="conteudo" class="form-control input-sm" v-model="$store.state.item.conteudo"></textarea>
		</div>
		<div class="form-group">
			<label for="data">Data</label>
			<input type="date" name="data" class="form-control" id="data" value="" v-model="$store.state.item.data">
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