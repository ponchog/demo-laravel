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
									<img src="/images/artists/pulse/la_nina_tiene_51x59_mix_media.jpg" alt="">
									<a href="/images/artists/pulse/la_nina_tiene_51x59_mix_media.jpg" class="overlay-link small popup-img" title="Fifth image title">
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
								<img src="/images/artists/pulse/Miaw51x59_mixmedia.jpg" alt="">
								<a href="/images/artists/pulse/Miaw51x59_mixmedia.jpg" class="overlay-link small popup-img" title="Fifth image title">
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
					<div class="row" style="padding:20px 50px 20px 50px;">
						<p>
							At age 10, Pulse discovered graffiti as his first expression of plastic arts. Graffiti was a strong influence on his art. Pulse’s process not only comes from his school of art knowledge but also from his knowledge of street art.
 						</p>
						<p>
							Based from his experience of everyday life. He obtained materials for developing a variety of ideas with images easy to digest, cheerful and with a touch of sarcasm adding some background and insight.
 						</p>
						<p>
							In his work it involves figurative images, which take up some points of Mesoamerican cultures, using aesthetic references from the treatment of the human body as the distortions of the skull and teeth, taking into current context. 
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