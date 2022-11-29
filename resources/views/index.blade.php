<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>GE-SC Arquitectos</title>
    <meta name="description" content="GE-SC Arquitectos">
    <meta name="author" content="Los The Boys">
    <meta name="description" content="">
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet" >	
	<link href="css/font-awesome.min.css" rel="stylesheet">	
	<link href="css/prettyPhoto.css" rel="stylesheet">
	
	<link href="css/theme.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/colors/golden.css" rel="stylesheet" class="colors">

	<!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>

<body data-spy="scroll" data-target="#mynav" data-offset="85">

<!-- Preloader --> 
<div id="preloader">
	<div id="status">
		<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
			  <div class="rect6"></div>
		</div>
	</div>
</div>
<!-- End Preloader -->

<header>

<!-- Bootstrap Menu -->
<div id="navigation">
	<div class="navbar-wrapper">
		<nav class="navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{route('index')}}"></a>
					</div>
					<div id="mynav" class="navbar-collapse collapse">
						<ul class="nav navbar-nav main-nav-list">
							<li><a href="#home">Inicio</a></li>
							<li><a href="#about">¿Que Hacemos?</a></li>
							<li><a href="#works">Trabajos</a></li>
							<li><a href="#news">Acerca De</a></li>
						</ul>
					</div>		
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- End Bootstrap Menu -->

<!-- Slider -->
<section id="home">
	<div class="slide-wrap">
		<div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active"> <!-- Change Image -->
					<div class="caption">
						<h1 class="animated fadeInLeftBig">Bienvenido a <strong>GE-SC ARQUITECTOS</strong></h1>
						<p class="animated fadeInRightBig">Empresa dedicada al Diseño y Construcción</p>
						<a data-scroll class="learn-more animated fadeInUpBig" href="#about">Iniciar</a>
					</div>
				</div>
				<div class="item"> <!-- Change Image -->
					<div class="caption">
						<h1 class="animated fadeInLeftBig">Equipo multidisciplinario de <strong>profesionales</strong></h1>
						<p class="animated fadeInRightBig">Amplia experiencia</p>
						<a data-scroll class="learn-more animated fadeInUpBig" href="#about">Iniciar</a>
					</div>
				</div>
				<div class="item"> <!-- Change Image -->
					<div class="caption">
						<h1 class="animated fadeInLeftBig">Dedicados a elaborar <strong>proyectos Arquitectónicos</strong></h1>
						<p class="animated fadeInRightBig">¿Listo para empezar?</p>
						<a data-scroll class="learn-more animated fadeInUpBig" href="#about">Iniciar</a>
					</div>
				</div>
			</div>
			<a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div>	
	</div>	
</section>
<!-- End Slider -->

</header>
	
<!-- About Xlight -->
<section class="section-wrapper" id="about">
	<div class="about-us">
		<div class="why-us">	  
			<div class="container">	  
				<div class="row">
					<!-- Block Title -->
					<div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1><span>¿A qué nos dedicamos?</span></h1>							
					</div>
					<div class="element-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h3>Somos una empresa <span class="main-color">joven </span> dedicada a la elaboración de <span class="main-color">proyectos Arquitectónicos</span></h3>
					</div>
					<!-- End Block Title -->
					<!-- About Us Icons -->
					<div class="wrapper-why-us">
						@foreach ($data as $data)
							<div class="col-lg-4 col-sm-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
								<i class="hovicon effect-1 sub-a"><b class="{{$data->icon}}"></b></i>
								<h2>{{$data->title}}</h2>
								<p>{{$data->description}}</p>
							</div>
						@endforeach
					</div>
					<!-- End About Us Icons -->
				</div>
			</div>
		</div>
	</div>
	<!-- End About Xlight -->


	<!-- Facts --> 
	<div class="facts parallax" id="Datos">
		<div class="overlay">
			<div class="wrapper-block-facts">
				<div class="container">	  
					<div class="row">
						<div class="element-title">			
							<h1 class="main-color wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Algunos datos de interés</h1>
							<h3 class="white-color wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">Somos una empresa joven pero tenemos bastante experiencia</h3>
						</div>
					</div>
					<div class="row">
						<div class="wrapper-number">	  
							@foreach ($stadistic as $stadistic)
								<div class="col-lg-3 col-md-3">
									<div class="number wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">
										<p class="timer" data-from="0" data-to="{{$stadistic->rank}}" data-speed="2000">{{$stadistic->rank}}</p>								
									</div>
									<div class="number-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
										{{$stadistic->title}}
									</div>
								</div>
							@endforeach		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Facts --> 

</section> 
<!-- End About Section --> 

<!-- Works Section --> 
<section class="section-wrapper" id="works">
	<div class="works">
		<!-- Block Title -->	
		<div class="element-title">			
			<div class="row">	 		
				<div class="container">
					<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1><span>Nuestros trabajos</span></h1>							
					</div>				
					<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Aquí se encuentran los <span class="main-color">proyectos</span>, hechos por la <span class="main-color">empresa</span></h3>	
				</div>
			</div>
		</div>
		<!-- End Block Title -->
		<div class="row">
			<div class="container-fluid">	 		
				<div class="wrapper-works">
					<div class="portfoliO">
						<ul id="filters" class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">
						  <li><span class="filter active" data-filter="all">Todos</span></li>
						  <li><span class="filter" data-filter=".design">Diseños</span></li>
						  <li><span class="filter" data-filter=".execute">Proyectos Ejecutados</span></li>
						  <li><span class="filter" data-filter=".interior">Interiores</span></li>
						</ul>
						<div class="portfolio-wrap">
							<div class="myport wow fadeInDown" data-wow-duration="1s" data-wow-delay="600ms">
								
							@foreach ($work as $work)
								<div class="mix {{$work->year}} portfolio" data-myorder="1">
									<div class="img-holder">
										<img class="" src="{{$work->photo}}" alt="">
										<div class="works-overlay">
											<div class="img-overlay"></div>
										</div>		
										<div class="overlay-content"> 
											<div class="works-overlay-category">{{$work->name}}</div>										
										</div>	
									</div>		  
								</div>
							@endforeach
								<div class="gap"></div>
								<div class="gap"></div>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
		<!-- Single Project -->
		<div id="works-single-wrap">
			<div id="works-single">
			</div>
		</div>
		<!-- End Single Project -->	
	</div>
</section> 
<!-- End Works Section -->

<!-- News Section --> 
<section class="section-wrapper" id="news">
	<div class="news">
		<!-- Block Title -->	
		<div class="element-title">			
			<div class="row">	 		
				<div class="container">
					<div class="section-title wow fadeInDown">			
						<h1><span>Acerca de la empresa</span></h1>							
					</div>				
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Nuestra visión y misión en el mundo</h1>
				</div>
			</div>
		</div>
		<!-- End Block Title -->
		<div class="container">
			<div class="wrapper-news">	
				<div class="row">
					@foreach ($info as $info)
						<div class="col-lg-6 col-sm-6">	
							<div class="news-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="300ms">	
								<div class="entry-header">	
									<div class="blog-image">
										<img alt="" src="{{$info->photo}}" class="img-responsive">
									</div>							
									<div class="post-date">
										<h2>{{$info->date}}</h2>
									</div>							
								</div>
								<div class="entry-content">	
									<h3 class="entry-title">
										{{$info->title}}
									</h3>							
									<p>{{$info->content}}</p>								
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>	
	</div>

	<div class="stay-in parallax">
		<div class="contacts"> 
	
			<!-- Block Title -->	
			<div class="element-title">			
				<div class="row">	 		
					<div class="container">
						<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
							<h1><span>Contáctanos</span></h1>							
						</div>				
						<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Envía un <span class="main-color">mensaje </span>si estas interesado en algún proyecto.</h3>	
					</div>
				</div>
			</div>
			<!-- End Block Title -->	
		
			<div class="container">
				<div class="row">	
					<div class="wrapper-contacts">		
						<div class="contact_form">
							<div class="row">
								<div class="wrapper-contacts-icons">	
									<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">	
										<i class="fa fa-map-marker"></i>
										<div class="">Tecámac Centro, Estado de México, CP: 55749</div>
									</div>								
									<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="450ms">	
										<i class="fa fa-mobile-phone"></i>
										<div class="">Lunes a Vienes 09:00am a 05:00pm / Sábado de 09:00am a 03:00pm</div>
										<div class="">+52 1 5581867547</div>
									</div>
									<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="600ms">	
										<i class="fa fa-envelope-o"></i>
										<div class="">Envianos un correo personal si lo deseas</div>
										<div class="">grupoge-sc@outlook.com</div>
									</div>								
									
								</div>								
							</div>								
							<div class="row wow fadeInRight" data-wow-duration="1s" data-wow-delay="800ms">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	
</section> 
<!-- End News Section -->	
	
<!-- Footer -->
<div class="bottom-footer">
	<div class="container"> 
		<div class="bottom-footer-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
			<ul class="bottom-social-icons">
				<li><a href="https://www.facebook.com/people/GESC-Arquitectos/100047534526892/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://api.whatsapp.com/send?phone=5215581867547&text=Hola%2C%20mucho%20gusto%2C%20deseo%20saber%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20Empresa" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		</div>	
		<div class="bottom-footer-left wow fadeInUp" data-wow-duration="1s" data-wow-delay="450ms">
			<p><span>&#169; Copyright 2022 GE-SC ARQUITECTOS, página creada por</span>  los THE BOYS</p>
		</div>		  
	</div>
</div>
<!-- End Footer -->		

<!-- Scroll to Top  -->
<a href="#" class="scroll-up"><i class="fa fa-arrow-up"></i></a>
<!-- End Scroll To Top  -->
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>	
	<script src="js/waypoints.min.js"></script>	
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>	
	<script src="js/jquery.knob.min.js"></script>	
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
  

</body>
</html>