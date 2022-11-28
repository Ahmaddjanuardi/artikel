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

		.border {
			width: 20em;
			background-color: #F6FBF4;
		}

		.infobox-image {
			text-align: center;
		}

		.infobox-caption {
			text-align: center;
		}

		.infobox-above {
			text-align: center;
		}

		.infobox-data {
			padding-left: 30px;
		}

		.infobox-label {
			padding-left: 10px;
			border: 1px none;
			width: 150px;
		}

		.infobox-header {
			text-align: center;
		}

		.thumb-tright {
			border: 1px none;
			float: right;
			margin-left: 10px;
		}

		.thumb-tleft {
			border: 1px none;
			float: left;
			margin-right: 10px;
		}

		.thumbcaption {
			text-align: left;
			font-size: 10pt;
			margin-left: 10px;
			margin-right: 10px;
		}

		.thumbinner {
			border: 1px solid;
			text-align: center;
			padding-top: 10px;
			background-color: #F6FBF4;
		}

		div#carouselExampleIndicators {
			width: 120%;
			margin-bottom: 100px;

		}

		.image img {
			height: 170px;
			width: 280px;
			margin-top: 10px;

		}

		h4 {
			font-size: 13pt;
		}

		.card {
			width: 18rem;
			margin: 30px;
			position: relative;
			/* float: center; */
			padding: 10px;
		}

		.responsive {
			width: 100%;
			height: auto;
		}

		.hd-table {
			float: right;
			margin-left: 10px;
			position: relative;
		}

		p {
			text-align: justify;
		}

		footer {
			position: relative;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Alfaiyet Djulianto</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="col-12 navbar-nav">
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
					<li class="nav-item">
						<a class="nav-link" href="/artikel4">Artikel 4</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about">About Me</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-10">
				@yield('slider')
			</div>
			<div class="col-12">
				@yield('main')
			</div>
		</div>
	</div>
	<footer class="bg-light text-center text-lg-start">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: #ff3377;">
			© 2020 Copyright:
			<a class="text-dark" href="/">Alfaiyet Djulianto</a>
		</div>
		<!-- Copyright -->
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>