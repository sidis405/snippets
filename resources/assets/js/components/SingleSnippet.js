let SingleSnippet = Vue.component('SingleSnippet',  {
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

			<nav class="level">
		        <div class="level-left">
			        <a class="level-item tag is-warning" 
			        v-show="snippet.language_id"
			        :href="'/languages/' + snippet.language.id + '/' + snippet.language.slug">
			        {{snippet.language.language}}
			        </a>
			        <a class="level-item">
			          <span class="icon is-small"><i class="fa fa-heart"></i> </span>&nbsp;<span>1</span>
			        </a>
			    </div>
			</nav>
			

		    <pre><code>{{ snippet.body }}</code></pre>
		</article>
	`,

	created(){
		console.log('Loading snippet:  ' + this.snippet.title)
	}
});

export default SingleSnippet;
