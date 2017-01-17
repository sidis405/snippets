class Snippet
 {

	static all(then) {
		return axios.get('/api/snippets')
		.then(({data}) => then(data));
	}

	static getOne(id, then) {
		return axios.get('/api/snippets/' + id)
		.then(({data}) => then(data));
	}

}

export default Snippet;