@extends('remote/index')
@section('menu')
<link rel="stylesheet" type="text/css" href="{{ asset('css/remote/styles.css') }}">
	<div id="main" class="main">
		<div class="container-fluid">
			<h1 class="title">Message</h1>
			<p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
			<p>This sidebar is of full height (100%) and always shown.</p>
			<p>Some random text..</p>
			<p id="error"></p>
		</div>
	</div>
	
<script type="text/javascript" src="{{ asset('js/remote/menu.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection