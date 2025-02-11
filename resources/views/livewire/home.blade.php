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
		#lomba .lead {
			color: #771F17;
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
		<symbol id="instagram" viewBox="0 0 16 16">
			<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
		</symbol>
		<symbol id="youtube" viewBox="0 0 16 16">
			<path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408z"/>
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
				<a href="{{ asset('juklak-juknis-mancitosh-v9-2025-2.pdf') }}" class="btn btn-dark btn-lg me-xl-2 rounded-4"><svg class="bi me-2" width="1em" height="1em"><use href="#file-earmark-text"></use></svg> Guide Book</a>
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
				<div class="py-3 py-xl-4">
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
	<div class="text-center mb-5">
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSce8W93tKHRGCnnHSWhgJyFy51wfRMl3saz53-YOVX4J9hEPg/viewform">
			<img src="{{ asset('images/ppdb.jpg') }}" class="img-fluid">
		</a>
	</div>
	<div class="footer">
		<div class="container py-4 mb-5 rounded-5 footer-sponsors">
			<h3 class="text-center mb-3">Didukung oleh</h3>
			<div class="row row-cols-xl-6 justify-content-center mb-1">
				<div class="col"><img src="{{ asset('sponsors/la-tansa.png') }}" class="rounded-5 shadow img-fluid"></div>
				<div class="col"><img src="{{ asset('sponsors/yk-studio.png') }}" class="rounded-5 shadow img-fluid"></div>
			</div>
		</div>
		<div class="container pb-5">
			<div class="row">
				<div class="col-xl-5">
					<p class="lead fw-bold">&copy; 2025 OSIM MANZAPO Prod.</p>
					<p class="mb-0">Sanggar MAN 1 Ponorogo</p>
					<p class="mb-0">Jl. Arif Rahman Hakim No. 02</p>
					<p class="mb-0">Desa Cekok, Kec. Babadan, Kab. Ponorogo</p>
				</div>
				<div class="col-xl-7 d-flex align-items-center gap-3">
					<div class="fw-bold">Ikuti Kami</div>
					<a href="https://www.instagram.com/osmanza.po" target="_blank" rel="noindex,nofollow" class="link-underline link-underline-opacity-0 link-underline-opacity-50-hover link-body-emphasis"><svg class="bi me-2" width="1em" height="1em"><use href="#instagram"></use></svg>OSIS MAN 1 Ponorogo</a>
					<a href="https://www.instagram.com/man1ponorogo" target="_blank" rel="noindex,nofollow" class="link-underline link-underline-opacity-0 link-underline-opacity-50-hover link-body-emphasis"><svg class="bi me-2" width="1em" height="1em"><use href="#instagram"></use></svg>MAN 1 Ponorogo</a>
					<a href="https://www.youtube.com/@man1ponorogo" target="_blank" rel="noindex,nofollow" class="link-underline link-underline-opacity-0 link-underline-opacity-50-hover link-body-emphasis"><svg class="bi me-2" width="1em" height="1em"><use href="#youtube"></use></svg>MAN 1 Ponorogo</a>
				</div>
			</div>
		</div>
	</div>
</div>
