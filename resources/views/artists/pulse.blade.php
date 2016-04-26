@extends('layouts.master')


@section('content')

	<!-- breadcrumb start -->
		<!-- ================ -->
		<div class="breadcrumb-container">
			<div class="container">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
					<li><a class="link-dark" href="/artists">Artists</a></li>
					<li class="active">Pulse</li>
				</ol>
			</div>
		</div>
		<!-- breadcrumb end -->

	<section class="main-container" style="padding:0px;">
		<div class="container">
			<h1>Pulse</h1>	
			<!-- tabs start -->
			<!-- ================ -->
			<!-- Nav tabs -->
			<ul class="nav nav-tabs style-2" role="tablist">
				<li class="active"><a href="#h2tab1" role="tab" data-toggle="tab">Artwork</a></li>
				<li><a href="#h2tab2" role="tab" data-toggle="tab">Bio</a></li>
				<!-- <li><a href="#h2tab3" role="tab" data-toggle="tab">Exhibits</a></li> -->
				<!-- <li><a href="#h2tab3" role="tab" data-toggle="tab">Creative Process</a></li> -->
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane in active" id="h2tab1">
					<div class="row" style="padding:20px;">				
						<div class="shadow bordered">
							<div class="overlay-container">
								<img src="/images/artists/pulse/meistrin 51x59_ mix media.jpg" alt="">
								<a href="/images/artists/pulse/meistrin 51x59_ mix media.jpg" class="overlay-link popup-img" title="First image title">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>
						<div class="space-bottom"></div>
						<div class="row grid-space-20">
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/pulse/Camaleon boy 51x59_ mix media .jpg" alt="">
									<a href="/images/artists/pulse/Camaleon boy 51x59_ mix media .jpg" class="overlay-link small popup-img" title="Second image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/pulse/Don eter 51x59_ mix media .jpg" alt="">
									<a href="/images/artists/pulse/Don eter 51x59_ mix media .jpg" class="overlay-link small popup-img" title="Third image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/pulse/kikiri-ki 51x59_ mix media.jpg" alt="">
									<a href="/images/artists/pulse/kikiri-ki 51x59_ mix media.jpg" class="overlay-link small popup-img" title="Fourth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/pulse/la niña ti.... 51x59_ mix media.jpg" alt="">
									<a href="/images/artists/pulse/la niña ti.... 51x59_ mix media.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="space-bottom"></div>
					<div class="row grid-space-20">
						<div class="col-xs-3">
							<div class="overlay-container">
								<img src="/images/artists/pulse/Miaw 51x59_ mix media.jpg" alt="">
								<a href="/images/artists/pulse/Miaw 51x59_ mix media.jpg" class="overlay-link small popup-img" title="Fifth image title">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="overlay-container">
								<img src="/images/artists/pulse/Monsieur retour 51x59_ mix media .jpg" alt="">
								<a href="/images/artists/pulse/Monsieur retour 51x59_ mix media .jpg" class="overlay-link small popup-img" title="Fifth image title">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="overlay-container">
								<img src="/images/artists/pulse/obiwey 51x59_mix media.jpg" alt="">
								<a href="/images/artists/pulse/obiwey 51x59_mix media.jpg" class="overlay-link small popup-img" title="Fifth image title">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>
					</div>					
				</div>



				<div class="tab-pane" id="h2tab2">
					<div class="row" style="padding:20px;">
						<p>
							Born June 26, 1986, in the transition from 10 to 11 years is known to the Graffiti

							as the first artistic expression and this becomes a strong influence on his life.
						</p>
						<p>
							Between the street and survey Press UNF, it is that his work is based from the

							observation function of the everyday of his life, where he obtained material for

							developing a variety of ideas with images easy to digest, cheerful and with a

							touch of sarcasm adding some background and insight.
						</p>
						<p>
							In his work it involves figurative image which takes up some points of

							Mesoamerican cultures, rooting physiognomic and aesthetic references from the

							treatment of the human body as the deformation of the skull, teeth or body

							decoration taking it to the current context.
						</p>
						
					</div>					
				</div>		
							
			</div>
			<!-- tabs end -->
		</div>
	</section>

	<br>
	<br>
	<br>
	<!-- footer top start -->
	<!-- ================ -->
	<div class="dark-bg  default-hovered footer-top animated-text">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="call-to-action text-center">
						<div class="row">
							<div class="col-sm-8">
								<h2>Would you like to know more about this artist?</h2>
								<h2>Contact us!</h2>
							</div>
							<div class="col-sm-4">
								<p class="mt-10"><a href="/contact" class="btn btn-animated btn-lg btn-gray-transparent ">Contact us<i class="fa fa-envelope pl-20"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer top end -->

@stop