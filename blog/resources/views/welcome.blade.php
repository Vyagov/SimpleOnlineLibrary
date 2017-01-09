<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wapi Bulgaria Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-body">
		                	<div class="col-md-2">
	                			<img src="{{ asset('images/logo-wapi.png') }}" alt="Logo" />
		                	</div>
		                	<div class="col-md-4 text">
		                		Wapi Bulgaria Library
		                	</div>
		                	<div class="col-md-6 text">
		                		<a href="#" class="btn btn-large btn-primary">
		                			<i class="fa fa-book" aria-hidden="true"></i>
		                			All books
		                		</a>
			                	@if (Route::has('login'))
			                		<a href="{{ url('/login') }}" class="btn btn-large btn-primary ">
										<i class="fa fa-sign-in" aria-hidden="true"></i>
			                			Login
			                		</a>
			                		<a href="{{ url('/register') }}" class="btn btn-large btn-primary">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			                			Register
			                		</a>
			                	@endif
		                	</div>
		                </div>
		                
		                @include('partials._body')
		                
		            </div>
		        </div>
		    </div>
		</div>
    </body>
</html>
