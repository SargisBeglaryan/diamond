@extends('layouts/main')
@section('title') {{'About Diamonds'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="page-title-content">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<h1 class="page-title">About Diamonds</h1>
		</div>
	</div>
</div>
<div class="content-block bg-light">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<p>Asset security and attractive added value are compatible with each other; Diamonds are among the most valuable materials and have always been used not only as jewelry, but also for the storage and transportation of assets.<br><br>

					The diamond is the only gemstone in the world that consists of only one element, pure carbon. It took millions of years to grow to its uniqueness and purity. Diamonds have been fascinating for millennia. They are the smallest, lightest and the most concentrated form of wealth in the world.<br><br>

					Everyone wants them, some buy them, but mostly only as a piece of jewelry. However, diamonds are well suited as long term investment objects.<br><br>

					The supply of diamonds is becoming increasingly scarce, demand is rising steadily, and diamonds can be kept well and hardly lose any value in times of crisis. In the medium and long term, investing in diamonds is an indispensable option. The past 50 years have shown a clear trend, namely constant upward. On average, a 1-carat of color D and purity IF has gained 14.47% per year over the past 50 years.<br><br>

					In the future, it can be assumed that this trend will continue because demand from China and other emerging countries is rising rapidly. Added to this is the scarcity of the stones. New deposits are scarce, existing mines are almost exhausted and production is becoming increasingly expensive.</p>
				</div>
				<div class="col-md-6">
					<img class="image-block" src="{{asset('imgs/diamantpreis.png')}}" alt="Diametry">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content-block bg-secondary">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<div  class="information-content text-light text-left">
						<h4 class="information-title">Fascination</h4>
						<p class="information-decription">Diamonds fascinate, are favorite pieces, status symbols and value investment at the same time. The myth diamond lives. Why is that really so?<br><br>

						Diamonds are the oldest gems of our creation. Many were born in the fiery depths of the earth 3 billion years ago and most of them are already more than 100 million years old. Their sparkling power and their mysterious sparkle have always enchanted people. The ancient Greeks considered them splinters from fallen stars. Modern romantics see in their timeless beauty the symbol of pure immortality. Diamonds can only be cut by diamonds. Diamonds do not erode and scratch like other stones, so the statement is correct, diamonds are forever.<br><br>

						In order to be able to determine its value in principle, there are four criteria: the 4 Cs: Carat, Cut, Color and Clarity. In German: weight, cut, color and purity.</p>
					</div>
				</div>
				<div class="col-md-6">
					<img class="image-block" src="{{asset('imgs/Round-Brilliant-Cut-Diamonds-Grey.jpg')}}" alt="Diametry">
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
