@extends('layouts/main')
@section('title') {{'Shipment & Storage'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="page-title-content">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<h1 class="page-title">Shipment & Storage</h1>
		</div>
	</div>
</div>
<div class="content-block" style="background-color: #c3c3c3">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<div  class="information-content development-block-content text-left">
						<h4 class="information-title">Transport</h4>
						<p class="information-decription">Sie können bei jedem Stein individuell wählen, wohin er geliefert werden soll. Bei Lieferung in Ihr Heimatland weist Ihre Rechnung ­ je nachdem wo dies steuerlich veranlagt und ob Sie eine natürliche oder juristische Person sind ­ ggf. die Schweizer Umsatzsteuer von derzeit 8% aus.</p>
						<h4 class="information-title">Aufbewahrung</h4>
						<p class="information-decription">Wenn Sie Ihren Diamanten im Hochsicherheits­-Zollfreilager im Kanton Zürich/Schweiz einlagern lassen, erhalten Sie Ihre Ware garantiert umsatzsteuerfrei. Außerdem ist sie dort ­ vom Schweizer Zoll bewacht vor unbefugtem Zugriff sicher und über ihren kompletten Zeitwert versichert.
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<img class="image-block" src="{{asset('imgs/sealed-diamond.jpeg')}}" alt="Sealed Diamond">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
