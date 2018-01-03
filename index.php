<!DOCTYPE html>
<html>
  <head>
    <title>VueJs Tutorial - coligo</title>
  </head>
  <body>

  	<div id="vue-instance">
  		<!-- this will be the DOM element we will mount our VueJs instance to -->
  		Enter your name : <input type="text" v-model="name">
  		<button @click="sayHello">Hey there!</button>
  	</div>

  <script src="http://cdn.jsdelivr.net/vue/1.0.16/vue.js"></script>

  <script>
  	// our VueJS instance, bound to the div with a "vue-instance" id
  	var vm = new Vue({
  		el: '#vue-instance',
  		data: {
  			name: ''
  		},
  		methods: {
  			sayHello: function(){
  				alert('Hey there, ' + this.name);
  			}
  		}
  	});
  </script>


  </body>
</html>