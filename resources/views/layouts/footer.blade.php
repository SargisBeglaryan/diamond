<footer>
	@if(!Request::is('contact'))
	<div class="contact-form">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
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
							<button type="submit" class="submit-button btn btn-secondary btn-lg btn-block">Send</button>
						</div>
					</div>
					<div class="form-error-alert alert alert-danger alert-dismissible fade show" role="alert">
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
	</div>
	@endif

	<div class="diamond-footer-widget-area">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6">
					<div class="textwidget">
						<p class="text-light"><i class="fas fa-map-marker-alt"></i> Location</p>
						<h3 style="color:#fff;">8260 Stein am Rhein / Switzerland</h3>
					</div>
				</div>
				<div class="col-md-6">
					<h4 class="widget-title">Connect on Social Media</h4>
					<div class="diamond-social-networks">
						<ul class="diamond-social-networks-wrapper">
							<li><a class="diamond-social-network-icon"><i class="fab fa-facebook-f"></i></a></li>
							<li><a class="diamond-social-network-icon"><i class="fab fa-flickr"></i></a></li>
							<li><a class="diamond-social-network-icon"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a class="diamond-social-network-icon"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container footer-info-block">
			<div class="row text-center">
				<div class="col-md-12">
					<p class="adejiam-links">
						<a href="http://ajediam.diamonds/ajediam-diamonds-impressum.php">Impressum</a>   |   <a href="http://ajediam.diamonds/ajediam-diamonds-datenschutz.php">Datenschutz</a>
					</p>
				</div>
				<hr>
				<div class="col-md-12">
					Copyright - 2018 Diamond | All Rights Reserved 
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$( document ).ready( function() {

		$('.submit-button').on('click', function (event) {
			event.preventDefault();
			$('.form-error-alert').fadeIn(1000);
		});

		$('body').on('click', '.close', function(event) {
			event.preventDefault();
			event.stopPropagation();
			$('.form-error-alert').fadeOut(1000);

		});
	});
</script>
</footer>