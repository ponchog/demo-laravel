@extends('layouts.master')

@section('content')

<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li class="active">Artists Represented</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container" style="padding:0px;">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1>Artists Represented</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit Illo quaerat <br> commodi excepturi dignissimos!</p> -->							

							<div class="isotope-container-fitrows row grid-space-10">
								<div class="col-sm-6 col-md-4 isotope-item">
									<a href="/artists/ernesto-ibanez">
										<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center" style="cursor:pointer; padding-top: 15px;">
											<div class="overlay-container">
												{{-- <img src="/images/artists/ernesto/1.gif" alt="" style="max-height:230px; display:inline;"> --}}
												<img src="/images/artists/ernesto/Owen_Wild_pig_16x13x17_mixed_media_and_nails(2).jpeg" alt="" style="max-height:230px; display:inline;">
												
											</div>
											<div class="body">
												<h3>Ernesto Ibanez</h3>
											</div>
										</div>
									</a>
								</div>

								<div class="col-sm-6 col-md-4 isotope-item">
									<a href="/artists/cinthia-nuez">
										<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center" style="cursor:pointer; padding-top: 15px;">
											<div class="overlay-container">
												{{-- <img src="/images/artists/cinthia/5.jpg" alt="" style="max-height:230px; display:inline;"> --}}
												<img src="/images/artists/cinthia/botas de payaso 47x59_ mixta.jpg" alt="" style="max-height:230px; display:inline;">
												
											</div>
											<div class="body">
												<h3>Cinthia Nuez</h3>
											</div>
										</div>
									</a>
								</div>								

								<div class="col-sm-6 col-md-4 isotope-item">
									<a href="/artists/pulse">
										<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center" style="cursor:pointer; padding-top: 15px;">
											<div class="overlay-container">
												<img src="/images/artists/pulse/5.jpg" alt="" style="max-height:230px; display:inline;">											
											</div>
											<div class="body">
												<h3>Pulse</h3>											
											</div>
										</div>
									</a>
								</div>

								<div class="col-sm-6 col-md-4 isotope-item">
									<a href="/artists/daniel-escobedo">
										<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center" style="cursor:pointer; padding-top: 15px;">
											<div class="overlay-container">
												<img src="/images/artists/daniel/8.jpg" alt="" style="max-height:230px; display:inline;">											
											</div>
											<div class="body">
												<h3>Daniel Escobedo</h3>
											</div>
										</div>
									</a>
								</div>

								<div class="col-sm-6 col-md-4 isotope-item">
									<a href="/artists/carlos-torres">
										<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center" style="cursor:pointer; padding-top: 15px;">
											<div class="overlay-container">
												<img src="/images/artists/carlos/Diente_Estrella_59x43_oil_on_canvas.jpg" alt="" style="max-height:230px; display:inline;">											
											</div>
											<div class="body">
												<h3>Carlos Torrres</h3>
											</div>
										</div>
									</a>
								</div>

								<div class="col-sm-6 col-md-4 isotope-item">
									<a href="/artists/jesus-villalpando">
										<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center" style="cursor:pointer; padding-top: 15px;">
											<div class="overlay-container">
												<img src="/images/artists/jesus/Las pesadillas de kleee.jpg" alt="" style="max-height:230px; display:inline;">											
											</div>
											<div class="body">
												<h3>Jesus Villalpando</h3>
											</div>
										</div>
									</a>
								</div>

								<div class="col-sm-6 col-md-4 isotope-item">
									<a href="/artists/fernando-andrade">
										<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center" style="cursor:pointer; padding-top: 15px;">
											<div class="overlay-container">
												<img src="/images/artists/fernando/viendo las nubes_GraphiteOnPaper_30x22in_2016.jpg" alt="" style="max-height:230px; display:inline;">											
											</div>
											<div class="body">
												<h3>Fernando Andrade</h3>
											</div>
										</div>
									</a>
								</div>

							</div>

						</div>
						<!-- main end -->

					</div>
					<br>
					<br>
					<br>
				</div>
			</section>
			<!-- main-container end -->


@stop