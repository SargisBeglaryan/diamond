@extends('layouts/main')
@section('style')
    @parent
@endsection
@section("content")


<div role="form" class="wpcf7" id="wpcf7-f116-p11-o1" lang="en-US" dir="ltr">
<form action="/diamond/diamonds/#wpcf7-f116-p11-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="116" />
<input type="hidden" name="_wpcf7_version" value="5.0.4" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f116-p11-o1" />
<input type="hidden" name="_wpcf7_container_post" value="11" />
</div>
<div style="width:48%; float: left; margin-right:4%">
<label> Your Name (required)<br />
<span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label>
</div>
<div style="width:48%; float: left;">
<label> Your Email (required)<br />
<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label>
</div>
<div style="width:48%; float: left; margin-right:4%">
<label> Subject<br />
<span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label>
</div>
<div style="width:48%; float: left;">
<label> Phone Number<br />
<span class="wpcf7-form-control-wrap number-477"><input type="number" name="number-477" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" aria-invalid="false" /></span> </label>
</div>
<p><label> Your Message<br />
<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="fusion-alert alert custom alert-custom fusion-alert-center fusion-alert-capitalize alert-dismissable wpcf7-response-output wpcf7-display-none" style="background-color:;color:;border-color:;border-width:1px;"><button style="color:;border-color:;" type="button" class="close toggle-alert" data-dismiss="alert" aria-hidden="true">&times;</button><div class="fusion-alert-content-wrapper"><span class="fusion-alert-content"></span></div></div>
</form>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
				jQuery( document ).ready( function() {
					var ajaxurl = 'https://pakwebzone.com/diamond/wp-admin/admin-ajax.php';
					if ( 0 < jQuery( '.fusion-login-nonce' ).length ) {
						jQuery.get( ajaxurl, { 'action': 'fusion_login_nonce' }, function( response ) {
							jQuery( '.fusion-login-nonce' ).html( response );
						});
					}
				});
				</script>
	<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/pakwebzone.com\/diamond\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='https://pakwebzone.com/diamond/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.4'></script>
<!--[if IE 9]>
<script type='text/javascript' src='https://pakwebzone.com/diamond/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-ie9.js?ver=1'></script>
<![endif]-->
<script type='text/javascript' src='https://pakwebzone.com/diamond/wp-content/uploads/fusion-scripts/7dc1fa0c1486c2c80727466c563bb993.min.js?timestamp=1537560742'></script>
<script type='text/javascript' src='https://pakwebzone.com/diamond/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>

@endsection
