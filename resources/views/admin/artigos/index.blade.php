@extends('layouts.app')

@section('content')

<pagina tamanho="12">
	<painel titulo="Lista de Artigos">

		<tabela-lista 
			v-bind:titulos="['#','Título','Descrição']"
			v-bind:itens="[
				['1', 'PHP OO', 'Linguagem PHP'], 
				['2', 'Vue JS', 'Framwork para JS'], 
				['3', 'Laravel', 'Framwork para PHP'],
			]"
			detalhe="#detalhe"
			criar="#criar"
			editar="#editar"
			deletar="#deletar"
			token="564987sad5f4sad74665sadf4"

			>

			
		</tabela-lista>

	</painel>
</pagina>

@endsection