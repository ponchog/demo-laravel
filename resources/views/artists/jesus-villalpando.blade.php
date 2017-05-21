@extends('layouts.master')


@section('content')

	<!-- breadcrumb start -->
		<!-- ================ -->
		<div class="breadcrumb-container">
			<div class="container">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
					<li><a class="link-dark" href="/artists">Artists</a></li>
					<li class="active">Jesus Villalpando</li>
				</ol>
			</div>
		</div>
		<!-- breadcrumb end -->

	<section class="main-container" style="padding:0px;">
		<div class="container">
			<h1>Jesus Villalpando</h1>
			<!-- tabs start -->
			<!-- ================ -->
			<!-- Nav tabs -->
			<ul class="nav nav-tabs style-2" role="tablist">
				<li class="active"><a href="#h2tab1" role="tab" data-toggle="tab">Artwork</a></li>
				<li><a href="#h2tab2" role="tab" data-toggle="tab">Bio</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane in active" id="h2tab1">
					<div class="row" style="padding:20px;">
						<div class="shadow bordered">
							<div class="overlay-container">
								<img src="/images/artists/jesus/Las pesadillas de kleee.jpg" alt="" style="display:inline-block;">
								<a href="/images/artists/jesus/Las pesadillas de kleee.jpg" class="overlay-link popup-img" title="">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>
						<div class="space-bottom"></div>
						<div class="row grid-space-20">
							<div class="col-xs-6">
								<div class="overlay-container">
									<img src="/images/artists/jesus/jesus_1.jpg" alt="">
									<a href="/images/artists/jesus/jesus_1.jpg" class="overlay-link small popup-img" title="">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							
							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/jesus/El divorcio de Blanca Nieves.jpg" alt="">
									<a href="/images/artists/jesus/El divorcio de Blanca Nieves.jpg" class="overlay-link small popup-img" title="">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="col-xs-3">
								<div class="overlay-container">
									<img src="/images/artists/jesus/auto retrato con mascara de jaguar  35x48.jpg" alt="">
									<a href="/images/artists/jesus/auto retrato con mascara de jaguar  35x48.jpg" class="overlay-link small popup-img" title="">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>



							
							
						</div>

						<div class="space-bottom"></div>
						<div class="row grid-space-20">
							<div class="col-xs-5">
								<div class="overlay-container">
									<img src="/images/artists/jesus/felizes por siempre_print_27.5cmx19.5cm.jpg" alt="">
									<a href="/images/artists/jesus/felizes por siempre_print_27.5cmx19.5cm.jpg" class="overlay-link small popup-img" title="">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
							<div class="col-xs-7">
								<div class="overlay-container">
									<img src="/images/artists/jesus/la chola majikaaa 27x71.jpg" alt="">
									<a href="/images/artists/jesus/la chola majikaaa 27x71.jpg" class="overlay-link small popup-img" title="">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

						</div>						

						
					</div>
				</div>

				<div class="tab-pane" id="h2tab2">
					<div class="row" style="padding:20px;">
						<p>
							...
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