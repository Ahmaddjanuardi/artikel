<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<style>
		.navbar {
			background-color: #ff3377;
		}

		div#carouselExampleIndicators {
			width: 120%;
			margin-bottom: 100px;

		}

		.card {
			margin: 30px;
			position: relative;
			float: right;
			padding: 10px;
			left: 8%;
		}

		p {
			text-align: justify;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/artikel1">Artikel 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/artikel2">Artikel 2</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/artikel3">Artikel 3</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				@yield('main')
			</div>
		</div>
	</div>
	<footer class="bg-light text-center text-lg-start">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: #ff3377;">
			© 2020 Copyright:
			<a class="text-dark" href="/">Ini Berita</a>
		</div>
		<!-- Copyright -->
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>