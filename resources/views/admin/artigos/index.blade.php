@extends('layouts.app')

@section('content')

<pagina tamanho="12">
	<painel titulo="Lista de Artigos">
		
		<migalhas v-bind:lista="{{ $listaMigalhas }}"></migalhas>

		<modallink tipo="button" nome="ModalDetalhes" titulo="Criar" css=""></modallink>
		
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
			ordem="asc" ordemcol="0"
		>

			
		</tabela-lista>

	</painel>
</pagina>

<modal nome="ModalDetalhes">
	<painel titulo="Adicionar">
		<p>Modal teste</p>
	</painel>
</modal>

@endsection