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
						@foreach ($personal as $personal)
						<div class="col-lg-3 col-md-3">
							<div class="team-member">
								<div class="team-member-holder wow flipInY" data-wow-duration="1s" data-wow-delay="300ms">
									<div class="team-member-image">
										<img src="{{$personal->photo}}" alt="" /> <!-- Change Image -->	
										<div class="team-overlay">
											<div class="img-overlay"></div>
										</div>
									</div>
									<div class="team-member-meta">
										<h4 class="team-member-name"><span class="main-color">{{$personal->name}}</h4>
										<div class="team-member-role">{{$personal->status}}</div>
										<div class="team-member-role">{{$personal->email}}</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach			
	
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