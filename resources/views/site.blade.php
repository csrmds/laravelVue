@extends('layouts.app')

@section('content')

		<pagina tamanho="12">

			<painel titulo="Artigos">
				<div class="row">
					
					@foreach ($lista as $key => $value)
						<artigocard
							titulo="{{$value->titulo}}"
							descricao="{{$value->descricao}}"
							link="#"
							imagem="https://static.imasters.com.br/wp-content/uploads/2019/02/06114156/GREY.jpg"
							data="{{$value->data}}"
							autor="{{$value->autor}}"
							sm="6"
							md="4"
						></artigocard>
					@endforeach
					
						
					

				</div>	
				<div align="center">
					{{$lista}}
				</div>
			</painel>

		</pagina>

@endsection
