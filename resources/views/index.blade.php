@extends('layouts/main')
@section('title') {{'Home'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="container-fluid">
	<div class="row">
		<div class="slider-content position-relative">
			<div class="slide-background">
				<h1 class="content-title">NACHALTIG ANLEGEN</h1>
				<div class="slide-description">Sichere und transparente Geldanlagen, 
					<br> die dauerhaft funktionieren. </div>
			</div>
		</div>
	</div>
</div>
</div> </div>
<div class="content-block bg-white">
	<div class="bg-white row justify-content-md-center">
		<div class="col-md-10">
			<div class="row text-center">
				<div class="col-md-4">
					<h2 class="title-heading-center">
						<strong>ABOUT DIAMONDS</strong>
					</h2>
					<div class="fusion-text">
						<p>Asset security and attractive added value are compatible with each other; Diamonds are among the most valuable materials and have always been used not only as jewelry, but also for the storage and transportation of assets.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<h2 class="title-heading-center">
						<strong>COLOR OF DIAMOND</strong>
					</h2>
					<div class="fusion-text">
						<p>The diamond color grades begin with &#8220;D&#8221; (colorless) and claim the entire alphabet up to &#8220;Z&#8221; (clear coloring, usually yellowish, but also brown or other tones possible).
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<h2 class="title-heading-center">
						<strong>CERTIFICATES &amp; SECURITY</strong>
					</h2>
					<div class="fusion-text">
						<p>The sealing of the diamond ensures that the diamond in it is genuine and that the laboratory bears the responsibility for authenticity and graduation specified on the attached certificate.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="counter-block content-block">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row text-center">
				<div class="col-md-3">
					<div class="diamond-count">
						0
					</div>
					<div class="diamond-text">
						<strong>DIAMOND</strong>
					</div>
				</div>
				<div class="col-md-3">
					<div class="diamond-count">
						0
					</div>
					<div class="diamond-text">
						<strong>DIAMOND</strong>
					</div>
				</div>
				<div class="col-md-3">
					<div class="diamond-count">
						0
					</div>
					<div class="diamond-text">
						<strong>DIAMOND</strong>
					</div>
				</div>
				<div class="col-md-3">
					<div class="diamond-count">
						0
					</div>
					<div class="diamond-text">
						<strong>DIAMOND</strong>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content-block bg-white">
	<div class="bg-white row justify-content-md-center">
		<div class="col-md-10">
			<div class="row text-center">
				<div class="col-md-6">
					<img src="{{asset('imgs/Round-Brilliant-Cut-Diamonds-Grey.jpg')}}" alt="Diamond photo">
				</div>
				<div class="col-md-6">
					<div  class="information-content text-left">
						<h4 class="information-title">Discover the world of diamonds</h4>
						<p class="information-decription">Asset security and attractive added value are compatible with each other; Diamonds are among the most valuable materials and have always been used not only as jewelry, but also for the storage and transportation of assets.</p>
					</div>
					<div  class="information-content text-left">
						<h4 class="information-title">Our Philosophy</h4>
						<p class="information-decription">LOEWENGART is an association of experts from the diamond industry and the financial industry. It brings together two worlds that coexisted for many years without really interacting.
						<br>
						The mission of LOEWENGART is to provide a secure and transparent investment that works on a permanent basis. Our offer is aimed at private and institutional clients worldwide, who have a special need for security and discretion. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script>
	$(document).ready(function (){

	    $('.content-title').fadeIn(1500);
		setTimeout(
		  function() 
		  {
		    $('.slide-description').fadeIn(1400);
		    $('.content-title').addClass('change-position');
		  }, 2900);

		var counter = false;
		$(window).on('scroll', function(){
			if(counter) {
				return false;
			}
			var count = 0;
			var bodyScrollTop = $(document).scrollTop();
			if( bodyScrollTop + 400 >= $(".counter-block").offset().top){
				counter = true;
				var x = setInterval(function() {
	    			count++;
				    // If the count down is over, write some text 
				    if (count == 200) {
				        clearInterval(x);
				    }
				    $(".counter-block .diamond-count").text(count);
				}, 10);
			}
		});
	});
	
</script>
@endsection