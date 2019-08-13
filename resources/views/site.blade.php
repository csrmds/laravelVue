@extends('layouts.app')

@section('content')

		<pagina tamanho="12">

			<painel titulo="Artigos">

				<p>
					<form class="form-inline text-center" action="{{route('site')}}" method="get">
						<input type="search" class="form-control input-sm" name="busca" value="{{isset($busca) ? $busca : ""}}">
						<button class="btn btn-info btn-sm">Buscar</button>
					</form>
				</p>

				<div class="row">
					
					@foreach ($lista as $key => $value)
						<artigocard
							titulo="{{$value->titulo}}"
							descricao="{{ str_limit($value->descricao, 40,"...") }}"
							link="{{route('artigo',[$value->id, str_slug($value->titulo)])}}"
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
