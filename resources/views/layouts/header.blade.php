<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>{{ config('app.name', 'Laravel') }}</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/css/green.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/rateit.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="{{ asset('assets/css/config.css') }}">

		<link href="{{ asset('assets/css/green.css') }}" rel="alternate stylesheet" title="Green color">
		<link href="{{ asset('assets/css/blue.css') }}" rel="alternate stylesheet" title="Blue color">
		<link href="{{ asset('assets/css/red.css') }}" rel="alternate stylesheet" title="Red color">
		<link href="{{ asset('assets/css/orange.css') }}" rel="alternate stylesheet" title="Orange color">
		<link href="{{ asset('assets/css/dark-green.css') }}" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body class="cnt-home">