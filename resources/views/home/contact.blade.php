<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Contact P2A Partners</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Icon Image -->
    <link rel="shortcut icon" href="images/logo.jpeg">
  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="bg-wrap">
							<div class="row">
								<div class="col-md-6 d-flex align-items-center">
									<p class="mb-0 phone pl-md-2">
										<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +221 78 581 35 66</a> 
										<a href="#"><span class="fa fa-paper-plane mr-1"></span> contact@p2apartners.com</a>
									</p>
								</div>
								<div class="col-md-6 d-flex justify-content-md-end">
									<div class="social-media">
						    		<p class="mb-0 d-flex">
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						    		</p>
					        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="/">
          <img src="images/logo.jpeg" width="100">
        </a>
	    	<form action="#" class="searchform order-sm-start order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item "><a href="/" class="nav-link">Accueil</a></li>
	        	<li class="nav-item"><a href="about" class="nav-link">A Propos</a></li>
	        	<li class="nav-item"><a href="services" class="nav-link">Services</a></li>
				<!--<li class="nav-item"><a href="cases" class="nav-link">Étude de cas</a></li>-->
				<li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
				<li class="nav-item active"><a href="contact" class="nav-link">Contact</a></li>
				@auth
					<li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Admin</a></li>
				@endauth
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Contactez-Nous</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Entrer en contact</h3>
									<div id="form-message-warning" class="mb-4"></div> 
									@if(Session::has('success'))
										<div class="alert alert-success" role="alert">
											{{ Session::get('success') }}
										</div>
									@elseif(Session::has('danger'))
										<div class="alert alert-danger" role="alert">
											{{ Session::get('danger') }}
										</div>
									@endif

									<form method="POST" action="{{ route('contactForm.store') }}" class="contactForm">
										@csrf
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Prénom et Nom</label>
													<input type="text" class="form-control" name="nom" placeholder="Nom complet" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Addresse Email</label>
													<input type="email" class="form-control" name="email" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Sujet</label>
													<input type="text" class="form-control" name="sujet" placeholder="Votre sujet" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<h3>Prenons contact</h3>
									<p class="mb-4">Nous sommes ouverts à toute suggestion ou simplement à discuter.</p>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Addresse:</span> Dakar, Senegal</p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><span>Telephone:</span> <a href="tel:+1234567920">+221 78 581 35 66</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
										<p><span>Email:</span> <a href="mailto:contact@p2apartners.com">contact@p2apartners.com</a></p>
									</div>
								</div>
								<div class="dbox w-100 d-flex align-items-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="text pl-3">
									<p><span>Site Web</span> <a href="/">p2apartners.com</a></p>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section>

   	<div id="map" class="map"></div>

   <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
      <div class="container py-5">
    		<div class="row">
          <div class="col-md-7 d-flex align-items-center">
            <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Inscrivez-vous pour votre 1ère consultation comptable gratuite</h2>
          </div>
          <div class="col-md-5 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
		<div class="container-fluid px-lg-5">
			<div class="row">
				<div class="col-md-9 py-5">
					<div class="row">
						<div class="col-md-4 mb-md-0 mb-4">
							<h2 class="footer-heading">À propos de nous</h2>
							<p>Cabinet d’expertise comptable, d’audit et de conseils engagé aux côtés des chefs d’entreprise, PME/PMI, organisations à but non lucratif et associations.</p>
							<ul class="ftco-footer-social p-0">
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
							</ul>
						</div>
						<div class="col-md-8">
							<div class="row justify-content-center">
								<div class="col-md-12 col-lg-10">
									<div class="row">
										<div class="col-md-6 mb-md-0 mb-4">
											<h2 class="footer-heading">Services</h2>
											<ul class="list-unstyled">
												<li><a href="services#comptabiblite" class="py-1 d-block">Comptabilité</a></li>
												<li><a href="services#fiscalite" class="py-1 d-block">Fiscalité</a></li>
												<li><a href="services#assistance" class="py-1 d-block">Assistance Juridique</a></li>
												<li><a href="services#conseil" class="py-1 d-block">Conseil financier</a></li>
											</ul>
										</div>
										<div class="col-md-6 mb-md-0 mb-4">
											<h2 class="footer-heading">Découvrir</h2>
											<ul class="list-unstyled">
												<li><a href="about" class="py-1 d-block">Apropos</a></li>
												<li><a href="contact" class="py-1 d-block">Contract</a></li>
												<li><a href="blog" class="py-1 d-block">Blog</a></li>
												<li><a href="#" class="py-1 d-block">Politiques</a></li>
											</ul>
										</div>
										<!--<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Resources</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">Security</a></li>
												<li><a href="#" class="py-1 d-block">Global</a></li>
												<li><a href="#" class="py-1 d-block">Charts</a></li>
												<li><a href="#" class="py-1 d-block">Privacy</a></li>
											</ul>
										</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-md-5">
						<div class="col-md-12">
							<p class="copyright">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script>Tous droits réservés | Ce site est réalisé avec <i class="fa fa-heart" aria-hidden="true"></i> par <a href="https://bcmgroupe.com" target="_blank">bcmgroupe.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
					<h2 class="footer-heading">Free consultation</h2>
					<form action="#" class="form-consultation">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control submit px-3">Send A Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/google-map.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
    
  </body>
</html>