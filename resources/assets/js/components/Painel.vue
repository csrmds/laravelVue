<template>
	<div v-bind:class="defineCor">
		<div v-if="titulo" class="panel-heading">{{ titulo }}</div>

		<div class="panel-body">
			<slot></slot>
		</div>
	</div>
</template>

<script>
	export default {
		props: ['titulo','cor'],
		computed: {
			defineCor: function() {
				return "panel "+ (this.cor || "panel-default");
			}
		}
	}
</script>

<style media="screen">
	.panel-blue {
		border-color: #0d4a96
	}

	.panel-blue > .panel-heading {
		color: #f7f7f7;
		background-color: #0d4a96;
		border-color: #0d4a96;
	}
</style>