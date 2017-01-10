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
	<style>
		a.dropdown-toggle {
			width: 160px;
		}
		
		div.dropdown {
			display: inline-block;
		}
		.dropdown-menu1 {
		    position: absolute;
		    top: 100%;
		    left: 0;
		    z-index: 1000;
		    display: none;
		    padding: 3px 0;
		    list-style: none;
		    background-clip: padding-box;
		}
		.open>.dropdown-menu1 {
		    display: block;
		}
		
		.title {
			margin-top: 5px;
			font-weight: bold;
			color: #009966;	
			line-height: 1.3em;	
		}
		
		.author {
			font-weight: bold;
			line-height: 1.3em;
			color: #006699;
			font-style: italic;
		}
		
		.genre {
			font-size: 0.8em; 
			font-weight: bold;
		}

		
	</style>
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
	                        {{ config('app.name', 'Wapi Bulgaria Library') }}
		               	</div>
		               	<div class="col-md-6 text">
			                
	                        <!-- Authentication Links -->
	                        
	                        @if (Auth::guest())
	                        	<a href="{{ url('allBooks') }}" class="btn btn-large btn-primary">
		                			<i class="fa fa-book" aria-hidden="true"></i>
		                			All books
			                	</a>
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
	                        		<button class="btn btn-large btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  										<i class="fa fa-book" aria-hidden="true"></i>
				               			Books
  										<span class="caret"></span>
  									</button>
  									<ul class="dropdown-menu1">
									    <li>
									    	<a href="{{ url('myBooks') }}" class="btn btn-large btn-primary">
			                					My books
			                				</a>
			                			</li>
									    <li>
									    	<a href="{{ url('allBooks') }}" class="btn btn-large btn-primary">
					                			All books
						                	</a>
									    </li>
  									</ul>
				                </div>
				                <div class="dropdown right">
	                                <a class="btn btn-large btn-primary dropdown-toggle" role="button" data-toggle="dropdown">
	                                    {{ Auth::user()->name }} 
	                                    <span class="caret"></span>
	                                </a>
	
	                                <a href="{{ url('/logout') }}" class="btn btn-large btn-primary dropdown-menu"
                                    	onclick="event.preventDefault();
                                        	document.getElementById('logout-form').submit();">
                                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    	{{ csrf_field() }}
                                    </form>
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
