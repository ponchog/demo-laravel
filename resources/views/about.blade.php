@extends('layouts.master')


@section('content')

<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('images/page-about-banner-1a.jpg'); background-position: 50% 27%;">
	<!-- breadcrumb start -->
	<!-- ================ -->
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
				<li class="active">About</li>
			</ol>
		</div>
	</div>
	<!-- breadcrumb end -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center col-md-offset-2 pv-20">
				{{-- <h3 class="title logo-font object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">The <span class="text-default">Project</span> Inc.</h3> --}}
				<h3 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><span style="font-size:24px;">Arte International</span></h3>
				
				<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
				<!-- <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p> -->
				<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
				The Business Of Art
				</p>
			</div>
		</div>
	</div>
</div>
<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-bottom-clear">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">
				<h3 class="title"><strong>About Us</strong></h3>
				<div class="separator-2"></div>
				<div class="row">
					<div class="col-md-6">
						<p>Driven by a deep respect and passion for Latin American art, our founders established Arte International in 2015.
						The concept was simple yet unique to create an agency that represents Latin American artists to promote their works 
						to the art market in the United States. As a result, Arte International serves as a conduit for Latino artists and galleries.
						We arrange sales and set up contractual relationships with art dealers. We strive to develop and maintain relationships with 
						the nation’s most respected galleries and corporate buyers.</p>
						<br>
						<h3 class="title"><strong>Our Mission</strong></h3>
						<div class="separator-2"></div>
						<p>Our mission is to promote Latino art and their creativity in the United States. We also assist art galleries, corporate buyers, interior designers, and art collectors who identify and appreciate contemporary Latino art. Arte International serves as a conduit for art galleries that will arrange sales and set up a business relationship with the dealer that is both equitable and profitable.</p>
					</div>
					<div class="col-md-6">
						<img src="images/artists/ernesto/1.gif" alt="" style="max-height: 350px; display:inline;">
					</div>
				</div>				
			</div>
			<!-- main end -->

		</div>
	</div>
	<br>
	<br>
	<br>

	<!-- section start -->
	<!-- ================ -->
	{{-- <div class="light-gray-bg pv-20 section mt-20">
		<div class="container">
			<h4 class="mb-20">Our <strong>Team</strong></h4>
			<div class="row grid-space-10">
				<div class="col-sm-6 col-md-3">
					<div class="image-box team-member style-2 shadow bordered mb-20 text-center">
						<div class="overlay-container overlay-visible">
							<img src="images/team-member-1.jpg" alt="">
							<div class="overlay-bottom">
								<p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
							</div>
						</div>
						<div class="body">
							<h3 class="margin-clear">Jane Doe</h3>
							<small>CEO</small>
							<div class="separator mt-10"></div>
							<ul class="social-links circle colored margin-clear">
								<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
								<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
								<li class="xing"><a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="image-box team-member style-2 shadow bordered mb-20 text-center">
						<div class="overlay-container overlay-visible">
							<img src="images/team-member-2.jpg" alt="">
							<div class="overlay-bottom">
								<p class="small margin-clear">Ipsum dolor sit amet, consectetur adipisicing elit!</p>
							</div>
						</div>
						<div class="body">
							<h3 class="margin-clear">John Doe</h3>
							<small>CTO</small>
							<div class="separator mt-10"></div>
							<ul class="social-links circle colored margin-clear">
								<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
								<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
								<li class="xing"><a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="image-box team-member style-2 shadow bordered mb-20 text-center">
						<div class="overlay-container overlay-visible">
							<img src="images/team-member-3.jpg" alt="">
							<div class="overlay-bottom">
								<p class="small margin-clear">Dolor sit amet, praesentium consectetur adipisicing elit!</p>
							</div>
						</div>
						<div class="body">
							<h3 class="margin-clear">Anne Doe</h3>
							<small>Project Manager</small>
							<div class="separator mt-10"></div>
							<ul class="social-links circle colored margin-clear">
								<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
								<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
								<li class="xing"><a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="image-box team-member style-2 shadow bordered mb-20 text-center">
						<div class="overlay-container overlay-visible">
							<img src="images/team-member-4.jpg" alt="">
							<div class="overlay-bottom">
								<p class="small margin-clear">Voluptates praesentium nulla cupiditate explicabo!</p>
							</div>
						</div>
						<div class="body">
							<h3 class="margin-clear">Maria Doe</h3>
							<small>Designer</small>
							<div class="separator mt-10"></div>
							<ul class="social-links circle colored margin-clear">
								<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
								<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
								<li class="xing"><a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- section end -->
</section>
<!-- main-container end -->

@stop