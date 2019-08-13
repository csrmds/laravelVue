@extends('layouts.app')

@section('content')

	<pagina tamanho="12">		

		<painel titulo="Dashboard" >
			<migalhas v-bind:lista="{{$listaMigalhas}}" ></migalhas>
			
			<div class="row">
				<div class="col-md-4">
					<caixa qtd="{{$totalArtigos}}" cor="orange" titulo="Artigos" icone="ion ion-pie-graph" url="{{route('artigos.index')}}"></caixa>
				</div>
				<div class="col-md-4">
					<caixa qtd="{{$totalUsuarios}}" cor="magenta" titulo="Usuários" icone="ion ion-pie-graph" url="{{route('usuarios.index')}}"></caixa>
				</div>
				<div class="col-md-4">
					<caixa qtd="{{$totalAutores}}" cor="purple" titulo="Autores" icone="ion ion-pie-graph" url="{{route('autores.index')}}"></caixa>
				</div>
				<div class="col-md-4">
					<caixa qtd="{{$totalAdmin}}" cor="green" titulo="Admin" icone="ion ion-pie-graph" url="{{route('adm.index')}}"></caixa>
				</div>
			</div>
		</painel>

	</pagina>

@endsection
