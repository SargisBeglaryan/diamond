@extends('layouts/main')
@section('title') {{'Contact us'}} @endsection
@section('style')
    @parent
@endsection
@section("content")
<div class="page-title-content">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<h1 class="page-title">Contact us</h1>
		</div>
	</div>
</div>
<div class="content-block contact-us-block">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-7">
					<div class="contact-form">
						<div class="contact-form-content text-center">
							<h4 class="contact-form-title">Contact us</h4>
							<form action="" method="post" novalidate="novalidate">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="form-name">Your Name (required)</label>
			      						<input type="text" class="form-control" id="form-name" name="your-name" required>
										<div class="invalid-feedback">
									        Required
								      	</div>
									</div>
									<div class="form-group col-md-6">
										<label for="form-email">Your Email (required)</label>
			      						<input type="email" class="form-control" id="form-email" name="your-email" required>
										<div class="invalid-feedback">
									        Required
								      	</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="form-subject">Subject</label>
			      						<input type="text" class="form-control" id="form-subject" name="your-subject">
									</div>
									<div class="form-group col-md-6">
										<label for="form-phone">Subject</label>
			      						<input type="number" class="form-control" id="form-phone" name="your-phone">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label for="your-message">Your Message</label>
			    						<textarea class="form-control" id="your-message" rows="10"></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-secondary btn-lg btn-block">Send</button>
									</div>
								</div>
								<div class="diamond-alert alert alert-danger alert-dismissible fade show" role="alert">
									<i class="fa-lg fa fa-exclamation-triangle"></i>
									<strong>ONE OR MORE FIELDS HAVE AN ERROR. PLEASE CHECK AND TRY AGAIN!</strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div  class="information-content contact-block-content text-left">
						<p class="information-decription">
							<strong>Kontakt</strong>
						</p>
						<p class="information-decription">
							+41 76 476 66 66
						</p>
						<p class="information-decription">
							info@loewengart.ch
						</p>
						<p class="information-decription">
							LOEWENGART ist eine Marke/Angebot von LOUIS XIV International AG
						</p>
						<div class="social-icons-content">
							<ul class="social-icons-list">
								<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
