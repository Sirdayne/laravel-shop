<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	@if( ! empty($seo) )
	<title>{{ $seo['title'] }}</title>
	<meta name="description" content="{{ $seo['description'] }}">
	@else
    <title>Window Fashion - изготовление, монтаж ролл-штор и жалюзи</title>
	<meta name="description" content="Window Fashion - изготовление, монтаж ролл-штор и жалюзи">
    @endif

	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/assets/css/fonts.css">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/slick.css">
	
	<link rel="stylesheet" href="/assets/css/media.css">
	
	<link rel="stylesheet" href="/assets/css/lightbox.css">

	<link rel="stylesheet" href="/css/laravel.css">
  
</head>
<body>   

<div class="navigation">
	@include('partials.navigation')
</div>