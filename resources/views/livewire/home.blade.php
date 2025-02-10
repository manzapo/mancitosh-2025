@section('style')
	<style>
		body {
			background-image: url("{{ asset('images/background-header.jpeg') }}");
			background-color: #85B009;
		}
		.bi {
			vertical-align: -.125em;
			fill: currentColor;
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
			color: #EFE39B;
			margin-bottom: 3rem;
			text-shadow:
				3px 3px 0 #000,
				-1px -1px 0 #000,
				1px -1px 0 #000,
				-1px 1px 0 #000,
				1px 1px 0 #000;
		}
		.footer {
			background-image: url("{{ asset('images/background-spacer.png') }}");
			background-position: top center;
			background-repeat: no-repeat;
			padding-top: 12rem;
		}
		.footer-sponsors {
			background-color: rgba(253,232,184, .7);
			backdrop-filter: blur(3px);
		}
	</style>
@endsection

@section('svg')
	<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
		<symbol id="arrow-right" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
		</symbol>
		<symbol id="file-earmark-text" viewBox="0 0 16 16">
			<path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
			<path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
		</symbol>
		<symbol id="send" viewBox="0 0 16 16">
			<path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
		</symbol>
	</svg>
@endsection

<div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-11" style="margin-top: 16rem;margin-bottom: 1rem;">
				<img src="{{ asset('images/logo-text.png') }}" class="img-fluid">
			</div>
		</div>
		<div class="row justify-content-center" style="margin-bottom: 16rem;">
			<div class="col-xl-8 text-center fs-5 fw-bold">
				<div class="mb-3" style="color: #55300F;">Untuk SMP / MTs Se-Karesidenan Madiun dan Undangan</div>
				<a href="{{ asset('juklak-juknis-mancitosh-v9-2025-1.pdf') }}" class="btn btn-dark btn-lg me-xl-2 rounded-4"><svg class="bi me-2" width="1em" height="1em"><use href="#file-earmark-text"></use></svg> Guide Book</a>
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSfGxq2cOy7M-HvhpdV9jq-P2uUABBogrDI_QxekCXzPSF0z-g/viewform" class="btn btn-outline-dark btn-lg rounded-4" target="_blank">Pendaftaran <svg class="bi ms-2" width="1em" height="1em"><use href="#send"></use></svg></a>
			</div>
		</div>
		<div class="row justify-content-center" id="lomba">
			<div class="col-xl-6">
				<h1>Kategori Lomba</h1>
				<div class="border-bottom border-success py-3 py-xl-4">
					<h3>Olimpiade PAI</h3>
					<p class="lead">Kompetisi atau ajang perlombaan yang menguji pengetahuan dan pemahaman siswa dalam bidang Pendidikan Agama Islam.</p>
					<a href="{{ route('pai') }}" class="btn btn-link link-body-emphasis text-decoration-none px-0">Selengkapnya <svg class="bi ms-1" width="1em" height="1em"><use href="#arrow-right"></use></svg></a>
				</div>
				<div class="border-bottom border-success py-3 py-xl-4">
					<h3>Desain Poster</h3>
					<p class="lead">Lomba untuk menunjukkan kreativitas dalam membuat desain poster dengan tema "<em>Unity in Diversity</em>: Harmoni dalam Keberagaman Indonesia.</p>
					<a href="{{ route('poster') }}" class="btn btn-link link-body-emphasis text-decoration-none px-0">Selengkapnya <svg class="bi ms-1" width="1em" height="1em"><use href="#arrow-right"></use></svg></a>
				</div>
				<div class="border-bottom border-success py-3 py-xl-4">
					<h3>Cerpen Berbantuan Aplikasi Presentasi</h3>
					<p class="lead">Mempresentasikan cerita pendek dengan media yang tepat dapat meningkatkan daya tarik dan pemahaman audiens terhadap cerita.</p>
					<a href="{{ route('cerpen') }}" class="btn btn-link link-body-emphasis text-decoration-none px-0">Selengkapnya <svg class="bi ms-1" width="1em" height="1em"><use href="#arrow-right"></use></svg></a>
				</div>
				<div class="border-bottom border-success py-3 py-xl-4">
					<h3>Video Pendek (Vlog)</h3>
					<p class="lead">Membuat video pendek (vlog) yang membahas tentang kecerdasan buatan (AI) dan bagaimana teknologi ini dapat memengaruhi masa depan.</p>
					<a href="{{ route('vlog') }}" class="btn btn-link link-body-emphasis text-decoration-none px-0">Selengkapnya <svg class="bi ms-1" width="1em" height="1em"><use href="#arrow-right"></use></svg></a>
				</div>
				<div class="border-bottom border-success py-3 py-xl-4">
					<h3>Tenis Meja</h3>
					<p class="lead">Ajang kompetisi bagi siswa SMP/MTs untuk menunjukkan kemampuan dan bakat mereka dalam olahraga tenis meja.</p>
					<a href="{{ route('tenismeja') }}" class="btn btn-link link-body-emphasis text-decoration-none px-0">Selengkapnya <svg class="bi ms-1" width="1em" height="1em"><use href="#arrow-right"></use></svg></a>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="sticky-top pt-xxl-4">
					<img src="{{ asset('images/maskot.png') }}" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container py-4 mb-4 rounded-5 footer-sponsors">
			<h3 class="text-center mb-3">Didukung oleh</h3>
			<div class="row row-cols-xxl-4 mb-1">
				<div class="col"><img src="{{ asset('sponsors/gm.png') }}" class="rounded-5 img-fluid"></div>
				<div class="col"><img src="{{ asset('sponsors/la-tansa.png') }}" class="rounded-5 img-fluid"></div>
				<div class="col"><img src="{{ asset('sponsors/tenseiga.png') }}" class="rounded-5 img-fluid"></div>
				<div class="col"><img src="{{ asset('sponsors/yk-studio.png') }}" class="rounded-5 img-fluid"></div>
			</div>
		</div>
		<div class="container">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Terimakasih kunjungannya!</strong> laman masih dalam tahap pengembangan.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>
</div>
