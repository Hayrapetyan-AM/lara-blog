@extends('header')

@section('title')Reviews Page @endsection

@section('main_content')
<div class="container mt-5">
	
		@if($errors->any())
		
			<div class="alert alert-danger mt-5">
				<ul>
					@foreach($errors->all() as $error)
						<li> {{ $error }} </li>
					@endforeach
				</ul>
			</div>
		
		@endif

		<h1>Write your review here!</h1>
		<form method="post" action="/reviews/check" class="mt-5">
			@csrf
		<input class="form-control mt-2" type="email" name="email" required placeholder="type your email here">
		<textarea name="review_text" class="form-control mt-2 h-25" placeholder="type your review here" rows="3"></textarea>
	
	<button type="submit" class="btn btn-success mt-2">Submit</button>
</form>

<h1>All Reviews!</h1>

@foreach($review_forblade as $el)
	<div class="alert alert-info">
		<h3> {{ $el->review }} </h3>
		<small> {{ $el->email }} </small>
	</div>
@endforeach

{{ $review_forblade->links() }}
</div>
@endsection