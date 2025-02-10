@section('style')
	<style>
		body {
			background-image: url("{{ asset('images/background-header.jpeg') }}");
			background-color: #85B009;
		}
		#lomba {
			background-size: contain;
			padding-top: 12rem;
			padding-bottom: 3rem;
		}
		body, #lomba {
			background-position: top center;
			background-repeat: no-repeat;
		}
		#lomba h1 {
			-webkit-text-stroke: 1px black;
			color: white;
			text-shadow:
				3px 3px 0 #000,
				-1px -1px 0 #000,
				1px -1px 0 #000,
				-1px 1px 0 #000,
				1px 1px 0 #000;
		}
	</style>
@endsection

<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-11" style="margin-top: 16rem;margin-bottom: 3rem;">
			<img src="{{ asset('images/logo-text.png') }}" class="img-fluid">
		</div>
	</div>
	<div class="row justify-content-center" style="margin-bottom: 16rem;">
		<div class="col-xl-8 text-center fs-5 fw-bold">
			<div class="mb-2" style="color: #55300F;">Untuk SMP / MTs Se-Karesidenan Madiun dan Undangan</div>
			<a href="#" class="btn btn-success">Unduh Guide Book</a>
			<a href="#" class="btn btn-outline-success">Kategori Lomba</a>
		</div>
	</div>
	<div class="row justify-content-center" id="lomba">
		<div class="col-xl-6">
			<h1 style="color: #EFE39B;">Kategori Lomba</h1>
			<div class="border-bottom border-success">
				<h3>Nama Lomba</h3>
				<p class="lead">Deskripsi lomba</p>
				<a href="#" class="btn btn-success">Selengkapnya</a>
			</div>
			<div class="border-bottom border-success">
				<h3>Nama Lomba</h3>
				<p class="lead">Deskripsi lomba</p>
				<a href="#" class="btn btn-success">Selengkapnya</a>
			</div>
			<div class="border-bottom border-success">
				<h3>Nama Lomba</h3>
				<p class="lead">Deskripsi lomba</p>
				<a href="#" class="btn btn-success">Selengkapnya</a>
			</div>
			<div class="border-bottom border-success">
				<h3>Nama Lomba</h3>
				<p class="lead">Deskripsi lomba</p>
				<a href="#" class="btn btn-success">Selengkapnya</a>
			</div>
			<div class="border-bottom border-success">
				<h3>Nama Lomba</h3>
				<p class="lead">Deskripsi lomba</p>
				<a href="#" class="btn btn-success">Selengkapnya</a>
			</div>
		</div>
		<div class="col-xl-6">
			<img src="{{ asset('images/maskot.png') }}" class="img-fluid">
		</div>
	</div>
	<h1 class="text-center">Didukung oleh</h1>
	<p class="text-center">List sponsor</p>
</div>
