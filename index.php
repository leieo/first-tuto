<!DOCTYPE html>
<html>
  <head>
    <title>VueJs Tutorial - coligo</title>
  </head>
  <body>

  	<div id="vue-instance">
  		<!-- this will be the DOM element we will mount our VueJs instance to -->
  		<div v-show="isLoggedIn">
  			Welcome to you!
  			<button @click="login" type="submit">Logout</button>
  		</div>
  		<div v-else>
  			<input type="text" placeholder="username">
  			<input type="password" placeholder="password">
  			<button @click="login" type="submit">Login</button>
  		</div>
  	</div>

  <script src="http://cdn.jsdelivr.net/vue/1.0.16/vue.js"></script>

  <script>
  	// our VueJS instance, bound to the div with a "vue-instance" id
  	var vm = new Vue({
  		el: '#vue-instance',
  		data: {
  			isLoggedIn: false
  		},
  		methods: {
  			login: function(){
  				this.isLoggedIn = !this.isLoggedIn;
  			}
  		}
  	});
  </script>


  </body>
</html>