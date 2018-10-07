@extends('layouts/main')
@section('title') {{'About Diamonds Color'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="page-title-content">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<h1 class="page-title">About Diamonds Color</h1>
		</div>
	</div>
</div>
<div class="content-block bg-light">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div  class="information-content color-block-content text-left">
						<h4 class="information-title">Color (The color of a diamond)</h4>
						<p class="information-decription">The diamond color grades begin with “D” (colorless) and claim the entire alphabet up to “Z” (clear coloring, usually yellowish, but also brown or other tones possible).<br><br>

						The best color of a diamond is the complete colorlessness. With an absolutely colorless diamond, white light penetrates the stone effortlessly and exits in the rainbow colors.<br><br>

						For investment purposes we only recommend diamonds of color classes D to I.</p>
						<br><br>
						<img class="image-block" src="{{asset('imgs/color-first.jpg')}}" alt="Color image">
					</div>
				</div>
				<div class="col-md-12">
					<div  class="information-content color-block-content text-left">
						<h4 class="information-title">Clarity (The purity of a diamond)</h4>
						<p class="information-decription">Most diamonds have very small natural features called inclusions. The smaller and smaller these inclusions are, the better the light can penetrate the stone.<br><br>

						The purity scale begins with a flawless (under 10X magnification no inclusions recognizable) and goes up to inclusions, which significantly reduce the brilliance and radiance of a diamond.<br><br>

						For investment purposes we recommend the highest purity levels from flawless to VVS2 (very, very slightly included).</p>
						<br><br>
						<img class="image-block" src="{{asset('imgs/color-second.jpg')}}" alt="Color image">
					</div>
				</div>
				<div class="col-md-12">
					<div  class="information-content color-block-content text-left">
						<h4 class="information-title">Cut (The cut of a diamond)</h4>
						<p class="information-decription">He should not be confused with the shape. A well-cut diamond, whatever its shape, reflects the incident light better. Consequently, he is more brilliant and has more fire.<br><br>

						A brilliant is a brilliant cut diamond with at least 56 facets plus a blackboard and a vertex (top of the stone).<br><br>

						So; Cut, cut and polish. The highest quality reaches a diamond with “Triple Excellent”, ie each excellent symmetry, cut and polish. The next level would be “Excellent, Excellent, very good”, then “Excellent, very good, very good” etc.<br><br>

						The most perfect cut Brilliant is a H & A, Hearts & Arrows cut diamond. A Hearts & Arrows pattern is obtained when the symmetry, angles and lengths of the facets are perfectly matched. From the crown (above) are 8 arrows and from the pavilion (below) eight hearts visible.<br><br>
						We only recommend excellent and very good cuts.</p>
					</div>
				</div>
				<div class="col-md-12">
					<div  class="information-content color-block-content text-left">
						<h4 class="information-title">Carat Weight</h4>
						<p class="information-decription">The term karat goes back to a natural unit of measure, the seeds of the carob tree. Originally diamonds were outweighed against this seed. Today, their weight is measured in metric masses, with one carat equaling one-fifth gram (0.2 g). A carat is divided into 100 points. For example, a diamond of 25 points equals a quarter karat (0.25 carats), a diamond of 50 points a half carat (0.50), and so on.<br><br>

						Basically, the bigger the diamond, the greater its rarity. This should be taken into account when making your decision.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
