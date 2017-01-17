<template>
    <div>
        <div v-for="snippet in snippets">
            <single-snippet :snippet="snippet"></single-snippet>
        </div>
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
            // Snippet.all(snippets => this.snippets = snippets); 
            this.$Progress.start();
            Snippet.all((snippets) => {
                this.snippets = snippets;
                 this.$Progress.finish();
                 // hljs.initHighlighting();
            }); 
        }

    }
</script>
