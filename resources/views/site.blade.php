@extends('layouts.app')

@section('content')

		<pagina tamanho="12">

			<painel titulo="Artigos">
				<div class="row">
					
					<artigocard
						titulo="PHP Artisan"
						descricao="Decrição do Artigo"
						link="#"
						imagem="https://static.imasters.com.br/wp-content/uploads/2019/02/06114156/GREY.jpg"
						data="15/03/2019"
						autor="Cesar Melo"
						sm="6"
						md="4"
					></artigocard>

					<artigocard
						titulo="PHP Artisan II"
						descricao="Decrição do Artigo"
						link="#"
						imagem="https://static.imasters.com.br/wp-content/uploads/2019/02/06114156/GREY.jpg"
						data="15/03/2019"
						autor="Marcia Menezes"
						sm="6"
						md="4"
					></artigocard>

					<artigocard
						titulo="PHP Artisan III"
						descricao="Decrição do Artigo"
						link="#"
						imagem="https://static.imasters.com.br/wp-content/uploads/2019/02/06114156/GREY.jpg"
						data="15/03/2019"
						autor="João Neto"
						sm="6"
						md="4"
					></artigocard>

				</div>	
			</painel>

		</pagina>

@endsection
