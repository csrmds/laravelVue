<template>
	<div v-bind:class="'col-sm-'+(sm || '6') +' col-md-'+(md || '4')">
		<div class="thumbnail">
			<img src="https://static.imasters.com.br/wp-content/uploads/2019/02/06114156/GREY.jpg" alt="...">
			<div class="caption">
				<small>{{data | formataData}} - {{autor}}</small>
				<h3>{{titulo}}</h3>
				<p>{{url}}</p>
				<p><a v-bind:href="link" class="btn btn-primary" role="button">Leia mais</a></p>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		props:['titulo','descricao','link','imagem','data','autor','sm','md'],
		filters: {
			formataData: function(valor) {
				if(!valor) return '';
				valor= valor.toString();
				if(valor.split('-').length==3) {
					valor= valor.split('-');
					return valor[2]+'/'+valor[1]+'/'+valor[0];
				}

				return valor;
			}
		}
	}
</script>
