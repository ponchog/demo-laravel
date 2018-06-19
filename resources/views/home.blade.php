@extends('layouts.master')

@section('content')

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
					<!-- slide 1 start -->
					{{-- <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">
						<img src="/images/misc/solo_exhibition.jpg" alt="exhibition" data-bgposition="center"  data-bgrepeat="no-repeat" data-bgfit="contain">
					</li> --}}

					<!-- slide 2 start -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">
						<!-- main image -->
						<img src="/images/artists/patricia/2.jpg" alt="slidebg2" data-bgposition="50% 25%"  data-bgrepeat="no-repeat" data-bgfit="cover">

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sft fadeout large_white"
							data-x="right"
							data-y="450"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"><a href="/artists/patricia-sanchez-saiffe"><span style="font-size:44px;"><b>Patricia Sánchez Saiffe</b></span> <br>Al Alba</a>							
						</div>
					</li>

					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">
						<!-- main image -->
						<img src="/images/artists/ernesto/banner_1.gif" alt="slidebg2" data-bgposition="center"  data-bgrepeat="no-repeat" data-bgfit="contain">

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sft fadeout large_white"
							data-x="left"
							data-y="450"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"><a href="/artists/ernesto-ibanez"><span style="font-size:44px; color: #333;"><b>Ernesto Ibañez</b></span><br><span style="color: #333;">Curcuma</span></a>
						</div>
					</li>

					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">					
						<!-- main image -->
						<img src="/images/artists/daniel/8b.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">						

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sft fadeout large_white"
							data-x="left"
							data-y="450"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"><a href="/artists/daniel-escobedo"><span style="font-size:44px;"><b>Daniel Escobedo</b></span> <br>Answers</a>
						</div>
					</li>

					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">
						<!-- main image -->
						<img src="/images/artists/cinthia/Diana_29.13x23.6_oleo_on_wood.jpg" alt="slidebg2" data-bgposition="50% 65%"  data-bgrepeat="no-repeat" data-bgfit="cover">

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sft fadeout large_white"
							data-x="left"
							data-y="450"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"><a href="/artists/cinthia-nuez"><span style="font-size:44px;"><b>Cinthia Nuez</b></span> <br>Diana</a>
						</div>
					</li>

					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">
						<!-- main image -->
						<img src="/images/artists/fernando/viendo_las_nubes_GraphiteOnPaper_30x22in_2016.jpg" alt="slidebg2" data-bgposition="50% 75%"  data-bgrepeat="no-repeat" data-bgfit="cover">						

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sft fadeout large_white"
							data-x="left"
							data-y="450"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"><a href="/artists/fernando-andrade"><span style="font-size:44px;"><b>Fernando Andrade</b></span><br>Viendo las nubes</a>							
						</div>
					</li>

					<!-- slide 5 start -->
					<!-- ================ -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">					
						<!-- main image -->
						<img src="/images/artists/pulse/Miaw51x59_mixmedia.jpg" alt="slidebg2" data-bgposition="center"  data-bgrepeat="no-repeat" data-bgfit="cover">						

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sft fadeout large_white"
							data-x="left"
							data-y="450"
							data-speed="500"
							data-easing="easeOutQuad"
							data-start="1000"><a href="/artists/pulse"><span style="font-size:44px;"><b>Pulse</b></span> <br>Miaw</a>
						</div>
					</li>
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