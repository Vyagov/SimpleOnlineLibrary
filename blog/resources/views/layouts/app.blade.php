<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Wapi Bulgaria Library') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="container">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-body">

	                    <!-- Branding Image -->
	                    <div class="col-md-2">
	                		<img src="{{ asset('images/logo-wapi.png') }}" alt="Logo" />
		                </div>
		               	<div class="col-md-4 text">
		               		<a class="a-decor" href="{{ url('/') }}">
	                        	{{ config('app.name', 'Wapi Bulgaria Library') }}
	                    	</a>
		               	</div>
		               	<div class="col-md-6 text">
		               		<a href="#" class="btn btn-large btn-primary">
	                			<i class="fa fa-book" aria-hidden="true"></i>
	                			All books
		                	</a>
	                        <!-- Authentication Links -->
	                        @if (Auth::guest())
		                		<a href="{{ url('/login') }}" class="btn btn-large btn-primary ">
									<i class="fa fa-sign-in" aria-hidden="true"></i>
		                			Login
		                		</a>
		                		<a href="{{ url('/register') }}" class="btn btn-large btn-primary">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
		                			Register
		                		</a>
	                        @else
	                            <div class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                                    {{ Auth::user()->name }} <span class="caret"></span>
	                                </a>
	
	                                <ul class="dropdown-menu" role="menu">
	                                    <li>
	                                        <a href="{{ url('/logout') }}"
	                                            onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                            Logout
	                                        </a>
	
	                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	                                            {{ csrf_field() }}
	                                        </form>
	                                    </li>
	                                </ul>
	                            </div>
	                        @endif
                    	</div>
                	</div>
                	
                	@yield('content')
           		</div>
			</div>
		</div>
	</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
