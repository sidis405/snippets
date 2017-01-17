<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="/css/highlight.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/css/bulma.css">
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	
	@include('nav')
	<div  id="app">
	<section class="hero  is-primary is-bold">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">
					<a href="/">Snippets</a>
				</h1>
				<h2 class="subtitle">
					For that stuff you know you won't remember
				</h2>
				<p>
				<router-link to="/snippets/create">
					<a href="/snippets/create" class="button is-dark">Create new snippet</a>
			      </router-link>
				</p>
			</div>
		</div>
	</section>
	<br>
	<br>
	<section>
		<div class="container">
			<p class="control has-addons">
			  <input class="input is-expanded" type="text" placeholder="Search for title, code, etc...">
			  <a class="button is-primary">
			    Search
			  </a>
			</p>
		</div>
	</section>
	
	<div class="section">
		<div class="container">
		
			 <router-view></router-view>
			 <vue-progress-bar></vue-progress-bar>
			
		</div>
	</div>

	</div>

	<script src="/js/highlight.min.js"></script>
	<script src="/js/app.js"></script>

</body>
</html>