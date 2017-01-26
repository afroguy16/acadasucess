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
			<nav>
				<div class="row">
					<div class="col-lg-8 col-lg-push-1">
						<div class="logo"><h1><a href="#">acada</a></h1></div>
					</div>
					<div class="col-lg-3 col-lg-push-1">
						<div class="nav-right">
							<p>Hello <a href="#">Joe Bauer</a>
								<span><img src="#" alt="Avatar"></span>
								<span class="" role="dropdown"></span>
							</p>
						</div>
					</div>
				</div>
			</nav>
		</header>
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
				<img src="images/facebook.svg" alt="LinkedIn">
			</div>
		</div>
	</div>		
		
	</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>