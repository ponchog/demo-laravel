@extends('layouts.master')


@section('content')

	<!-- breadcrumb start -->
		<!-- ================ -->
		<div class="breadcrumb-container">
			<div class="container">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
					<li><a class="link-dark" href="/artists">Artists</a></li>
					<li class="active">Cinthia Nuez</li>
				</ol>
			</div>
		</div>
		<!-- breadcrumb end -->

	<section class="main-container" style="padding:0px;">
		<div class="container">
			<h1>Cinthia Nuez</h1>	
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
						{{-- <div class="shadow bordered">
							<div class="overlay-container">
								<img src="/images/artists/cinthia/caballero_sol.jpg" alt="">
								<a href="/images/artists/cinthia/caballero_sol.jpg" class="overlay-link popup-img" title="First image title">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div> --}}

						<div class="shadow bordered">
							<div class="overlay-container">
								<img src="/images/artists/cinthia/Diana_29.13x23.6_oleo_on_wood.jpg" alt="">
								<a href="/images/artists/cinthia/Diana_29.13x23.6_oleo_on_wood.jpg" class="overlay-link popup-img" title="First image title">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>

						<div class="space-bottom"></div>
						<div class="row grid-space-20">

							<div class="col-xs-6">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/caballero_sol.jpg" alt="">
									<a href="/images/artists/cinthia/caballero_sol.jpg" class="overlay-link small popup-img" title="Second image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/Floreciendo 20x31.5- oil on canvas.jpg" alt="">
									<a href="/images/artists/cinthia/Floreciendo 20x31.5- oil on canvas.jpg" class="overlay-link small popup-img" title="Fourth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/Clown 7x10 oil on canvas.jpg" alt="">
									<a href="/images/artists/cinthia/Clown 7x10 oil on canvas.jpg" class="overlay-link small popup-img" title="Third image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>					
						</div>

						<div class="space-bottom"></div>
						<div class="row grid-space-20">
							
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/botas de payaso 47x59_ mixta.jpg" alt="">
									<a href="/images/artists/cinthia/botas de payaso 47x59_ mixta.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/escafandra 47x51- mixta.jpg" alt="">
									<a href="/images/artists/cinthia/escafandra 47x51- mixta.jpg" class="overlay-link small popup-img" title="Second image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/donas de cereal 59x51_mixta.jpg" alt="">
									<a href="/images/artists/cinthia/donas de cereal 59x51_mixta.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/oh my beauty 51x47_ mixta.jpg" alt="">
									<a href="/images/artists/cinthia/oh my beauty 51x47_ mixta.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

						</div>
						
						<div class="space-bottom"></div>
						<div class="row grid-space-20">

							<div class="col-xs-6">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/Top_model_meditating_15.7x19.6_Oleo_on_wood.jpg" alt="">
									<a href="/images/artists/cinthia/Top_model_meditating_15.7x19.6_Oleo_on_wood.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-6">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/golden mickey 67x59_mixta.JPG" alt="">
									<a href="/images/artists/cinthia/golden mickey 67x59_mixta.JPG" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							
						</div>

						<div class="space-bottom"></div>
						<div class="row grid-space-20">

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/heads up 67x59_ mixta.JPG" alt="">
									<a href="/images/artists/cinthia/heads up 67x59_ mixta.JPG" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/she is like a little bird 12x16_ collage paper-wood.JPG" alt="">
									<a href="/images/artists/cinthia/she is like a little bird 12x16_ collage paper-wood.JPG" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/Smal but famous 39.5x39.5_ mixta.jpg" alt="">
									<a href="/images/artists/cinthia/Smal but famous 39.5x39.5_ mixta.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/escafandra vincent 43x43_ mixta.jpg" alt="">
									<a href="/images/artists/cinthia/escafandra vincent 43x43_ mixta.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							
						</div>


						<div class="space-bottom"></div>
						<div class="row grid-space-20">

							<div class="col-xs-4">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/Crystal_11.8x11.8.jpg" alt="">
									<a href="/images/artists/cinthia/Crystal_11.8x11.8.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-4">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/love is delicious 14x14_ mixta.JPG" alt="">
									<a href="/images/artists/cinthia/love is delicious 14x14_ mixta.JPG" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-4">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/dos en uno12x16_ mixta.jpg" alt="">
									<a href="/images/artists/cinthia/dos en uno12x16_ mixta.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="space-bottom"></div>
						<div class="row grid-space-20">	

							<div class="col-xs-12">
								<div class="overlay-container">
									<img src="/images/artists/cinthia/was me on the road 12_circunference mixta.jpg" alt="">
									<a href="/images/artists/cinthia/was me on the road 12_circunference mixta.jpg" class="overlay-link small popup-img" title="Fifth image title">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>			
				</div>

				<div class="tab-pane" id="h2tab2">					
					<div class="row" style="padding:20px 50px 20px 50px;">
						<p>
							Cinthia Nuez is a Mexican professional artist, who specializes in drawing, painting
							and Illustration. Since 2004, her work has taken part in several collectives and
							individual exhibitions in Guadalajara and Los Angeles. Additionally, she has also
							been previously selected for “The Second Auction and Exhibition Molaa Awards
							2007”, by the Museum of Latin American Art.
						</p>

						<h3>Justification</h3>

						<p>
							“In my work, there is a constant search. I use collages as resource. My intention in
							doing so are to provoke a sense of puzzle, change the original context of an object,
							add other elements and combinations, as well as juxtapositions to the image. I also
							like to use mixed media on canvas, and printed fabrics in some of my pieces as well.						
							Identity is a constant element of my work. I include what is going on in my life, my
							personal experiences, and the questions I am currently pondering about the world.
						</p>
						<p>
							Currently, I am working in a new painting project called “Escafandra”. The narrative
							of the collection is a combination of realistic and abstract elements with the key
							component in these series being an antique diving helmet symbolizing the fully
							subversive experience that is life.
						</p>
						<p>
							I feel that my work has a universal language, able to be read and understood
							anywhere in the world. As an artist I try to renew myself in each project I undertake,
							and overtime my work has evolved through many subjects and color palettes.
						</p>
						<p>
							You can see high contrasts in my first pieces in comparison with my works of today
							being substantially subtle. However, my style has not changed. In every piece I
							create, I draw attention to a particular element, leaving an unadorned background,
							and creating the sense of sculpture. My pieces establish a space for reflection
							towards identity and mass culture, power and simulation.”
						</p>
						<p>
							- Cinthia Nuez
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