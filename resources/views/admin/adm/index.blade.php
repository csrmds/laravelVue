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

	<painel titulo="Lista de Admins">
		
		<migalhas v-bind:lista="{{ $listaMigalhas }}"></migalhas>
		
		<tabela-lista 
			v-bind:titulos="['ID','Nome','Email']"
			v-bind:itens="{{ json_encode($listaModelo) }}"
			detalhe="/admin/adm/"
			criar="#criar"
			editar="/admin/adm/"
			ordem="asc" ordemcol="0"
			modal="sim"
		>

			
		</tabela-lista>

		<div align="center">
			<!--PAGINAÇÃO-->
			{{ $listaModelo->links() }}
		</div>

	</painel>
</pagina>

<modal nome="adicionar" titulo="Adicionar" >
	<formulario id="formAdicionar" css="" action="{{ route('adm.store') }}" method="post" enctype="" token="{{ csrf_token() }}">
			
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" class="form-control input-sm" id="name" value="{{ old('name') }}">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control input-sm" id="email" value="{{ old('email') }}">
		</div>
		<div class="form-group">
			<label for="admin">Admin</label>
			<select name="admin" id="select" class="form-control" id="admin">
				<option {{ (old('admin') && old('admin')== 'N' ? 'selected' : '' ) }} value="N">Não</option>
				<option {{ (old('admin') && old('admin')== 'S' ? 'selected' : '' ) }} {{ (!old('admin') ? 'selected' : '' ) }}  value="S">Sim</option>
			</select>
		</div>
		<div class="form-group">
			<label for="password">Senha</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>

	</formulario>
	<span slot="botoes" >
		<button form="formAdicionar" class="btn btn-default btn-sm">Adicionar</button>
	</span>
	

</modal>

<modal nome="editar" titulo="Editar">
	<formulario id="formEditar" css="" v-bind:action="'/admin/adm/'+$store.state.item.id" method="put" enctype="" token="{{ csrf_token() }}">
			
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" class="form-control input-sm" name="name" v-model="$store.state.item.name" id="name">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control input-sm" name="email" v-model="$store.state.item.email"  id="email">
		</div>
		<div class="form-group">
			<label for="admin">Admin</label>
			<select name="admin" id="select" class="form-control" v-model="$store.state.item.admin">
				<option value="N">Não</option>
				<option value="S">Sim</option>
			</select>
		</div>
		<div class="form-group">
			<label for="password">Senha</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>

	</formulario>

	<span slot="botoes">
		<button form="formEditar" class="btn btn-default btn-sm">Atualizar</button>
	</span>
</modal>

<modal nome="detalhe" v-bind:titulo="$store.state.item.titulo">
	<p>@{{ $store.state.item.email }}</p>
</modal>

@endsection