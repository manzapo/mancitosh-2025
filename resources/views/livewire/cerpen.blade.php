<div>
	<x-navbar></x-navbar>
	<header class="bg-image-full d-flex align-items-center mb-5" id="cover-cerpen">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 col-lg-7 col-xl-6">
					<div class="text-center">
						<h1>Lomba Cerpen Berbantuan Aplikasi Presentasi</h1>
						<p class="lead mb-0">Ketentuan Lomba Cerpen Berbantuan Aplikasi Presentasi</p>
						<p class="lead">Mancitosh V.9 Competition MAN 1 Ponorogo</p>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>

@section('javascript')
	<script type="text/javascript">
		document.documentElement.setAttribute('data-bs-theme', 'dark');
		document.getElementById("navbar-top").classList.remove("bg-dark");
		document.getElementById("navCerpen").classList.add("active");
	</script>
@endsection
