<template>
	<form v-bind:class="css" v-bind:action="action" v-bind:method="post" v-bind:enctype="multipart/form-data">
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token" value="">

		<slot></slot>

	</form>
</template>

<script>
	export default {
		props:['css', 'action', 'method', 'ecntype', 'token']
	}
</script>
