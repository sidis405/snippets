@extends('layout')
@section('content')

	<div class="is-flex">
		<h1 class="title flex">{{ $snippet->title }}</h1>
		<a href="/snippets/{{ $snippet->id }}/fork">Fork me</a>
	</div>
		<nav class="level">
	        <div class="level-left">
	        	@if($snippet->language_id)
	        		<a class="level-item tag is-warning" href="/languages/{{$snippet->language->id}}/{{$snippet->language->slug}}">{{$snippet->language->language}}</a>
	        	@endif
	          <a class="level-item">
	            <span class="icon is-small"><i class="fa fa-heart"></i> </span>&nbsp;<span>1</span>
	          </a>
	          <a class="level-item" href="/snippets/{{ $snippet->id }}/fork">
		          <span class="icon is-small"><i class="fa fa-retweet"></i></span> &nbsp;<span>{{ $snippet->forks()->count() }}</span>
		        </a>
	        </div>
	      </nav>
	

	<pre><code @if($snippet->language_id) class="{{$snippet->language->language}}" @endif>{{ $snippet->body }}</code></pre>
	<br>
	<br>
	<p>
		<a href="/">Back</a>
	</p>

	@if($snippet->isForked())
	<hr />
		<h3 class="title is-3">
			Forked from 

			<a href="/snih3pets/{{$snippet->forkedSnippet->id}}">{{$snippet->forkedSnippet->title}}</a>
		</p>
	@endif

	@if ($snippet->forks()->count())

		<hr />

		<h3 class="title is-3">
			Forks
		</h3>

		<ul>
			@foreach($snippet->forks as $fork)
				<li><a href="/snippets/{{$fork->id}}">{{ $fork->title }}</a></li>
			@endforeach
		</ul>

	@endif

@endsection