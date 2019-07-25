@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<painel titulo="Dashboard">
					<div class="row">
						<div class="col-md-4">
							<painel titulo="sub painel 01" cor="panel-danger"></painel>
						</div>
						<div class="col-md-4">
							<painel titulo="sub painel 02" cor="panel-blue"></painel>
						</div>
						<div class="col-md-4">
							<painel titulo="sub painel 02" cor="panel-info"></painel>
						</div>
					</div>
				</painel>
			</div>
		</div>
	</div>
@endsection
