import VueRouter from 'vue-router';

let routes =[
	{
		path: '/',
		component: require('./views/Home')
	},
	{
		path: '/snippets/create',
		component: require('./views/Create')
	},
	{
		path: '/snippets/:id',
		component: require('./views/Show')
	}
];

export default new VueRouter({
	routes,
	// mode: 'history',
	linkActiveClass: 'is-active'
});