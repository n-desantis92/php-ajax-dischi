var app = new Vue({
	el: '#app',
	data: {
		database: []
	},
	mounted: function() {
		axios.get('http://localhost/php-ajax-dischi/api.php')
		.then( (response) => {
			this.database = response.data;
            console.log(this.database);
		} );
	}
});