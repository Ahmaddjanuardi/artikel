@extends('template/layout')
@section('slider')

<h2>About Me</h2>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ URL ('img/makan.jpeg') }}" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{ URL ('img/brg.jpeg') }}" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{ URL ('img/pnh.jpeg') }}" class="d-block w-100" alt="...">
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
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A diam maecenas sed enim ut. Elementum nibh tellus molestie nunc non blandit massa. Tempor orci eu lobortis elementum. Aliquet risus feugiat in ante metus dictum at tempor commodo. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Id ornare arcu odio ut sem. Donec ultrices tincidunt arcu non sodales neque. Tortor at auctor urna nunc. Rhoncus urna neque viverra justo nec ultrices. Tincidunt nunc pulvinar sapien et ligula. Id diam vel quam elementum pulvinar etiam non quam. Semper risus in hendrerit gravida rutrum quisque non. Mattis enim ut tellus elementum sagittis. A diam maecenas sed enim ut sem viverra aliquet eget.</p>
<p>Aenean sed adipiscing diam donec adipiscing tristique risus. Malesuada bibendum arcu vitae elementum curabitur vitae. Viverra ipsum nunc aliquet bibendum enim facilisis gravida. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Id interdum velit laoreet id donec. Donec et odio pellentesque diam volutpat commodo sed egestas. Dolor morbi non arcu risus. Neque gravida in fermentum et sollicitudin ac orci phasellus. Tortor at risus viverra adipiscing at in tellus integer. Pulvinar elementum integer enim neque volutpat. Auctor elit sed vulputate mi. Sollicitudin tempor id eu nisl nunc. Hac habitasse platea dictumst vestibulum. Feugiat nisl pretium fusce id velit ut tortor pretium. Auctor eu augue ut lectus arcu bibendum at varius vel. Elementum pulvinar etiam non quam lacus. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Eget arcu dictum varius duis at consectetur lorem. Est ante in nibh mauris cursus mattis molestie. Tellus rutrum tellus pellentesque eu tincidunt.</p>
<p>Non sodales neque sodales ut. Amet purus gravida quis blandit turpis cursus in hac. Auctor elit sed vulputate mi sit amet mauris commodo. Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Tortor condimentum lacinia quis vel eros donec ac odio. Purus ut faucibus pulvinar elementum integer. In nulla posuere sollicitudin aliquam ultrices sagittis orci. Quam adipiscing vitae proin sagittis nisl rhoncus. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Varius morbi enim nunc faucibus a. Purus ut faucibus pulvinar elementum integer enim neque volutpat ac. Porttitor leo a diam sollicitudin tempor id eu. Dignissim enim sit amet venenatis. Nunc eget lorem dolor sed viverra. Sit amet massa vitae tortor condimentum. Sodales neque sodales ut etiam sit. Semper risus in hendrerit gravida rutrum quisque non. Consectetur lorem donec massa sapien faucibus et molestie ac.</p>
<p>Duis convallis convallis tellus id interdum velit laoreet id. Eget aliquet nibh praesent tristique. Urna nunc id cursus metus aliquam. Sit amet risus nullam eget felis eget nunc lobortis. Fames ac turpis egestas integer eget aliquet nibh praesent. Erat pellentesque adipiscing commodo elit. Volutpat ac tincidunt vitae semper quis lectus nulla at. Felis eget velit aliquet sagittis id consectetur. Ac turpis egestas integer eget aliquet nibh praesent tristique. Tristique senectus et netus et malesuada fames ac turpis. Proin nibh nisl condimentum id venenatis a condimentum. Eget egestas purus viverra accumsan in nisl nisi.</p>
<p>Lacus sed viverra tellus in hac habitasse. Dictum at tempor commodo ullamcorper a lacus. In ante metus dictum at tempor. Aliquam ultrices sagittis orci a scelerisque purus semper eget. Massa sapien faucibus et molestie ac feugiat sed. Duis convallis convallis tellus id. Enim neque volutpat ac tincidunt vitae semper quis lectus. Malesuada fames ac turpis egestas. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sed odio morbi quis commodo odio aenean. Sit amet mauris commodo quis imperdiet. Eget gravida cum sociis natoque penatibus et magnis dis. Non diam phasellus vestibulum lorem sed risus ultricies. Odio ut sem nulla pharetra diam sit. Ultricies integer quis auctor elit. Dui sapien eget mi proin. Tortor condimentum lacinia quis vel eros donec. Ligula ullamcorper malesuada proin libero nunc. Euismod in pellentesque massa placerat.</p>
<a class="btn btn-primary" href="/" role="button">Kembali ke halaman utama</a>
@endsection