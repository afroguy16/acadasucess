<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>@yield("title")</title>
  <meta name="Acada" content="Browse and share useful videos">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Avenir">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>

	<div id="wrapper">

		<header>
			<div id="app">
	        <nav class="navbar navbar-static-top">
	            <div class="container">
	                <div class="navbar-header">

	                    <!-- Collapsed Hamburger -->
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	                        <span class="sr-only">Toggle Navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>

	                    <!-- Branding Image -->
	                    <a class="navbar-brand" href="{{ url('/') }}"><h1>acada</h1></a>
	                </div>

	                <div class="collapse navbar-collapse" id="app-navbar-collapse">
	                    <!-- Left Side Of Navbar -->
	                    <ul class="nav navbar-nav">
	                        &nbsp;
	                    </ul>

	                    <!-- Right Side Of Navbar -->
	                    <ul class="nav navbar-nav navbar-right">
	                        <!-- Authentication Links -->
	                        @if (Auth::guest())
	                            <li><a href="{{ url('/login') }}">Login</a></li>
	                            <li><a href="{{ url('/register') }}">Register</a></li>
	                        @else
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle login" data-toggle="dropdown" role="button" aria-expanded="false">
	                                    Hello {{ Auth::user()->name }} <img src="images/avatar.jpg"> <span class="caret"></span>
	                                </a>

	                                <ul class="dropdown-menu" role="menu">
	                                	<li><a href="{{ url('/details') }}">My Profile</a></li>
	                                	<li><a href="{{ url('/') }}">Browse Video</a></li>
	                                	<li><a href="{{ url('/uploadvideo') }}">Upload Video</a></li>
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
	                            </li>
	                        @endif
	                    </ul>
	                </div>
	            </div>
	        </nav>
      </div>
		</header>
		<span class="clearfix"></span>
	@yield("page")
	</div>
	<footer>
	<div class="row">
		<div class="col-lg-6">
			<div class="left-footer">
				<p>&copy; 2017 <a href="#">Acada.com</a></p>
				<ul>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="right-footer pull-right">
				<img src="images/facebook.svg" alt="Facebook">
				<img src="images/twitter.svg" alt="Twitter">
				<img src="images/linkedin.svg" alt="LinkedIn">
			</div>
		</div>
	</div>		
		
	</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>