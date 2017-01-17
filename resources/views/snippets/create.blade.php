@extends('layout')
@section('content')

	<h1 class="title">New snippet</h1>

	<form action="/snippets" method="POST">
		{{ csrf_field() }}

		@if($snippet->id)
	
			<input type="hidden" name="forked_id" value="{{ $snippet->id }}">
		
		@endif

		<div class="columns">
			
			<div class="column is-three-quarters">
				
				<div class="control">
					<label for="title" class="label">Title:</label>
					<input type="text" id="title" name="title" class="input" value="{{$snippet->title}}">
				</div>

				<div class="control">
					<label for="body" class="label">Body:</label>
					<textarea name="body" id="body" class="textarea">{{$snippet->body}}</textarea>
				</div>

				<div class="control">
					<button class="button is-primary">Publish</button>
				</div>

			</div>
			<div class="column">
				<div class="control">
				<label for="language_id" class="label">Language:</label>
				  <span class="select">
				    <select name="language_id">
				      <option disabled selected>Select</option>
				      @foreach($languages as $language)
				      	<option value="{{ $language->id }}" @if($language->id == $snippet->language_id) selected @endif>{{ $language->language }}</option>
				      @endforeach
				    </select>
				  </span>
				</div>
			</div>

		</div>

	</form>

@endsection
