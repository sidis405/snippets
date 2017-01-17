import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import autosize from 'autosize';

import VueProgressBar from 'vue-progressbar'


window.Vue = Vue;

Vue.config.debug = true;


Vue.use(VueRouter);

Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '2px'
})
window.axios = axios;

window.axios.defaults.headers.common = {
	'X-Requested-With': 'XMLHttpRequest'
};

window.autosize = autosize;
