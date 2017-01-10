@extends('layouts.app')

@section('content')
	
	@if($message = Session::get('success'))
		<div class="alert alert-success">
			<strong>Success!</strong> {{ $message }}
		</div>
	@endif

	@include('partials._body')
@endsection
