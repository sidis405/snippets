<template>
    <div>
        <div v-for="snippet in snippets">
            <single-snippet :snippet="snippet"></single-snippet>
        </div>

        <router-link to="/">
            <a >Back</a>
        </router-link>
    </div>
</template>

<script>
    import Snippet from '../models/Snippet';
    import SingleSnippet from '../components/SingleSnippet';

    export default {

        components: {
            'single-snippet': SingleSnippet
        },

        data() {
            return {
                snippets: []
            }
        },

        created() {
            
            let id = this.$route.params.id;
            // Snippet.getOne(id, snippet => this.snippet = (snippet)); 
            // this.$Progress.start();
            Snippet.getOne(id, (snippets) => {
                console.log(snippets);
                this.snippets = snippets;
                // this.$Progress.finish();
                console.log(this.snippets[0].title);
            }); 
        }

    }
</script>
