@extends('layouts.master')

@section('content')
	
	<div class="col-sm-8 blog-main">
		
			@foreach($books as $book)
				<h2 class="blog-post-title">{{$book->title}}</h2>
				<p class="blog-post-meta">
				{{$book->author->name}} on {{$book ->created_at -> toFormattedDateString() }}</p>
			@endforeach
		
	</div>
	
@endsection