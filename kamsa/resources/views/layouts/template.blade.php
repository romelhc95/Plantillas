<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Template Recuperaciones & Abogados Kamsa">
	<title>Recuperaciones & Abogados Kamsa</title> 
	{!! Html::style('css/bootstrap.min.css') !!}
	{!! Html::style('css/font-awesome.min.css') !!}
	{!! Html::style('css/main.css') !!}
	{!! Html::style('css/responsive.css') !!}
	
</head><!--/head-->

<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="#"><h1><img src="{!! URL::to('../images/Logo/logoKamsa90px.png') !!}" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#">Home</a></li> 
						<li class="scroll"><a href="#">Listar</a></li> 
						<li class="scroll"><a href="#">Registrar</a></li> 
						<li class="scroll"><a href="#">Editar</a></li> 
						<li class="scroll"><a href="#">Eliminar</a></li> 
						<li class="scroll"><a href="#">Reportes</a></li>  
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 
	<section>
    <br>
    <br>
	    @yield('content')
	</section>
	<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2016 - Recuperaciones & Abogados Kamsa | All Rights Reserved</p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 
	
	{!! Html::script('js/jquery.js') !!}
	{!! Html::script('js/jquery.min.js') !!}
	{!! Html::script('js/bootstrap.min.js') !!}
	{!! Html::script('js/main.js') !!}
	{!! Html::script('js/jquery.parallax.js') !!}
	{!! Html::script('js/jquery.prettyPhoto.js') !!}
	{!! Html::script('js/jquery.isotope.min.js') !!}
	{-- Html::script('js/dropdown.js') --}

</body>
</html>