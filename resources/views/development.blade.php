@extends('layouts/main')
@section('title') {{'Development'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="page-title-content">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<h1 class="page-title">Development</h1>
		</div>
	</div>
</div>
<div class="content-block" style="background-color: #c3c3c3">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<div  class="information-content development-block-content text-left">
						<h4 class="information-title">Entwicklung der Diamanten</h4>
						<p class="information-decription">Diamanten sind eine äusserst zuverlässige Wertanlage und haben eine nachgewiesene Erfolgsbilanz von stabil steigenden Preisen. Das Angebot wird immer knapper, die Nachfrage steigt stetig, zudem lassen sich Diamanten gut aufbewahren und verlieren in Krisenzeiten kaum an Wert. Mittel­ und langfristig ist eine Investition in Diamant eine unabdingbare Option. Die letzten 50 Jahren haben einen klaren Trend aufgezeigt ­ nämlich konstant aufwärts. Im Durchschnitt hat ein 1-­Karäter der Farbe D und der Reinheit IF in den letzten 50 Jahren 14,47% pro Jahr zugelegt.<br><br>

						Selbstverständlich begleiten und beraten wir Sie über den kompletten Investitionszyklus hinweg – über den Erwerb, die komplette Haltedauer bis hin zur Veräußerung Ihrer Diamanten. Mit diesem Full-­Service gelingt es uns, den Sachwert Diamant zum optimierten Wertspeicher mit positiver Wertentwicklungsprognose zu entwickeln.</p>
					</div>
				</div>
				<div class="col-md-6">
					<img class="image-block" src="{{asset('imgs/diamantpreis.png')}}" alt="Diamantpreis">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
