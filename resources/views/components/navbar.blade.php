<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">{{ config('app.name') }}</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a href="{{ route('home') }}" class="nav-link" wire:navigate>Beranda</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('vlog') }}" class="nav-link" id="navVlog" wire:navigate>Vlog</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('pai') }}" class="nav-link" id="navPai" wire:navigate>Olimpiade PAI</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('tenismeja') }}" class="nav-link" id="navTenismeja" wire:navigate>Tenis Meja</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('poster') }}" class="nav-link" id="navPoster" wire:navigate>Desain Poster</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('cerpen') }}" class="nav-link" id="navCerpen" wire:navigate>Cerpen Digital</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
