<!DOCTYPE html>
<html lang="ID_id" data-bs-theme="dark">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{!! $title !!} &middot; {{ config('app.name') }}</title>
		<meta name="description" content="Ketentuan Lomba {{ $title }}">
		<link rel="icon" href="{{ url('favicon.ico') }}">

		<link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('style.css') }}">
	</head>
	<body>
		<nav class="navbar navbar-dark navbar-expand-lg" id="navbar-top">
			<div class="container">
				<a class="navbar-brand" href="{{ route('home') }}">
					<img src="{{ asset('images/navbar-brand.png') }}">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item text-center">
							<a href="{{ route('home') }}" class="nav-link" wire:navigate>Beranda</a>
						</li>
						<li class="nav-item text-center">
							<a href="{{ route('vlog') }}" class="nav-link" id="navVlog" wire:navigate>Vlog</a>
						</li>
						<li class="nav-item text-center">
							<a href="{{ route('pai') }}" class="nav-link" id="navPai" wire:navigate>Olimpiade PAI</a>
						</li>
						<li class="nav-item text-center">
							<a href="{{ route('tenismeja') }}" class="nav-link" id="navTenismeja" wire:navigate>Tenis Meja</a>
						</li>
						<li class="nav-item text-center">
							<a href="{{ route('poster') }}" class="nav-link" id="navPoster" wire:navigate>Desain Poster</a>
						</li>
						<li class="nav-item text-center">
							<a href="{{ route('cerpen') }}" class="nav-link" id="navCerpen" wire:navigate>Cerpen Digital</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<header class="bg-image-full d-flex align-items-center mb-5" id="cover-{{ $pageid }}">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 col-lg-7 col-xl-6">
						<div class="text-center">
							<h1>Lomba {{ $title }}</h1>
							<p class="lead mb-0">Ketentuan Lomba {{ $title }}</p>
							<p class="lead">Mancitosh V.9 Competition MAN 1 Ponorogo</p>
							<div class="d-flex flex-row justify-content-center gap-3">
								<a href="https://docs.google.com/forms/d/e/1FAIpQLSfGxq2cOy7M-HvhpdV9jq-P2uUABBogrDI_QxekCXzPSF0z-g/viewform" class="btn btn-light rounded-3">Daftar</a>
								<a href="{{ asset('juklak-juknis-mancitosh-v9-2025-2.pdf') }}" class="btn btn-outline-light rounded-3">Juknis</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		{{ $slot }}

		<script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
		<script type="text/javascript">
			document.getElementById("nav{{ ucfirst($pageid) }}").classList.add("active");
		</script>

	</body>
</html>
