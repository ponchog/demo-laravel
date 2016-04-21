@extends('layouts.master')


@section('content')

<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('images/page-contact-banner_1.jpg'); background-position: 50% 30%;">
	<!-- breadcrumb start -->
	<!-- ================ -->
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.html">Home</a></li>
				<li class="active">Page Contact</li>
			</ol>
		</div>
	</div>
	<!-- breadcrumb end -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center col-md-offset-2 pv-20">
				<h2 class="title">Contact Us</h2>
				<div class="separator mt-10"></div>
				<p class="text-center">
				Arte International supports emerging and established contemporary Latin American artists. 
				We provide a diversity of services and resources for artists, galleries and corporate buyers 
				to help create a connection between them.				
				</p>
			</div>
		</div>
	</div>
</div>
<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-8 space-bottom">
				<p class="lead">Are you looking for more information about Arte International? It will be great to hear from you! Send us your questions and request via appropriate contacts below. We look forward to hearing from you!</p>
				<div class="alert alert-success hidden" id="MessageSent">
					We have received your message, we will contact you very soon.
				</div>
				<div class="alert alert-danger hidden" id="MessageNotSent">
					Oops! Something went wrong please refresh the page and try again.
				</div>
				<div class="contact-form">
					<form id="contact-form" class="margin-clear" role="form">
						<div class="form-group has-feedback">
							<label for="name">Name*</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="">
							<i class="fa fa-user form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="email">Email*</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="">
							<i class="fa fa-envelope form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="subject">Subject*</label>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="">
							<i class="fa fa-navicon form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="message">Message*</label>
							<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
							<i class="fa fa-pencil form-control-feedback"></i>
						</div>
						<input type="submit" value="Submit" class="submit-button btn btn-default">
					</form>
				</div>
			</div>
			<!-- main end -->

			<!-- sidebar start -->
			<!-- ================ -->
			<aside class="col-md-3 col-lg-offset-1">
				<div class="sidebar">
					<div class="side vertical-divider-left">
						{{-- <h3 class="title logo-font">The <span class="text-default">Project</span></h3> --}}
						<h3 class="title">Arte International</h3>
						<div class="separator-2 mt-20"></div>
						<ul class="list">
							<li><i class="fa fa-home pr-10"></i>9901 IH 10 West Suite 777<br><span class="pl-20">San Antonio, TX 78230</span></li>
							<li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> +1 (210) 600-4126</li>							
							<li><i class="fa fa-envelope pr-10"></i><a href="mailto:contact@arteinternationalus.com">contact@arteinternationalus.com</a></li>
						</ul>
						<ul class="social-links circle small margin-clear clearfix animated-effect-1">
							<!-- <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
							<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
							<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
							<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
							<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
							<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li> -->
							<li class="facebook"><a target="_blank" href="https://www.facebook.com/arteinternationalus"><i class="fa fa-facebook"></i></a></li>
							<li class="instagram"><a target="_blank" href="https://www.instagram.com/arteinternational"><i class="fa fa-instagram"></i></a></li>
							<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/arteinternation"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- <div class="separator-2 mt-20 "></div> -->
						
					</div>
				</div>
			</aside>
			<!-- sidebar end -->
		</div>
	</div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->

<!-- section end -->

<!-- section start -->
<!-- ================ -->
<!-- <section class="section pv-40 background-img-3 dark-translucent-bg" style="background-position:50% 77%;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action text-center">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h2 class="title">Join Us Now</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
							<div class="separator"></div>
							<form class="form-inline margin-clear">
								<div class="form-group has-feedback">
									<label class="sr-only" for="subscribe2">Email address</label>
									<input type="email" class="form-control" id="subscribe2" placeholder="Enter email" name="subscribe2" required="">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Submit <i class="fa fa-send"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<div class="clearfix"></div>
<!-- section end -->

<!-- footer top start -->
<!-- ================ -->
<!-- <div class="dark-bg  default-hovered footer-top animated-text">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action text-center">
					<div class="row">
						<div class="col-sm-8">
							<h2>Would you like to know more?</h2>
							<h2>Contact us!</h2>
						</div>
						<div class="col-sm-4">
							<p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent ">Contact us<i class="fa fa-envelope pl-20"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- footer top end -->

@stop

@section('bottomscript')

<!-- Google Maps javascript -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;signed_in=true"></script>
<script type="text/javascript" src="js/google.map.config.js"></script>

@stop