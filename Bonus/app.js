const { createApp } = Vue
createApp({
	data() {
		return {
			base_api_url: 'api.php',
			movies: [],
			error: '',
		}
	},
	mounted() {

		axios.get(this.base_api_url)
			.then((result) => {
				console.log(result);
				this.movies = result.data;
				console.log(this.movies);
			}).catch((err) => {
				//console.log(err.message);
				this.error = err.message;
			});

	}
}).mount('#app')