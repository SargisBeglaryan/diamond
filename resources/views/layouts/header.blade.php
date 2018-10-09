<header>
	<div class="container-fluid">
		<div class="row">
			<div class="fusion-secondary-header">
				<div class="row justify-content-md-center">
					<div class="col-md-10">
						<div class="fusion-contact-info">Call Us Today! 1.555.555.555<span class="fusion-header-separator">|</span><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="bg-white row justify-content-md-center">
			<div class="col-md-10">
				<div class="">
				<nav class="row navbar navbar-expand-lg navbar-light desctop-navigation">
					<div class="fusion-logo">
						<a class="diamond-logo-link" href="{{url('/')}}">
							<img src="{{asset('imgs/logo.png')}}" alt="logo">
						</a>
					</div>
			  		<div class="fusion-main-menu" id="navbarNav">
					    <ul id="menu-menu"  class="float-right navbar-nav">
					      <li class="nav-item  menu-item">
					        <a  href="{{url('/')}}" class="{{(Request::is('/')) ? 'active' : '' }}"><span>HOME</span></a>
					      </li>
					      <li class="nav-item menu-item  fusion-dropdown-menu">
					      	<a href="#" class="{{(Request::is('about-diamonds')) || (Request::is('color')) || (Request::is('certificate-security')) ? 'active' : '' }}"><span class="menu-text">DIAMONDS</span></a>
					      	<ul class="sub-menu">
								<li class="menu-item fusion-dropdown-submenu">
									<a href="{{url('about-diamonds')}}" class="fusion-bar-highlight"><span>About Diamonds</span></a>
								</li>
								<li class="menu-item fusion-dropdown-submenu"><a href="{{'color'}}" class="fusion-bar-highlight">
									<span>Color</span></a></li>
								<li class="menu-item fusion-dropdown-submenu">
									<a href="{{url('certificate-security')}}" class="fusion-bar-highlight">
										<span>Certificates &#038; Security</span></a>
								</li>
							</ul>
					      </li>
					      <li class="nav-item menu-item fusion-dropdown-menu">
					      	<a href="#" class="{{(Request::is('sustainability')) || (Request::is('brilliant-advantages')) || (Request::is('absolutely-immune-to-crises')) || (Request::is('development')) || (Request::is('buy-back')) || (Request::is('shipment')) ? 'active' : '' }}""><span>INVESTMENT DIAMONDS</span></a>
					      	<ul class="sub-menu">
								<li class="menu-item fusion-dropdown-submenu">
									<a href="{{url('sustainability')}}" class="fusion-bar-highlight">
									<span>Invest Sustainably</span></a>
								</li>
								<li class="menu-item fusion-dropdown-submenu"><a href="{{'brilliant-advantages'}}" class="fusion-bar-highlight">
									<span>Brilliant advantages</span></a></li>
								<li class="menu-item fusion-dropdown-submenu">
									<a href="{{url('absolutely-immune-to-crises')}}" class="fusion-bar-highlight">
									<span>Absolutely immune to crises</span></a>
								</li>
								<li class="menu-item fusion-dropdown-submenu">
									<a href="{{url('development')}}" class="fusion-bar-highlight">
									<span>Development</span></a>
								</li>
								<li class="menu-item fusion-dropdown-submenu">
									<a href="{{url('shipment')}}" class="fusion-bar-highlight">
									<span>Shipment &#038; Storage</span></a>
								</li>
								<li class="menu-item fusion-dropdown-submenu">
									<a href="{{url('buy-back')}}" class="fusion-bar-highlight">
									<span>Diamond buy-back</span></a>
								</li>
							</ul>
					      </li>
					      <li class="nav-item  menu-item">
					        <a  class="{{(Request::is('events')) ? 'active' : '' }}" href="{{url('events')}}"><span>EVENTS</span></a>
					      </li>
					      <li class="nav-item  menu-item">
					        <a  class="{{(Request::is('about')) ? 'active' : '' }}" href="{{url('about')}}"><span>ABOUT US</span></a>
					      </li>
					      <li class="nav-item  menu-item">
					        <a class="{{(Request::is('contact')) ? 'active' : '' }}" href="{{url('contact')}}"><span>CONTACT US</span></a>
					      </li>
					    </ul>
				  	</div>
				</nav>
				<nav class="row navigation-mobile navbar navbar-expand-lg navbar-light">
					<a class="diamond-logo-link" href="{{url('/')}}">
						<img src="{{asset('imgs/logo.png')}}" alt="logo">
					</a>
				  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a  class="nav-link" href="{{url('/')}}"><span class="menu-text">Home</span></a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="diamonds" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Diamonds
				        </a>
				        <div class="dropdown-menu" aria-labelledby="diamonds">
				          <a class="dropdown-item" href="{{url('about-diamonds')}}">About Diamonds</a>
				          <a class="dropdown-item" href="{{url('color')}}">Color</a>
				          <a class="dropdown-item" href="{{url('certificate-security')}}">Certificates &#038; Security</a>
				        </div>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="invest-diamonds" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          INVESTMENT DIAMONDS
				        </a>
				        <div class="dropdown-menu" aria-labelledby="invest-diamonds">
				          <a class="dropdown-item" href="{{url('sustainability')}}">Invest Sustainably</a>
				          <a class="dropdown-item" href="{{url('brilliant-advantages')}}">Brilliant advantages</a>
				          <a class="dropdown-item" href="{{url('development')}}">Development</a>
				          <a class="dropdown-item" href="{{url('shipment')}}">Shipment &#038; Storage</a>
				          <a class="dropdown-item" href="{{url('buy-back')}}">Diamond buy-back</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a  class="nav-link" href="{{url('events')}}"><span class="menu-text">Events</span></a>
				      </li>
				      <li class="nav-item">
				        <a  class="nav-link" href="{{url('about')}}"><span class="menu-text">About us</span></a>
				      </li>
				      <li class="nav-item">
				        <a  class="nav-link" href="{{url('contact')}}"><span class="menu-text">Contact us</span></a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</div>
			</div>
		</div>
	</div>
</header>