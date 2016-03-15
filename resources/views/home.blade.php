@extends('layouts.master')


@section('content')

<!-- banner start -->
<!-- ================ -->
{{-- <div class="banner clearfix">

	<!-- slideshow start -->
	<!-- ================ -->
	<div class="slideshow">
		
		<!-- slider revolution start -->
		<!-- ================ -->
		<div class="slider-banner-container">
			<div class="slider-banner-fullscreen">
				<ul class="slides">
					<!-- slide 1 start -->
					<!-- ================ -->
					<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Powerful Bootstrap Template">
					
					<!-- main image -->
					<img src="images/slider-fullscreen-slide-1.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
					
					<!-- Transparent Background -->
					<div class="tp-caption dark-translucent-bg"
						data-x="center"
						data-y="bottom"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="0">
					</div>

					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr stl xlarge_white"
						data-x="center"
						data-y="70"
						data-speed="200"
						data-easing="easeOutQuad"
						data-start="1000"
						data-end="2500"
						data-splitin="chars"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-splitout="chars">Inspiration
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfl str xlarge_white"
						data-x="center"
						data-y="70"
						data-speed="200"
						data-easing="easeOutQuad"
						data-start="2500"
						data-end="4000"
						data-splitin="chars"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-splitout="chars">Innovation
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption sfr stt xlarge_white"
						data-x="center"
						data-y="70"
						data-speed="200"
						data-easing="easeOutQuad"
						data-start="4000"
						data-end="6000"
						data-splitin="chars"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-splitout="chars"
						data-endspeed="400">Success
					</div>					

					<!-- LAYER NR. 4 -->
					<div class="tp-caption sft fadeout text-center large_white"
						data-x="center"
						data-y="70"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="6400"
						data-end="10000"><span class="logo-font">The <span class="text-default">Project</span></span> <br> Powerful Bootstrap Template
					</div>	

					<!-- LAYER NR. 5 -->
					<div class="tp-caption sfr fadeout"
						data-x="center"
						data-y="210"
						data-hoffset="-232"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="1000"
						data-end="5500"><span class="icon large circle"><i class="circle icon-lightbulb"></i></span>
					</div>

					<!-- LAYER NR. 6 -->
					<div class="tp-caption sfl fadeout"
						data-x="center"
						data-y="210"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="2500"
						data-end="5500"><span class="icon large circle"><i class="circle icon-arrows-ccw"></i></span>
					</div>

					<!-- LAYER NR. 7 -->
					<div class="tp-caption sfr fadeout"
						data-x="center"
						data-y="210"
						data-hoffset="232"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="4000"
						data-end="5500"><span class="icon large circle"><i class="circle icon-chart-line"></i></span>
					</div>

					<!-- LAYER NR. 8 -->
					<div class="tp-caption ZoomIn fadeout text-center tp-resizeme large_white"
						data-x="center"
						data-y="170"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="6400"
						data-end="10000"><div class="separator light"></div>
					</div>	

					<!-- LAYER NR. 9 -->
					<div class="tp-caption sft fadeout medium_white text-center"
						data-x="center"
						data-y="210"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="5800"
						data-end="10000"
						data-endspeed="600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam aliquid culpa offici, <br> tenetur fugiat dolorum sapiente eligendi...
					</div>

					<!-- LAYER NR. 10 -->
					<div class="tp-caption fade fadeout"
						data-x="center"
						data-y="bottom"
						data-voffset="100"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="2000"
						data-end="10000"
						data-endspeed="200">
						<a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
					</div>
					</li>
					<!-- slide 1 end -->

					<!-- slide 2 start -->
					<!-- ================ -->
					<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Premium HTML5 Bootstrap Theme">
					
					<!-- main image -->
					<img src="images/slider-fullscreen-slide-2.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

					<!-- Transparent Background -->
					<div class="tp-caption dark-translucent-bg"
						data-x="center"
						data-y="bottom"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="0">
					</div>

					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfb fadeout large_white"
						data-x="left"
						data-y="70"
						data-speed="500"
						data-start="1000"
						data-easing="easeOutQuad"
						data-end="10000"><span class="logo-font">The Project</span> <br> Premium HTML5 Bootstrap Theme
					</div>	

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfb fadeout text-left medium_white"
						data-x="left"
						data-y="200" 
						data-speed="500"
						data-start="1300"
						data-easing="easeOutQuad"
						data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-laptop"></i></span> 100% Responsive
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption sfb fadeout text-left medium_white"
						data-x="left"
						data-y="260" 
						data-speed="500"
						data-start="1600"
						data-easing="easeOutQuad"
						data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-check"></i></span> Bootstrap Based
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption sfb fadeout text-left medium_white"
						data-x="left"
						data-y="320" 
						data-speed="500"
						data-start="1900"
						data-easing="easeOutQuad"
						data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-gift"></i></span> Packed Full of Features
					</div>

					<!-- LAYER NR. 5 -->
					<div class="tp-caption sfb fadeout text-left medium_white"
						data-x="left"
						data-y="380" 
						data-speed="500"
						data-start="2200"
						data-easing="easeOutQuad"
						data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-hourglass"></i></span> Very Easy to Customize
					</div>

					<!-- LAYER NR. 6 -->
					<div class="tp-caption sfb fadeout small_white"
						data-x="left"
						data-y="450"
						data-speed="500"
						data-start="2500"
						data-easing="easeOutQuad"
						data-endspeed="600"><a href="#" class="btn btn-default btn-lg btn-animated">Purchase <i class="fa fa-cart-arrow-down"></i></a>
					</div>
					</li>
					<!-- slide 2 end -->
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
		<!-- slider revolution end -->

	</div>
	<!-- slideshow end -->

</div> --}}
<!-- banner end -->

{{-- <div id="page-start"></div> --}}



{{-- HOME VIDEO START --}}
<!-- banner start -->
<!-- ================ -->
<div class="banner clearfix">

	<!-- slideshow start -->
	<!-- ================ -->
	<div class="slideshow">
		
		<!-- slider revolution start -->
		<!-- ================ -->
		<div class="slider-banner-container">
			<div class="slider-banner-fullscreen">
				<ul class="slides">
					<!-- slide 2 start -->
					<!-- ================ -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">					
						<!-- main image -->							
						<img src="images/artists/cinthia/5.jpg" alt="slidebg2" data-bgposition="center"  data-bgrepeat="no-repeat" data-bgfit="cover">						

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sft fadeout large_white"
							data-x="left"
							data-y="450"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"><a href="/cinthia-nuez"><span style="font-size:44px;"><b>Cinthia Gonzalez</b></span> <br>Caballero Sol</a>
						</div>

						<!-- LAYER NR. 2 -->							

						<!-- LAYER NR. 3 -->						

						<!-- LAYER NR. 4 -->							

					</li>
					<!-- slide 2 end -->

					<!-- slide 1 start -->
					<!-- ================ -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">
					
						<!-- main image -->
						<img src="images/artists/ernesto/9.gif" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

						<!-- Transparent Background -->
						<!-- <div class="tp-caption dark-translucent-bg"
							data-x="center"
							data-y="bottom"
							data-speed="600"
							data-easing="easeOutQuad"
							data-start="0">
						</div> -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sft fadeout large_white"
							data-x="left"
							data-y="450"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"><a href="/ernesto-ibanez"><span style="font-size:44px;"><b>Ernesto Ibañez</b></span> <br>Tokyo Blues</a>
						</div>

						<!-- LAYER NR. 2 -->
						<!-- <div class="tp-caption ZoomIn fadeout large_white tp-resizeme"
							data-x="left"
							data-y="170"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1300"><div class="separator-2 light"></div>
						</div>	 -->

						<!-- LAYER NR. 3 -->
					<!-- 	<div class="tp-caption sfb fadeout medium_white"
							data-x="left"
							data-y="190"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"
							data-endspeed="600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam aliquid culpa offici, <br> tenetur fugiat dolorum sapiente eligendi...
						</div> -->

						<!-- LAYER NR. 4 -->
						<!-- <div class="tp-caption sfb fadeout small_white"
							data-x="left"
							data-y="300"
							data-speed="500"
							data-start="1600"
							data-easing="easeOutQuad"
							data-endspeed="600"><a href="#" class="btn btn-dark btn-animated">Read More <i class="fa fa-arrow-right"></i></a> <span class="pl-5 pr-5">or</span> <a href="page-contact.html" class="btn btn-default btn-animated">Contact Us <i class="fa fa-envelope"></i></a>
						</div> -->

						</li>
						<!-- slide 1 end -->

						

						<!-- slide 3 start -->
						<!-- ================ -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">					
							<!-- main image -->							
							<img src="images/artists/daniel/8b.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">						

							<!-- LAYER NR. 1 -->
							<div class="tp-caption sft fadeout large_white"
								data-x="left"
								data-y="450"
								data-speed="500"
								data-easing="easeOutQuad"
								data-start="1000"><a href="/ernesto-ibanez"><span style="font-size:44px;"><b>Daniel Escobedo</b></span> <br>Artwork 2</a>
							</div>

							<!-- LAYER NR. 2 -->							

							<!-- LAYER NR. 3 -->						

							<!-- LAYER NR. 4 -->							

						</li>
						<!-- slide 3 end -->

					</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
		<!-- slider revolution end -->

	</div>
	<!-- slideshow end -->

</div>
<!-- banner end -->

{{-- HOME VIDEO END --}}


<script type="text/javascript">
// $(function(){
// 	document.getElementById('vid1').addEventListener('loadedmetadata', function() {
// 	  this.currentTime = 50;
// 	}, false);
// });

</script>

@stop