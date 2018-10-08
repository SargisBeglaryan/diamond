@extends('layouts/main')
@section('title') {{'About us'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="page-title-content">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<h1 class="page-title">About us</h1>
		</div>
	</div>
</div>
<div class="content-block" style="background-color: #c3c3c3">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<div  class="information-content about-block-content text-left">
						<h4 class="information-title">LOEWENGART</h4>
						<p class="information-decription">LOEWENGART besteht aus einem Zusammenschluss von Experten aus der Diamantbranche und der Finanzbranche. Wir bringen damit zwei Welten zusammen, die viele Jahre eine Koexistenz führten, ohne wirklich zu interagieren; jede für sich, mit ihren ganz eigenen Spielregeln.</p>
						<h4 class="information-title">Mission & Vision</h4>
						<p class="information-decription">Die Mission von LOEWENGART ist, eine sichere und transparente Geldanlage anzubieten, die dauerhaft funktioniert. Unsere Vision ist, Diamanten zum festen Bestandteileines jeden Anlageportfolios weltweit zu machen.<br><br>

						Ausschließlich GIA und HRD zertifizierte Steine der höchsten Qualität, Erwerb direkt von renommierten Diamant­Schleifereien und Weitergabe an unsere Kunden zu transparenten Preisen mit moderater Handelsspanne.
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<img class="image-block" src="{{asset('imgs/mision-vision.jpg')}}" alt="Mision">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content-block" style="background-color: #000;">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<img class="image-block" src="{{asset('imgs/diamantpreis.png')}}" alt="Diamantpreis"><br><br>
					<div  class="information-content about-block-content text-left">
						<h4 class="information-title text-light">Full-Service</h4>
						<p class="information-decription text-light">Selbstverständlich begleiten und beraten wir Sie über den kompletten Investitionszyklus hinweg – über den Erwerb, die komplette Haltedauer bis hin zur Veräußerung Ihrer Diamanten. Mit diesem Full­-Service gelingt es uns, den Sachwert Diamant zum optimierten Wertspeicher mit positiver Wertentwicklungsprognose zu entwickeln.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div  class="information-content about-block-content text-left">
						<h4 class="information-title text-light">Unsere Kunden</h4>
						<p class="information-decription text-light">Unser Angebot richtet sich an private und institutionelle Kunden weltweit, die ein besonders hohes Bedürfnis nach Sicherheit und Diskretion haben. Dabei erlaubt es unsere Unternehmensorganisation, vom Einkauf, über den Transport, die Verwahrung bis hin zum persönlichen Kundenservice, Anfragen von wenigen tausend Euro bis hin zu hohen Beträgen kurzfristig zu bedienen.<br><br>

						Egal, ob Sie als professioneller Vermögensverwalter auf der Suche nach Diversifikationsmöglichkeiten für Ihre Kundenportfolios sind, oder Sie sich als Privatanleger einfach einmal etwas Besonderes gönnen wollen – wir stellen für jeden Kunden eine individuelle Lösung bereit, die seinen Ansprüchen gerecht wird.<br><br>

						Durch unsere kompetenten Berater erhalten Sie eine exzellente Beratung und einen umfassenden Einblick in die Welt der Diamanten. Die von uns angebotenen Brillianten eignen sich optimal zur Wert­/Vermögenserhaltung und/oder als mittel­ bis langfristige Anlage. Gerne informieren wir Sie über die Vorteile von Investment Diamanten.<br><br>

						Wir haben ein breites Sortiment an Diamanten für jedes individuelle Bedürfnis an Lager und beraten Sie gerne, wenn es darum geht, einen passenden Diamanten zu erwerben und/oder ein Diamant­Portfolio zusammenzustellen.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg-light" style="height: 10px;">
</div>
@endsection
