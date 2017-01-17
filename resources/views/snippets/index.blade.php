@extends('layout')
@section('content')

	{{-- <h1>List all snippets</h1> --}}

	@if(count($snippets))

		@foreach($snippets as $snippet)

			<article class="snippet">
				<div class="is-flex">
					<h4 class="title is-4 flex">
						<a href="/snippets/{{ $snippet->id }}">
							{{ $snippet->title }}
						</a> 
						by
						<a href="{{ url('/@'. $snippet->user->username) }}">
							{{ '@'. $snippet->user->username }}
						</a>
					</h4>

					<a href="/snippets/{{ $snippet->id }}/fork">Fork me</a>
				</div>

				@if($snippet->language_id)
					<a class="tag is-warning" href="/languages/{{$snippet->language->id}}/{{$snippet->language->slug}}">{{$snippet->language->language}}</a>
					<br>
					<br>
				@endif

				<pre><code>{{ $snippet->body }}</code></pre>
			</article>

		@endforeach

	@endif

@endsection