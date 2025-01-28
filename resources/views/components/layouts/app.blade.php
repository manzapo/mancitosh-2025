<!DOCTYPE html>
<html lang="ID_id">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@isset($title){!! $title . ' &middot; ' !!}@endisset{{ config('app.name') }}</title>
		<meta name="description" content="@isset($description){!! $description !!}@else{{ config('app.description') }}@endisset">
		<link rel="icon" href="{{ url('favicon.ico') }}">

		<link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('style.css') }}">
		@section('style')
			{{-- Add custom CSS style --}}
		@show

	</head>
	<body>
		{{ $slot }}

		<script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
		@section('javascript')
			{{-- Add more JavaScript library --}}
		@show

	</body>
</html>
