export default Vue.component('SingleSnippet',  {
	props: ['snippet'],
	template: `
		<article class="snippet" >
		    <div class="is-flex">
		        <h4 class="title is-4 flex">
		        	<router-link :to="'/snippets/' + snippet.id">
		            	<a v-text="snippet.title"></a>
		            </router-link>
		             by
		            <a :href="'@' + snippet.user.username" v-text="snippet.user.username"></a>
		        </h4>
		        <a :href="'/snippets/' + snippet.id + '/fork'">Fork me</a>
		    </div>


		        <a class="tag is-warning" 
		        v-show="snippet.language_id"
		        :href="'/languages/' + snippet.language.id + '/' + snippet.language.slug">
		        {{snippet.language.language}}
		        </a>
		                    <br>
		                    <br>

		    <pre><code>{{ snippet.body }}</code></pre>
		</article>
	`,

	created(){
		console.log('Loading snippet:  ' + this.snippet.title)
	}
});

// export default SingleSnippet;
