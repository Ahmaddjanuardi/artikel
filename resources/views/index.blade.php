@extends('templates/layout')

@section('main')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ URL ('img/pantai.jpg') }}" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{ URL ('img/jembatan-berendeng-tangerang.jpg') }}" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{ URL ('img/tmn-potret.jpg') }}" class="d-block w-100" alt="...">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>


<div class="card" style="width: 18rem;">
	<img src="{{ URL ('img/pantai.jpg') }}" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title">Artikel 1</h5>
		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna
			aliqua.</p>
		<a href="/artikel1" class="btn btn-primary">Baca selengkapnya</a>
	</div>
</div>
<div class="card" style="width: 18rem;">
	<img src="{{ URL ('img/pantai.jpg') }}" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title">Artikel 1</h5>
		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna
			aliqua.</p>
		<a href="/artikel1" class="btn btn-primary">Baca selengkapnya</a>
	</div>
</div>
<div class="card" style="width: 18rem;">
	<img src="{{ URL ('img/pantai.jpg') }}" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title">Artikel 1</h5>
		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna
			aliqua.</p>
		<a href="/artikel1" class="btn btn-primary">Baca selengkapnya</a>
	</div>
</div>


@endsection