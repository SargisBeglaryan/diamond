@extends('layouts/main')
@section('title') {{'Invest Sustainably'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="page-title-content">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<h1 class="page-title">Invest Sustainably</h1>
		</div>
	</div>
</div>
<div class="content-block bg-light">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div  class="information-content sustainability-block-content text-left">
						<p class="information-decription">The better the stone quality, the rarer the stone, the more stable the performance, the more positive the performance forecast. It goes without saying that we always offer you only the best stone qualities, up to the Hearts & Arrows Cut our love for quality and perfection knows no bounds.</p>
						<img class="image-block" src="{{asset('imgs/hearts-and-arrows-diamond.png')}}" alt="Hearts Diamond image"><br><br>
						<p class="information-decription">The supply is becoming increasingly scarce, the demand is steadily increasing, diamonds can be stored well and hardly lose value in times of crisis. In the medium and long term, investing in diamonds is an indispensable option. The past 50 years have shown a clear trend, namely constant upward. On average, a 1-carat of color D and purity IF has gained 14.47% per year over the past 50 years.<br><br>

						LOEWENGART is one of the few suppliers of investment diamonds to have access to a constantly updated and publicly accessible price list of diamonds of different sizes and qualities. This feature is essential and of great benefit to our customers – the price determination for a stone is not alone with us, our customers can always inform independently.<br><br>

						If the diamond is stored directly at the time of purchase in a bonded warehouse (duty-free warehouse), no sales tax is payable on the purchase price.<br><br>

						We offer our customers optional custody in the high security bonded warehouse in the canton of Zurich / Switzerland. Its assets are therefore taxable in neutral Switzerland, outside the NATO alliance area, in the immediate vicinity of the Swiss army, guarded by Swiss customs and regularly controlled by independent insurance experts. In our opinion, we achieve an optimum balance between tax advantages, storage costs and safety aspects.<br><br>

						Great opportunities; The demand for diamonds is increasing steadily – the supply is not. Especially in emerging markets such as the BRICS countries (Brazil, Russia, India, China, South Africa), there is a significant increase in demand. Industry experts agree that this will lead to a sustained price increase for diamonds.</p>
						<img class="image-block" src="{{asset('imgs/diamantpreis.png')}}" alt="Diamantpreis">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
