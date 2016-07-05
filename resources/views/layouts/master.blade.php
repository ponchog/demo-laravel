<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta name="google-site-verification" content="C0rfu7yAm4QgzmLAli4nMc1MFpNkNZ8VpzqUaVyR6h8" />
		<meta charset="utf-8">
		<title>Arte International | Home</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->
		<link rel="shortcut icon" href="/images/favicon-arte.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="/fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="/plugins/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="/css/animations.css" rel="stylesheet">
		<link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="/plugins/hover/hover-min.css" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="/css/style.css" rel="stylesheet" >

		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="/css/skins/light_blue.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="/css/custom.css" rel="stylesheet">

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-80178891-1', 'auto');
			ga('send', 'pageview');
		</script>
	
		@yield('topscript')
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans front-page transparent-header  ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed   clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix" style="text-align:center; padding: 5px 0 0 0;">

									<!-- logo -->
									<div id="logo" class="logo">
										{{-- <a href="index.html"><img id="logo_img" src="images/logo_light_blue.png" alt="The Project"></a> --}}
										{{-- <a href="index.html"><img id="logo_img" src="images/logo_1.png" style="height:65px;" alt="The Project"></a> --}}
										<a href="/"><img id="logo_img" src="/images/logos/logo_3.png" style="height:62px;" alt="Arte International"></a>
										<!-- <a href="/"><img id="logo_img" src="/images/logos/logo_3_old.png" style="height:78px;" alt="Arte International"></a> -->

										<!-- <span style="font-size:24px;">Arte International</span> -->
									</div>

									<!-- name-and-slogan -->
									<!-- <div class="site-slogan">
										The Business Of Art
									</div> -->
									
								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-9">
					
								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav ">													
													<li>
														<a href="/artists">Artists</a>
													</li>												

													<li>
														<a href="/about">About</a>
													</li>													

													<li class="dropdown ">
														<a href="" class="dropdown-toggle" data-toggle="dropdown">Our Services</a>
														<ul class="dropdown-menu">
															<li ><a href="/services/artists">For Artists</a></li>
															<li ><a href="/services/galleries">For Galleries</a></li>
															<li ><a href="/services/corporate">For Corporate Buyers</a></li>															
														</ul>
													</li>

													<li>
														<a href="/contact">Contact</a>
													</li>

												
												<!-- header dropdown buttons -->
												<div class="header-dropdown-buttons hidden-xs ">
													<ul class="social-links circle animated-effect-1" style="margin-top: 0px;">
														<li class="facebook"><a target="_blank" href="https://www.facebook.com/arteinternationalus"><i class="fa fa-facebook"></i></a></li>														
														<li class="instagram"><a target="_blank" href="https://www.instagram.com/arteinternational"><i class="fa fa-instagram"></i></a></li>														
													</ul>													
												</div>
												<!-- header dropdown buttons end-->
												
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->	
								</div>
								<!-- header-right end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->


			@yield('content')
		

			{{-- FOOTER MINIMAL START --}}
			
			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<footer id="footer" class="clearfix dark">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<div class="footer-content text-center padding-ver-clear">
										{{-- <div class="logo-footer"><img id="logo-footer" class="center-block" src="images/logo_light_blue.png" alt=""></div> --}}
										<div class="logo-footer"><span style="font-size:24px;">Arte International</span></div>
										<br>
										<p>Arte International supports emerging and established contemporary Latino artists by providing an array of services, resources, knowledge, and support for artists and galleries.</p>
										<ul class="list-inline mb-20">
											<li><i class="text-default fa fa-map-marker pr-5"></i>9901 IH 10 West Suite 777, San Antonio, TX 78230</li>
											<li><a href="tel:+1 (210) 600-4126" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>+1 (210) 600-4126</a></li>
											<li><a href="mailto:contact@arteinternationalus.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>contact@arteinternationalus.com</a></li>
										</ul>
										<ul class="social-links circle animated-effect-1 margin-clear">
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/arteinternationalus"><i class="fa fa-facebook"></i></a></li>											
											<li class="instagram"><a target="_blank" href="https://www.instagram.com/arteinternational"><i class="fa fa-instagram"></i></a></li>											
										</ul>
										<div class="separator"></div>
										<p class="text-center margin-clear">Copyright © 2016 <a target="_blank" href="#">Arte International</a>. All Rights Reserved</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

			</footer>
			<!-- footer end -->

			{{-- FOOTER MINIMAL END --}}			
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/plugins/modernizr.js"></script>

		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>			

		<!-- Isotope javascript -->
		<script type="text/javascript" src="/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="/plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="/plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="/plugins/jquery.validate.js"></script>

		<!-- Background Video -->
		<script src="/plugins/vide/jquery.vide.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="/plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/js/custom.js"></script>

		@yield('bottomscript')
	</body>
</html>
