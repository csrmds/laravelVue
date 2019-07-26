@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<painel titulo="Dashboard">
					<div class="row">
						<div class="col-md-4">
							<caixa qtd="199" cor="orange" titulo="Artigos!" icone="ion ion-pie-graph" url="#"></caixa>
						</div>
						<div class="col-md-4">
							<caixa qtd="3000" cor="magenta" titulo="Usuários" icone="ion ion-pie-graph" url="#"></caixa>
						</div>
						<div class="col-md-4">
							<caixa qtd="9" cor="purple" titulo="Autores" icone="ion ion-pie-graph" url="#"></caixa>
						</div>
					</div>
				</painel>
			</div>
		</div>
	</div>
@endsection
