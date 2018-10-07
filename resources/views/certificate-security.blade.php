@extends('layouts/main')
@section('title') {{'Sertificate Security'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="page-title-content">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<h1 class="page-title">Sertificate Security</h1>
		</div>
	</div>
</div>
<div class="content-block" style="background-color: #c3c3c3">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<img class="image-block" src="{{asset('imgs/sealed-diamond.jpeg')}}" alt="Sealed Diamond">
				</div>
				<div class="col-md-6">
					<div  class="information-content security-block-content text-left">
						<h4 class="information-title">Certified diamonds</h4>
						<p class="information-decription">The sealing of the diamond ensures that the diamond in it is genuine and that the laboratory bears the responsibility for authenticity and graduation specified on the attached certificate.<br><br>

						This is the standard at all 28 diamond exchanges in the world, at every jeweler and every diamond dealer. Nobody questions certified diamonds of HRD, GIA or IGI. An unopened seal guarantees its contents. In addition, the diamond laboratory creates a certificate, which in addition to the certificate number, contains all relevant data of the diamond. This clearly identifies the diamond.<br><br>

						With the certificate number can be checked online at any time, whether the corresponding diamond was really certified by this laboratory. In addition, the diamond in the “belt” is provided with the laser engraved certificate number. In this way, the diamond is unmistakably associated with the certificate and thus no longer exchangeable. All these safety and identification features guarantee the authenticity and quality of the diamond.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content-block bg-light">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div  class="information-content security-block-content text-left">
						<h4 class="information-title">CAs</h4>
						<p class="information-decription">It is important that certificates are issued only by professional and independent institutes. The most internationally recognized institutions include the Gemological Institute of America (GIA) and the Belgian Hoge Raad voor Diamant (HRD). The “Hoge Raad voor Diamant” is one of the largest European quality inspectors of diamonds based in Belgium, which enjoys a reputation as good as the GIA. There are other institutes that are also recognized, but sometimes interpret quality standards as less stringent than the GIA or the HRD (IDC standard).</p>
						<br>
						<img class="image-block" src="{{asset('imgs/gia-logo.png')}}" alt="Color image">
					</div>
				</div>
				<div class="col-md-12">
					<div  class="information-content security-block-content text-left">
						<h4 class="information-title">Contents of the Diamond Quality & Certificate of Authenticity</h4>
						<p class="information-decription">The certificate contains a detailed report on the characteristics of the acquired investment. The diamond graduation expertise of GIA and HRD contains the test result, which states that it is a natural diamond. Further data follows, which are explained in detail below:<br><br>
							<span class="sertificate-number">Certificate number</span>
							The certificate number is printed on the certificate and is awarded once.<br><br>
							<strong>Weight</strong><br><br>
						The weight of a diamond is always given in carats (ct) with two decimal places.
						Shape and mass : Here, precise information about shape, cut and mass of the stone are made, with the masses of the brilliant-cut form of the smallest and largest diameter, and the height is specified. The dimensions of the diamond are always given in millimeters and proportions in percentages.<br><br>
							<strong>Purity</strong><br><br>
						For the degree of purity, characteristics such as crystalline inclusions, coal inclusions, punctate inclusions or clouds, as well as fissures and other cracks or structural phenomena or the lack of transparency of the diamond are investigated. The purity grades are determined on a scale from “magnifying glass” to “piqué 3”, the scale has a total of ten stages. Lozenge-pure is a diamond if it contains no internal features in a test under ten times magnification.<br><br>

						Color Grading The color gamut ranges from top quality “very fine white +” (marked with the letter D) to the discernible tinted diamond (marked with letter Z). In between there are, among other things, the gradations “very fine white”, “fine white” and “tinted white”. Color grades D to I are considered ideal for investment purposes. The color of the diamond is assessed by at least two experts using a set of tested sample blocks.<br><br>
						<strong>Level of fluorescence</strong><br><br>
						Fluorescence occurs when using UV light: it is caused by the interaction of the UV radiant energy and the carbon atoms in the diamond. Strong fluorescence implies that the diamond has a lower value.<br><br>
						<strong>Cut; Proportions, symmetry and polish</strong><br><br>
						The “cut” is the proportions, the symmetry and the polish of a diamond. The cut is rated on a five-point scale between “excellent” and “low”. The proportions pay attention to how pronounced brilliance and fire are with the diamond. For example, if the diameter of the diamond is too small in relation to the total height, it lacks the brilliance (luminosity). This causes a reduction in the rating. Brilliants should be rated “very good” or better in this area.
						</p>
						<br>
						<img class="image-block" src="{{asset('imgs/certificat_gia_dossier.png')}}" alt="Certificate">
					</div>
				</div>
				<div class="col-md-12">
					<div  class="information-content security-block-content text-left">
						<h4 class="information-title">Safety</h4>
						<p class="information-decription">Reputable dealers ship their diamonds directly with a certificate to provide their customers with the highest level of confidence in diamond quality. We only offer diamonds which are certified. The costs are already included in the selling prices.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
