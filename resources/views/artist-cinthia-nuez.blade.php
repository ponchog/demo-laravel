@extends('layouts.master')


@section('content')

	<!-- <div class="banner dark-translucent-bg" style="background-image:url('images/page-about-banner-1a.jpg'); background-position: 50% 27%;"> -->
	<div class="banner dark-translucent-bg" style="background-image:url('images/artists/ernesto/3.gif'); background-position: 50% 58%;">
		<!-- breadcrumb start -->
		<!-- ================ -->
		<div class="breadcrumb-container">
			<div class="container">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
					<li><a class="link-dark" href="/">Artists</a></li>
					<li class="active">Ernesto Ibañez</li>
				</ol>
			</div>
		</div>
		<!-- breadcrumb end -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-20">
					{{-- <h3 class="title logo-font object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">The <span class="text-default">Project</span> Inc.</h3> --}}
					<h3 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><span style="font-size:24px;">Ernesto Ibañez</span></h3>
					
					<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
						Painting. Scuplture
					</p>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>

	<section class="main-container" style="padding:0px;">
		<div class="container">


			<!-- tabs start -->
			<!-- ================ -->
			<!-- Nav tabs -->
			<ul class="nav nav-tabs style-2" role="tablist">
				<li class="active"><a href="#h2tab1" role="tab" data-toggle="tab">Artwork</a></li>
				<li><a href="#h2tab2" role="tab" data-toggle="tab">Bio</a></li>
				<li><a href="#h2tab3" role="tab" data-toggle="tab">Exhibits</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane in active" id="h2tab1">
					<div class="row" style="padding:20px;">				
						<div class="shadow bordered">
							<div class="overlay-container">
								<img src="images/artists/ernesto/1.gif" alt="">
								<a href="images/artists/ernesto/1.gif" class="overlay-link popup-img" title="First image title">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>
						<div class="space-bottom"></div>
						<div class="row grid-space-20">
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="images/artists/ernesto/2.gif" alt="" style="max-height: 180px;">
									<a href="images/artists/ernesto/2.gif" class="overlay-link small popup-img" title="Second image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="images/artists/ernesto/3.gif" alt="" style="max-height: 180px;">
									<a href="images/artists/ernesto/3.gif" class="overlay-link small popup-img" title="Third image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="images/artists/ernesto/4.gif" alt="" style="max-height: 180px;">
									<a href="images/artists/ernesto/4.gif" class="overlay-link small popup-img" title="Fourth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="images/artists/ernesto/6.jpg" alt="" style="max-height: 180px;">
									<a href="images/artists/ernesto/6.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>					
				</div>



				<div class="tab-pane" id="h2tab2">
					<div class="row" style="padding:20px;">
						<p>Ernesto Ibanez has worked with various materials such as: ceramics, cement, wood, metal, fiberglass, and resin. Always aiming to take on new challenges and make full use of different materials. In the past four years the artist has concentrated his work on a technique that he developed in which the pieces are covered with thousands of nails that simulate fur. This idea emerged from the search to propose something new. He accomplished this by changing the nail’s context, from its original intent into something completely different. Creating a great impact between the spectator and the work.</p>


						<p><b>EDUCATION</b></p>
						<p>2005-2010 Degree: Bachelor of Visual Arts (Sculptor)<br />
						Guadalajara, Mexico Universidad de Guadalajara Mexico</p>
						<div class="clear"></div>
					</div>
					
				</div>		



				<div class="tab-pane" id="h2tab3">
					<div class="row" style="padding:20px;">
						<p><b>COLLECTIVE EXHIBITIONS</b></p>
						<div class="one_sixth">2007</div>
						<div class="five_sixth_last">“Shampoo Negro” (Black Shampoo) Chai Café, Guadalajara, Jalisco, Mexico</div>
						<div class="clear"></div>
						<div class="one_sixth">2009</div>
						<div class="five_sixth_last">“It’s Ok to Cry” Galería HUMO (HUMO Gallery), Guadalajara, Jalisco, Mexico</div>
						<div class="clear"></div>
						<div class="one_sixth">2009</div>
						<div class="five_sixth_last">“XVIII Salon de la Escultura” (The Eighteenth Sculpture Hall), Guadalajara Center of Modern Art</div>
						<div class="clear"></div>
						<div class="one_sixth">2010</div>
						<div class="five_sixth_last">La Casa Rosa (The Pink House), San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2010</div>
						<div class="five_sixth_last">High Wire Art Gallery, San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2010</div>
						<div class="five_sixth_last">“80th Annual Artists Exhibition”, San Antonio Art League and Museum, San Antonio,Texas, USA<br />
						Won Award “Marcia Gygli King Award”</div>
						<div class="clear" style="padding-top: 15px;"></div>
						<div class="one_sixth">2011</div>
						<div class="five_sixth_last">“No Puedo Prometer Nada” (I Cannot Promise Anything), Galería Jorge Martínez (Jorge Martinez Gallery), Guadalajara, Jalisco, Mexico</div>
						<div class="clear"></div>
						<div class="one_sixth">2011</div>
						<div class="five_sixth_last">“81st Annual Artists Exhibition”, The San Antonio Art League and Museum, San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2011</div>
						<div class="five_sixth_last">“Exposición de Colaboraciones” (Collaborations Exhibition), La Casa Rosa (The Pink House), San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2011</div>
						<div class="five_sixth_last">“Inspire’s on Fire”, San Antonio, Texas, USA<br />
						Won Award “Best of Show” with “Thousand Rabbits” piece.</div>
						<div class="clear" style="padding-top: 15px;"></div>
						<div class="one_sixth">2011</div>
						<div class="five_sixth_last">“Inspire’s on Fire”,San Antonio Central Library, San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2011</div>
						<div class="five_sixth_last">“La Parvada” (The Flock), Painting and Sculpture, Josephine Gallery, San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2012</div>
						<div class="five_sixth_last">“Four Emerging San Antonio Artists”, Gallery Nord, San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<p><b>INDIVIDUAL EXHIBITIONS</b></p>
						<div class="clear"></div>
						<div class="one_sixth">2011</div>
						<div class="five_sixth_last">“La Parvada” (The Flock), Patio Central Casa Museo López Portillo (Central Patio of the Museum House López Portillo), Guadalajara, Jalisco, Mexico</div>
						<div class="clear"></div>
						<div class="one_sixth">2011</div>
						<div class="five_sixth_last">“Painting and Sculpture”, Josephine Gallery, San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2012</div>
						<div class="five_sixth_last">“Universal Trash”, Magnolia Salon del Arte (Magnolia Art Hall), San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2013</div>
						<div class="five_sixth_last">“15 Artists”, Gallery Nord, San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2014</div>
						<div class="five_sixth_last">“Universal Trash, and El Bosque” (Universal Trash, and The Forest), Mexican Cultural Institute, San Antonio, Texas, USA</div>
						<div class="clear"></div>
						<div class="one_sixth">2015</div>
						<div class="five_sixth_last">“El Bosque” UNAM San Antonio Texas, USA</div>
						<div class="five_sixth_last"></div>
						<div class="five_sixth_last">2015</div>
						<div class="five_sixth_last">“El Bosque” UNAM Chicago Illinois USA</div>
						<div class="five_sixth_last"></div>
						<div class="five_sixth_last">2015</div>
						<div class="five_sixth_last">UTSA Silent Art auction</div>
						<div class="five_sixth_last"></div>
						<div class="five_sixth_last"></div>
					</div>
					
				</div>
			</div>
			<!-- tabs end -->
		</div>
	</section>

<br>
<br>
<br>
<br>
<br>
<br>


@stop