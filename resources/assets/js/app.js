import './bootstrap';
import router from './routes';

// hljs.initHighlighting();
autosize(document.querySelectorAll('textarea'));

new Vue({
    el: '#app',
    router
});
