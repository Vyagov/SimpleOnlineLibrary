@extends('layouts.app')

@section('content')

	@if(count($errors))
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	
	@if($message = Session::get('success'))
		<p>{{ $message }}</p>
		<img src="images/{{ Session::get('path_to_image') }}" />
	
	@endif

	@include('partials._body')
@endsection
