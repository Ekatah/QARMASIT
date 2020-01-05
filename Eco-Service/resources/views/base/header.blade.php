<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eco-Services</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		{!! Html::style('assets/css/style.css') !!}
		{!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
		<!--{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
		{!! Html::style('assets/bootstrap/css/bootstrap.css') !!}-->
    </head>
    <body>
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}"><img src="assets/Images/Logo/Eco-Service.png" title="Eco-Service" alt="Eco-Service"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span></a></li>
						<li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a></li>
						<li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a></li>
						<li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
						<li ><a href="{{ url('/getLogin') }}" class="baseButton">Se connecter</a></li>
					</ul>
					<form class="navbar-form navbar-left" action="{{ url('/') }}">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</nav>
		@yield('headband')
		<br>
		@yield('content')
		@yield('footer')