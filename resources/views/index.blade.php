@extends('template/layout')
@section('slider')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ URL ('img/sbe.jpg') }}" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{ URL ('img/phs.jpeg') }}" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{ URL ('img/jlu.jpeg') }}" class="d-block w-100" alt="...">
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
@endsection
@section('main')

<div class="container">
	<div class="row my-5">

		<div class="artikel1 ">
			<div class="image">
				<img src="{{ URL ('img/sebp.jpeg') }}" alt="" class="float-start me-4 rounded">
			</div>
			<div class="title">
				<h5 class="">Sebastian Vettel</h5>
				<p class="text">Sebastian Vettel adalah seorang pembalap Formula Satu asal Jerman. Ia pertama kali turun dalam
					ajang balapan resmi F1 pada Grand Prix Turki 2006 ketika ia menjadi pembalap tes hari Jumat untuk tim BMW-Sauber pada usia 19 tahun dan 53 hari.</p>
				<a href="/artikel1" class="btn btn-primary">Baca selengkapnya</a>
			</div>
		</div>
		<div class="artikel2 float-start">
			<div class="image">
				<img src="{{ URL ('img/lwd.jpg') }}" alt="..." class="float-start me-4 rounded">
			</div>
			<div class="title">
				<h5 class="">Lewis Hamilton</h5>
				<p class="text">Sir Lewis Carl Davidson Hamilton MBE adalah seorang pembalap profesional dari Britania Raya, yang saat ini membalap untuk Mercedes
					di Formula Satu. Sekarang, ia memiliki gelar dunia terbanyak, yakni 7, dan juga kemenangan, pole position, dan finis podium terbanyak.</p>
				<a href="/artikel2" class="btn btn-primary">Baca selengkapnya</a>
			</div>
		</div>
		<div class="artikel3">
			<div class="image">
				<img src="{{ URL ('img/jls.jpg') }}" alt="..." class="float-start me-4 rounded">
			</div>
			<h5 class="">Jules Bianchi</h5>
			<div class="title">
				<p class="text">Jules Lucien André Bianchi merupakan seorang pembalap mobil profesional asal Prancis. Ia bergabung bersama tim Marussia F1 sebagai pembalap.
					Sebelumnya ia pernah bergabung bersama tim Scuderia Ferrari sebagai anggota program pengembangan pembalap muda.</p>
				<a href="/artikel3" class="btn btn-primary">Baca selengkapnya</a>
			</div>
		</div>
	</div>
</div>




<!-- <div class="card">
		<img src="{{ URL ('img/sebp.jpeg') }}" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Sebastian Vettel</h5>
			<p class="card-text">Sebastian Vettel adalah seorang pembalap Formula Satu asal Jerman. Ia pertama kali turun dalam
				ajang balapan resmi F1 pada Grand Prix Turki 2006 ketika ia menjadi pembalap tes hari Jumat untuk tim BMW-Sauber pada usia 19 tahun dan 53 hari.</p>
			<a href="/artikel1" class="btn btn-primary">Baca selengkapnya</a>
		</div>
	</div>
	<div class="card">
		<img src="{{ URL ('img/lwd.jpg') }}" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Lewis Hamilton</h5>
			<p class="card-text">Sir Lewis Carl Davidson Hamilton MBE adalah seorang pembalap profesional dari Britania Raya, yang saat ini membalap untuk Mercedes
				di Formula Satu. Sekarang, ia memiliki gelar dunia terbanyak, yakni 7, dan juga kemenangan, pole position, dan finis podium terbanyak.</p>
			<a href="/artikel2" class="btn btn-primary">Baca selengkapnya</a>
		</div>
	</div>
	<div class="card">
		<img src="{{ URL ('img/jls.jpg') }}" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Jules Bianchi</h5>
			<p class="card-text">Jules Lucien André Bianchi merupakan seorang pembalap mobil profesional asal Prancis. Ia bergabung bersama tim Marussia F1 sebagai pembalap.
				Sebelumnya ia pernah bergabung bersama tim Scuderia Ferrari sebagai anggota program pengembangan pembalap muda.</p>
			<a href="/artikel3" class="btn btn-primary">Baca selengkapnya</a>
		</div>
	</div> -->






@endsection