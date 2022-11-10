<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>GE-SC Online</title>
    <meta name="description" content="Xlight Bootstrap Responsive HTML5/CSS3 Template">
    <meta name="author" content="Andsolutions.it">
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
    
	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144.png">

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
						<a class="navbar-brand" href="#"></a>
					</div>
					<div id="mynav" class="navbar-collapse collapse">
						<ul class="nav navbar-nav main-nav-list">
							<li><a href="#home">Inicio</a></li>
							<li><a href="#about">¿Que Hacemos?</a></li>
							<li><a href="#team">Equipo</a></li>
							<li><a href="#works">Trabajos</a></li>
							<li><a href="#pricing">Comentarios</a></li>
							<li><a href="#news">Acerca De</a></li>
							<li><a href="#contacts">Contacto</a></li>								
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
						<p class="animated fadeInRightBig">Empresa dedicada a la arquitectura</p>
						<a data-scroll class="learn-more animated fadeInUpBig" href="#about">Iniciar</a>
					</div>
				</div>
				<div class="item"> <!-- Change Image -->
					<div class="caption">
						<h1 class="animated fadeInLeftBig"><strong>Creatividad</strong> y pasión</h1>
						<p class="animated fadeInRightBig">Proyectos novedosos</p>
						<a data-scroll class="learn-more animated fadeInUpBig" href="#about">Iniciar</a>
					</div>
				</div>
				<div class="item"> <!-- Change Image -->
					<div class="caption">
						<h1 class="animated fadeInLeftBig">Grandes proyectos, <strong>Gran Calidad</strong></h1>
						<p class="animated fadeInRightBig">Ready to Start</p>
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
						<h1><span>Acerca De</span></h1>							
					</div>
					<div class="element-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1>¿A qué nos dedicamos?</h1>
						<h3>Somos una <span class="main-color">nueva empresa</span> que piensa en el <span class="main-color">Futuro</span></h3>
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
	<div class="facts parallax">
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
							<div class="col-lg-3 col-md-3">
								<div class="number wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">
									<p class="timer" data-from="0" data-to="612" data-speed="2000">612</p>								
								</div>
								<div class="number-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
									CUPS OF COFFEE
								</div>
							</div>
							<div class="col-lg-3 col-md-3">
								<div class="number wow fadeInRight" data-wow-duration="1s" data-wow-delay="450ms">
									<p class="timer" data-from="0" data-to="432" data-speed="2000">432</p>		
								</div>
								<div class="number-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="450ms">
									HAPPY CLIENTS
								</div>
							</div>
							<div class="col-lg-3 col-md-3">
								<div class="number wow fadeInRight" data-wow-duration="1s" data-wow-delay="600ms">
									<p class="timer" data-from="0" data-to="957" data-speed="2000">957</p>		
								</div>
								<div class="number-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="600ms">
									SONG LISTENED
								</div>
							</div>
							<div class="col-lg-3 col-md-3">
								<div class="number wow fadeInRight" data-wow-duration="1s" data-wow-delay="750ms">
									<p class="timer" data-from="0" data-to="8912" data-speed="2000">8912</p>		
								</div>
								<div class="number-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="750ms">
									ROWS OF CODE
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Facts --> 

</section> 
<!-- End About Section --> 

<!-- Team Section --> 
<section class="section-wrapper" id="team">
	<div class="team">
		<!-- Block Title -->
		<div class="meet-the-team">			
			<div class="element-title">			
				<div class="row">	 		
					<div class="container">	 
					<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1><span>Conoce al equipo</span></h1>								
					</div>					
						<h3 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Este es el <span class="main-color">Equipo</span>, Esta es nuestra <span class="main-color">Familia</span></h3>
					</div>
				</div>
			</div>
			<!-- End Block Title -->
			<div class="row">
				<div class="container">	
					<div class="wrapper-team">				
						<div class="col-lg-3 col-md-3">
							<div class="team-member">
								<div class="team-member-holder wow flipInY" data-wow-duration="1s" data-wow-delay="300ms">
									<div class="team-member-image">
										<img src="images/team/member-1.jpg" alt="" /> <!-- Change Image -->	
										<div class="team-overlay">
											<div class="img-overlay"></div>
										</div>
										<div class="overlay-content"> 
											<div class="team-member-social-list">
												<a class="team-member-social-list-item" href="#"><i class="fa fa-facebook"></i></a>
												<a class="team-member-social-list-item" href="#"><i class="fa fa-envelope"></i></a>
											</div>
										</div>
									</div>
									<div class="team-member-meta">
										<h4 class="team-member-name"><span class="main-color">J</span>ane <span class="main-color">D</span>oe</h4>
										<div class="team-member-role">CEO</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="team-member">
								<div class="team-member-holder wow flipInY" data-wow-duration="1s" data-wow-delay="500ms">
									<div class="team-member-image">
										<img src="images/team/member-2.jpg" alt="" /> <!-- Change Image -->	
										<div class="team-overlay">
											<div class="img-overlay"></div>
										</div>
										<div class="overlay-content"> 
											<div class="team-member-social-list">
												<a class="team-member-social-list-item" href="#"><i class="fa fa-facebook"></i></a>
												<a class="team-member-social-list-item" href="#"><i class="fa fa-twitter"></i></a>
												<a class="team-member-social-list-item" href="#"><i class="fa fa-envelope"></i></a>
											</div>
											<a class="view-profile profile-read-more" href="#" data-single_url="profile2.html">Profile</a>										
										</div>
									</div>
									<div class="team-member-meta">
										<h4 class="team-member-name"><span class="main-color">M</span>ark <span class="main-color">W</span>ood</h4>
										<div class="team-member-role">Creative Director</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="team-member">
								<div class="team-member-holder wow flipInY" data-wow-duration="1s" data-wow-delay="800ms">
									<div class="team-member-image">
										<img src="images/team/member-3.jpg" alt="" /> <!-- Change Image -->	
										<div class="team-overlay">
											<div class="img-overlay"></div>
										</div>
										<div class="overlay-content"> 
											<div class="team-member-social-list">
												<a class="team-member-social-list-item" href="#"><i class="fa fa-facebook"></i></a>
												<a class="team-member-social-list-item" href="#"><i class="fa fa-twitter"></i></a>
												<a class="team-member-social-list-item" href="#"><i class="fa fa-envelope"></i></a>
											</div>
											<a class="view-profile profile-read-more" href="#" data-single_url="profile3.html">Profile</a>											
										</div>
									</div>
									<div class="team-member-meta">
										<h4 class="team-member-name"><span class="main-color">K</span>en <span class="main-color">S</span>mith</h4>
										<div class="team-member-role">Sales Manager</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="team-member">
								<div class="team-member-holder wow flipInY" data-wow-duration="1s" data-wow-delay="1100ms">
									<div class="team-member-image">
										<img src="images/team/member-4.jpg" alt="" /> <!-- Change Image -->	
										<div class="team-overlay">
											<div class="img-overlay"></div>
										</div>
										<div class="overlay-content"> 
											<div class="team-member-social-list">
												<a class="team-member-social-list-item" href="#"><i class="fa fa-facebook"></i></a>
												<a class="team-member-social-list-item" href="#"><i class="fa fa-twitter"></i></a>
												<a class="team-member-social-list-item" href="#"><i class="fa fa-envelope"></i></a>
											</div>
											<a class="view-profile profile-read-more" href="#" data-single_url="profile4.html">Profile</a>										
										</div>
									</div>
									<div class="team-member-meta">
										<h4 class="team-member-name"><span class="main-color">J</span>amie <span class="main-color">D</span>uff</h4>
										<div class="team-member-role">Senior Developer</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Profile Team -->
		<div id="team-single-wrap">
			<div id="team-single">
			</div>
		</div>
		<!-- End Profile Team -->	
	</div>
</section> 
<!-- End Team Section --> 


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
						  <li><span class="filter active" data-filter="all">All</span></li>
						  <li><span class="filter" data-filter=".category-1">IMAGES</span></li>
						  <li><span class="filter" data-filter=".category-2">VIDEO</span></li>
						  <li><span class="filter" data-filter=".category-3">PROJECTS</span></li>
						</ul>
						<div class="portfolio-wrap">
							<div class="myport wow fadeInDown" data-wow-duration="1s" data-wow-delay="600ms">
								<div class="mix category-1 portfolio" data-myorder="1">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-single-image.html" title="This is the description">
											<img class="" src="images/works/work1.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">IMAGE</div>										
												<div class="works-overlay-text">Single Image</div>										
												<div class="works-overlay-icon"><i class="fa fa-image"></i></div>										
											</div>	
										</a>
									</div>		  
								</div>
								<div class="mix category-2 portfolio" data-cat="category-2" data-myorder="2">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-single-image.html" title="This is the description">									
										<img class="" src="images/works/work2.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">IMAGE</div>										
												<div class="works-overlay-text">Single Image</div>										
												<div class="works-overlay-icon"><i class="fa fa-video-camera"></i></div>										
											</div>	
										</a>
									</div>	
								</div>
								<div class="mix category-3 portfolio" data-cat="category-3" data-myorder="3">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-single-image.html" title="This is the description">
											<img class="" src="images/works/work3.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">PROJECT</div>										
												<div class="works-overlay-text">Single Image</div>										
												<div class="works-overlay-icon"><i class="fa fa-graduation-cap"></i></div>										
											</div>	
										</a>
									</div>		  
								</div>

								<div class="mix category-1 portfolio" data-cat="category-1" data-myorder="4">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-slider.html" title="This is the description">
											<img class="" src="images/works/work4.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">IMAGE</div>										
												<div class="works-overlay-text">Gallery</div>										
												<div class="works-overlay-icon"><i class="fa fa-image"></i></div>										
											</div>
										</a>
									</div>	  
								</div>

								<div class="mix category-2 portfolio" data-cat="category-2" data-myorder="5">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-slider.html" title="This is the description">
											<img class="" src="images/works/work5.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">VIDEO</div>										
												<div class="works-overlay-text">Gallery</div>										
												<div class="works-overlay-icon"><i class="fa fa-video-camera"></i></div>										
											</div>
										</a>
									</div>		  
								</div>
								<div class="mix category-3 portfolio" data-cat="category-3" data-myorder="6">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-slider.html" title="This is the description">
											<img class="" src="images/works/work6.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">PROJECT</div>										
												<div class="works-overlay-text">Gallery</div>										
												<div class="works-overlay-icon"><i class="fa fa-graduation-cap"></i></div>										
											</div>	
										</a>
									</div>			  
								</div>
								<div class="mix category-1 portfolio" data-cat="category-1" data-myorder="7">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-video-youtube.html" title="This is the description">
											<img class="" src="images/works/work7.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">IMAGE</div>										
												<div class="works-overlay-text">Video</div>										
												<div class="works-overlay-icon"><i class="fa fa-image"></i></div>										
											</div>	
										</a>
									</div>		  
								</div>
								<div class="mix category-2 portfolio" data-cat="category-2" data-myorder="8">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-video-youtube.html" title="This is the description">
											<img class="" src="images/works/work8.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">Video</div>										
												<div class="works-overlay-text">Video</div>										
												<div class="works-overlay-icon"><i class="fa fa-video-camera"></i></div>										
											</div>
										</a>
									</div>			  
								</div>
								<div class="mix category-3 portfolio" data-cat="category-3" data-myorder="9">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-video-youtube.html" title="This is the description">
											<img class="" src="images/works/work9.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">PROJECT</div>										
												<div class="works-overlay-text">Video</div>										
												<div class="works-overlay-icon"><i class="fa fa-graduation-cap"></i></div>										
											</div>	
										</a>
									</div>		  
								</div>
								<div class="mix category-1 portfolio" data-cat="category-1" data-myorder="10">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-video-vimeo.html" title="This is the description">
											<img class="" src="images/works/work10.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">IMAGE</div>										
												<div class="works-overlay-text">Video</div>										
												<div class="works-overlay-icon"><i class="fa fa-image"></i></div>										
											</div>
										</a>
									</div>			  
								</div>
								<div class="mix category-2 portfolio" data-cat="category-2" data-myorder="11">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-video-vimeo.html" title="This is the description">
											<img class="" src="images/works/work11.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">Video</div>										
												<div class="works-overlay-text">Video</div>										
												<div class="works-overlay-icon"><i class="fa fa-video-camera"></i></div>										
											</div>
										</a>
									</div>			  
								</div>
								<div class="mix category-3 portfolio" data-cat="category-3" data-myorder="12">
									<div class="img-holder">
										<a class="folio-read-more" href="#" data-single_url="portfolio-video-vimeo.html" title="This is the description">
											<img class="" src="images/works/work12.jpg" alt="This is the title"> <!-- Change Image -->
											<div class="works-overlay">
												<div class="img-overlay"></div>
											</div>		
											<div class="overlay-content"> 
												<div class="works-overlay-category">PROJECT</div>										
												<div class="works-overlay-text">Video</div>										
												<div class="works-overlay-icon"><i class="fa fa-graduation-cap"></i></div>										
											</div>
										</a>
									</div>			  
								</div>
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

<!-- Price Section --> 
<section class="section-wrapper" id="pricing">
	<div class="clients parallax">
		<!-- Block Title -->
		<div class="overlay">
			<div class="wrapper-block-clients">
				<div class="element-title">	
					<div class="row">	 		
						<div class="container">	 		
							<h1 class="main-color wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">Nuestros comentarios de los visitantes</h1>
							<h3 class="white-color wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Puedes dejar tus comentarios en el formulario de contacto</h3>
						</div>
					</div>
				</div>
				<!-- End Block Title -->
				<div class="row">
					<div class="container">	 		
						<div class="wrapper-clients wow fadeInDown" data-wow-duration="1s" data-wow-delay="500ms">
							<!-- Start Testimonial Slider -->
							<div class="carousel slide carousel-mod" data-ride="carousel" id="testimonial">
								<div class="carousel-inner">
									<!-- Testimonial #1  -->
									<div class="item active">
										<div class="row">
											<div class="col-lg-12 col-sm-12">
												<div class="testimonial-inner">
													<img class="img-circle" src="images/clients/person_1.jpg" alt="" title="" /><!-- Testimonial Image  -->
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p><!-- Tesimonial  -->
												</div>
												<h5>-- Jamie Sun, Over Agency --</h5>
											</div>
										</div>
									</div>
									<!-- End Testimonial #1  -->
									<!-- Testimonial #2  -->
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-sm-12">
												<div class="testimonial-inner">
													<img class="img-circle" src="images/clients/person_2.jpg" alt="" title="" />
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
												</div>
												<h5>-- Mike Stan, Cet Agency --</h5>
											</div>
										</div>
									</div>
									<!-- End Testimonial #2  -->									
									<!-- Testimonial #3  -->
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-sm-12">
												<div class="testimonial-inner">
													<img class="img-circle" src="images/clients/person_3.jpg" alt="" title="" />
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
												</div>
												<h5>-- Jane Doe, Exit Agency --</h5>
											</div>
										</div>
									</div>	
									<!-- End Testimonial #3  -->									
								</div>
								<ol class="carousel-indicators">
									<li data-target="#testimonial" data-slide-to="0" class="active"></li>
									<li data-target="#testimonial" data-slide-to="1"></li>
									<li data-target="#testimonial" data-slide-to="2"></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section> 
<!-- End Price Section -->
	
	
<!-- News Section --> 
<section class="section-wrapper" id="news">
	<div class="news">
		<!-- Block Title -->	
		<div class="element-title">			
			<div class="row">	 		
				<div class="container">
					<div class="section-title wow fadeInDown">			
						<h1><span>Datos e Información de la empresa</span></h1>							
					</div>				
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Datos de interés para los visitantes</h1>
				</div>
			</div>
		</div>
		<!-- End Block Title -->
		<div class="container">
			<div class="wrapper-news">	
				<div class="row">
					<div class="col-lg-6 col-sm-6">	
						<div class="news-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="300ms">	
							<div class="entry-header">	
								<div class="blog-image">
									<a href="blog.html"><img alt="" src="images/blog/post1.jpg" class="img-responsive"></a>
								</div>							
								<div class="post-date">
									<h2>21<span>June</span></h2>
								</div>							
							</div>
							<div class="entry-content">	
								<h3 class="entry-title">
									<a href="blog.html">Adipisicing elit, sed do eiusmod tempor</a>
								</h3>							
								<ul class="entry-meta">
								<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Projects <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 3 Comments</a></li>
								</ul>	
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>								
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">	
						<div class="news-content wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">	
							<div class="entry-header">	
								<div class="blog-image">
									<a href="blog.html"><img alt="" src="images/blog/post2.jpg" class="img-responsive"></a>
								</div>							
								<div class="post-date">
									<h2>26<span>July</span></h2>
								</div>							
							</div>
							<div class="entry-content">	
								<h3 class="entry-title">
									<a href="blog.html">Adipisicing elit, sed do eiusmod tempor</a>
								</h3>							
								<ul class="entry-meta">
								<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Projects <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
								</ul>	
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-6">	
						<div class="news-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="600ms">	
							<div class="entry-header">	
								<div class="blog-image">
									<a href="blog.html"><img alt="" src="images/blog/post3.jpg" class="img-responsive"></a>
								</div>							
								<div class="post-date">
									<h2>28<span>June</span></h2>
								</div>							
							</div>
							<div class="entry-content">	
								<h3 class="entry-title">
									<a href="blog.html">Adipisicing elit, sed do eiusmod tempor</a>
								</h3>							
								<ul class="entry-meta">
								<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Projects <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 3 Comments</a></li>
								</ul>	
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>								
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">	
						<div class="news-content wow fadeInRight" data-wow-duration="1s" data-wow-delay="600ms">	
							<div class="entry-header">	
								<div class="blog-image">
									<a href="blog.html"><img alt="" src="images/blog/post4.jpg" class="img-responsive"></a>
								</div>							
								<div class="post-date">
									<h2>30<span>July</span></h2>
								</div>							
							</div>
							<div class="entry-content">	
								<h3 class="entry-title">
									<a href="blog.html">Adipisicing elit, sed do eiusmod tempor</a>
								</h3>							
								<ul class="entry-meta">
								<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Projects <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
								</ul>	
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>								
							</div>
						</div>
					</div>
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
						<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Envía tu <span class="main-color">comentario </span>para ser mostrado en la páginas</h3>	
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
										<div class="">Tecámac Cetro, Tecámac, Estado de México</div>
									</div>								
									<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="450ms">	
										<i class="fa fa-mobile-phone"></i>
										<div class="">Lunes a Vienes 09:00am a 05:00pm / Sábado de 09:00am a 03:00pm</div>
										<div class="">+1800 920 8845</div>
									</div>
									<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="600ms">	
										<i class="fa fa-envelope-o"></i>
										<div class="">Envianos un correo personal si lo deseas</div>
										<div class="">info@mywebsite.com</div>
									</div>								
									
								</div>								
							</div>								
							<div class="row wow fadeInRight" data-wow-duration="1s" data-wow-delay="800ms">
								<!-- Start contact-form -->	
								<form id="contact-form" method="post" action="#">
									<div class="col-lg-6 col-sm-6">				
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Ingresa tu nombre">
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Ingresa tu correo">
										</div>
										<div class="form-group">
											<input type="text" name="subject" class="form-control" placeholder="Asunto">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">				
										<div class="form-group">
											<textarea  name="message" class="form-control" placeholder="Tu comentario" rows="8"></textarea>
										</div>
										<div id="output"></div>
										<input type="submit" class="" value="Enviar">
									</div>
								</form>
								<!-- End contact-form -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	
</section> 
<!-- End News Section -->	
	
	
<!-- Contact Section --> 
<section class="section-wrapper" id="contacts">
	<!-- Contacts -->	
	
	<!-- End Contacts -->	
	
</section> 
<!-- End Contact Section -->		
	
<!-- Footer -->
<div class="bottom-footer">
	<div class="container"> 
		<div class="bottom-footer-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
			<ul class="bottom-social-icons">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
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