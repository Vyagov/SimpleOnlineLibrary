@extends('layouts.app')

@section('content')
	
	@if($message = Session::get('success'))
		<div class="alert alert-success">
			<strong>Success!</strong> {{ $message }}
		</div>
	@endif

	@include('partials._body')
	
	@if(isset($myBooks))
		@include('partials._displayMyBooks')
		{!! $myBooks->links() !!}
	@endif
	
	@if(isset($allBooks))
		@include('partials._displayAllBooks')
		{!! $allBooks->links() !!}
	@endif
	
	@if(isset($books))
		@include('partials._searchBook')
		{!! $$books->links() !!}
	@endif
	
@endsection
