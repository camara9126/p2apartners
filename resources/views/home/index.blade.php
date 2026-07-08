<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Accueil P2A Partners</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

    <div class="wrap py-1">
			<div class="container py-1">
				<div class="row">
					<div class="col-md-12">
						<div class="bg-wrap">
							<div class="row">
								<div class="col-md-6 d-flex align-items-center">
									<p class="mb-0 phone pl-md-2">
										<a href="tel:+221785813566" class="mr-2"><span class="fa fa-phone mr-1"></span> +221 78 581 35 66</a> 
										<a href="mailto:contact@p2apartners.com"><span class="fa fa-paper-plane mr-1"></span> contact@p2apartners.com</a>
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
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="/">
				<img src="images/logo.jpeg" width="100">
			</a>
	    	<!--<form action="#" class="searchform order-sm-start order-lg-last">
				<div class="form-group d-flex">
					<input type="text" class="form-control pl-3" data-translate-placeholder="search_placeholder" placeholder="Rechercher...">
					<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
				</div>
			</form>-->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="/" class="nav-link" data-translate="nav_accueil">Accueil</a></li>
				<li class="nav-item"><a href="about" class="nav-link" data-translate="nav_apropos">A Propos</a></li>
				<li class="nav-item"><a href="services" class="nav-link" data-translate="nav_services">Services</a></li>
				<li class="nav-item"><a href="blog" class="nav-link" data-translate="nav_blog">Blog</a></li>
				<li class="nav-item"><a href="contact" class="nav-link" data-translate="nav_contact">Contact</a></li>
				@auth
					<li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link" data-translate="nav_admin">Admin</a></li>
				@else
					<li class="nav-item"><a href="{{ route('login') }}" class="nav-link" data-translate="nav_admin">Connexion</a></li>
				@endauth
				<!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown">
						<i class="fas fa-globe"></i> <span id="current-lang">FR</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#" onclick="switchLang('fr')" id="btn-fr">Français</a></li>
						<li><a class="dropdown-item" href="#" onclick="switchLang('en')" id="btn-en">English</a></li>
					</ul>
				</li>-->
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/pierre\ ziz\ acc.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2 data-translate="header_expertise">Expertise Comptable</h2>
			            <h3 class="mb-4 text-white" data-translate="header_expertise_desc">Une tenue rigoureuse de vos comptes en normes SYSCOHADA et IFRS pour une visibilité totale sur votre activité</h3>
			            <p><a href="contact" class="btn btn-white" data-translate="header_btn">Connectez-vous avec nous</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(Img.p2a/1.png);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2 data-translate="header_audit">Audit & Assurance</h2>
			            <h3 class="mb-4 text-white" data-translate="header_audit_desc">Certification et fiabilisation de vos états financiers par des experts-comptables inscrits à l'Ordre</h3>
			            <p><a href="contact" class="btn btn-white" data-translate="header_btn">Connectez-vous avec nous</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(Img.p2a/12.png);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2 data-translate="header_conseil">Conseil Stratégique</h2>
			            <h3 class="mb-4 text-white" data-translate="header_conseil_desc">Optimisation fiscale, ingénierie financière et accompagnement à la levée de fonds pour propulser votre croissance</h3>
			            <p><a href="contact" class="btn btn-white" data-translate="header_btn">Connectez-vous avec nous</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
   	
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="heading-section pl-md-4 pt-md-5">
    					<span class="subheading" data-translate="why_subtitle">Bienvenu Chez P2APARTNERS</span>
	            <h2 class="mb-4" data-translate="why_title">Pourquoi nous choisir ?</h2>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wealth"></span></div>
    					<div class="text pl-4">
    						<h4 data-translate="why_vision">Vision Stratégique</h4>
    						<p data-translate="why_vision_desc">Nous ne nous contentons pas de saisir vos factures ; nous analysons vos données pour éclairer vos décisions</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accountant"></span></div>
    					<div class="text pl-4">
    						<h4 data-translate="why_agilite">Agilité Sectorielle</h4>
    						<p data-translate="why_agilite_desc">Une expertise adaptée aux PME, Start-ups, et organisations à but non lucratif</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-teamwork"></span></div>
    					<div class="text pl-4">
    						<h4 data-translate="why_securite">Sécurité et Conformité</h4>
    						<p data-translate="why_securite_desc">Une veille permanente sur la fiscalité et le droit social pour vous éviter tout risque réglementaire</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accounting"></span></div>
    					<div class="text pl-4">
    						<h4 data-translate="why_innovation">Innovation Digitale</h4>
    						<p data-translate="why_innovation_desc">Un cabinet moderne utilisant les meilleurs outils pour simplifier votre gestion quotidienne</p>
    					</div>
    				</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light ftco-no-pt">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-accounting-1"></span>
              </div>
              <div class="media-body">
                <h3 class="heading" data-translate="services_comptabilite">Comptabilité</h3>
                <p data-translate="services_comptabilite_desc">Nos experts vous proposent un service d’accompagnement comptable visant à garantir la régularité, la traçabilité et la qualité de l’information financière en normes locales en en normes internationales (IFRS).</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-tax"></span>
              </div>
              <div class="media-body">
                <h3 class="heading" data-translate="services_fiscalite">Fiscalité </h3>
                <p data-translate="services_fiscalite_desc">Nous proposons un accompagnement en matière fiscale visant à assurer la conformité de votre organisation avec les obligations légales en vigueur.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-loan"></span>
              </div>
              <div class="media-body">
                <h3 class="heading" data-translate="services_juridique">Assistance Juridique</h3>
                <p data-translate="services_juridique_desc">Nous accompagnons les porteurs de projets et les entreprises dans la gestion de leurs formalités juridiques, de la création jusqu’au suivi régulier de la vie sociale.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-budget"></span>
              </div>
              <div class="media-body">
                <h3 class="heading" data-translate="services_financier">Conseil financier</h3>
                <p data-translate="services_financier_desc">Nous proposons un accompagnement personnalisé en conseil financier afin de soutenir la prise de décision stratégique et la gestion optimale de vos ressources.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
                <span class="flaticon-budget"></span>
              </div>
              <div class="media-body">
                <h3 class="heading" data-translate="services_gestion">Conseil en gestion d’entreprise</h3>
                <p data-translate="services_gestion_desc">Nous proposons un accompagnement global en gestion d’entreprise visant à optimiser l’organisation, les processus opérationnels et la performance globale.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
                <span class="flaticon-budget"></span>
              </div>
              <div class="media-body">
                <h3 class="heading" data-translate="services_paie">Paie et RH</h3>
                <p data-translate="services_paie_desc">Nous offrons un service complet de gestion de la paie et des ressources humaines, garantissant la conformité avec la réglementation sociale en vigueur.</p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
    	<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
					<div class="text">
						<strong class="number" data-number="50">0</strong>
					</div>
					<div class="text">
						<span data-translate="counter_experience">Années d'expérience</span>
					</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
					<div class="text">
						<strong class="number" data-number="8500">0</strong>
					</div>
					<div class="text">
						<span data-translate="counter_cas">Cas terminés</span>
					</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
					<div class="text">
						<strong class="number" data-number="20">0</strong>
					</div>
					<div class="text">
						<span data-translate="counter_prix">Prix gagnés</span>
					</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
					<div class="text">
						<strong class="number" data-number="50">0</strong>
					</div>
					<div class="text">
						<span data-translate="counter_consultant">Consultant expert</span>
					</div>
					</div>
				</div>
			</div>
    	</div>
    </section>

    <!--<section class="ftco-section testimony-section bg-light">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Témoignages</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6">
    				<div class="img-faqs w-100">
	    				<div class="img mb-4 mb-sm-0" style="background-image:url(images/about-2.jpg);">
	    				</div>
	    				<div class="img img-2 mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);">
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 pl-lg-5">
    				<div class="heading-section mb-5 mt-5 mt-lg-0">
    					<span class="subheading">FAQs</span>
	            		<h2 class="mb-3" data-translate="faq_title">Foire aux questions</h2>
    				</div>
    				<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						  <div class="card">
						    <div class="card-header p-0" id="headingOne">
						      <h2 class="mb-0">
						        <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
						        	<p class="mb-0" data-translate="faq_q1">Proposez-vous du conseil en gestion d'entreprise ? </p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li data-translate="faq_a1_1">Oui, nous analysons vos performances pour optimiser vos coûts, </li>
						      		<li data-translate="faq_a1_2">améliorer votre rentabilité et structurer votre croissance</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingTwo" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
						        	<p class="mb-0" data-translate="faq_q2">Comment accompagnez-vous les entreprises en fiscalité ?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li data-translate="faq_q2_1">Nous gérons vos déclarations fiscales (TVA, IS)</li>
						      		<li data-translate="faq_q2_2">Optimisons votre stratégie pour garantir votre conformité tout en réduisant vos charges.</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingThree" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
						        	<p class="mb-0" data-translate="faq_q3">Proposez-vous une assistance en cas de contrôle fiscal ?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li data-translate="faq_a3">Absolument. Nous vous assistons et vous représentons auprès de l'administration pour sécuriser vos intérêts et vos droits.</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingFour" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
						        	<p class="mb-0" data-translate="faq_q4">En quoi consiste votre assistance juridique ?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<p data-translate="faq_a4">Nous vous aidons dans la rédaction de contrats, la création de sociétés et la sécurisation juridique de toutes vos transactions commerciales.</p>
						      </div>
						    </div>
						  </div>
						</div>
	        		</div>
        		</div>
    		</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading" data-translate="blog_subtitle">Actualitèe &amp; Blog</span>
            <h2 data-translate="blog_title">Dernières nouvelles de notre blog</h2>
          </div>
        </div>
        <div class="row d-flex">
			@foreach($posts->take(3) as $p)
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
					<a href="{{ route('article', $p->slug) }}" class="block-20 rounded" style="background-image: url('{{asset('storage/'.$p->image)}}');">
					</a>
					<div class="text p-4">
						<div class="meta mb-2">
						<div><a href="{{ route('article', $p->slug) }}">{{ $p->date}}</a></div>
						<div><a href="{{ route('article', $p->slug) }}">{{ $p->editeur}}</a></div>
						<div><a href="{{ route('article', $p->slug) }}" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="{{ route('article', $p->slug) }}">{{ $p->titre}}</a></h3>
					</div>
					</div>
				</div>
			@endforeach
        </div>
      </div>
    </section>
		

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
      <div class="container py-5">
    		<div class="row">
          <div class="col-md-7 d-flex align-items-center">
            <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;" data-translate="newsletter_title">Inscrivez-vous pour votre 1ère consultation comptable gratuite</h2>
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

    <!--<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Price &amp; Plans</span>
            <h2>Forfaits abordables</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<span class="excerpt d-block">Personal</span>
	            <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
	              <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Branding Services</li>
	              <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Sales Management</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Business</span>
	            <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
	              <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Branding Services</li>
	              <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Sales Management</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<span class="excerpt d-block">Ultimate</span>
	            <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
	              <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Branding Services</li>
	              <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Sales Management</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<span class="excerpt d-block">Premium</span>
	            <span class="price"><sup>$</sup> <span class="number">149</span> <sub>/mos</sub></span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
	              <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Branding Services</li>
	              <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Sales Management</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>-->

    <footer class="footer">
		<div class="container-fluid px-lg-5">
			<div class="row">
				<div class="col-md-9 py-5">
					<div class="row">
						<div class="col-md-4 mb-md-0 mb-4">
							<h2 class="footer-heading" data-translate="footer_about">À propos de nous</h2>
							<p data-translate="footer_about_desc">Cabinet d’expertise comptable, d’audit et de conseils engagé aux côtés des chefs d’entreprise, PME/PMI, organisations à but non lucratif et associations.</p>
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
											<h2 class="footer-heading" data-translate="footer_services">Services</h2>
											<ul class="list-unstyled">
												<li><a href="services#comptabiblite" class="py-1 d-block" data-translate="">Comptabilité</a></li>
												<li><a href="services#fiscalite" class="py-1 d-block" data-translate="">Fiscalité</a></li>
												<li><a href="services#assistance" class="py-1 d-block" data-translate="">Assistance Juridique</a></li>
												<li><a href="services#conseil" class="py-1 d-block" data-translate="">Conseil financier</a></li>
											</ul>
										</div>
										<div class="col-md-6 mb-md-0 mb-4">
											<h2 class="footer-heading" data-translate="footer_discover">Découvrir</h2>
											<ul class="list-unstyled">
												<li><a href="about" class="py-1 d-block" data-translate="footer_apropos">Apropos</a></li>
												<li><a href="contact" class="py-1 d-block" data-translate="footer_contact">Contract</a></li>
												<li><a href="blog" class="py-1 d-block" data-translate="">Blog</a></li>
												<li><a href="#" class="py-1 d-block" data-translate="footer_policies">Politiques</a></li>
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
					<h2 class="footer-heading" data-translate="footer_consultation">Free consultation</h2>
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
							<button type="submit" class="form-control submit px-3" data-translate="footer_send">Send A Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="script.js"></script>
  <script>
	// ============================================
		// DICTIONNAIRE COMPLET DES TRADUCTIONS
		// ============================================
		const translations = {
			fr: {
				// Navigation
				"nav_accueil": "Accueil",
				"nav_apropos": "A Propos",
				"nav_services": "Services",
				"nav_blog": "Blog",
				"nav_contact": "Contact",
				"nav_admin": "Connexion",
				
				// Header
				"header_expertise": "Expertise Comptable",
				"header_expertise_desc": "Une tenue rigoureuse de vos comptes en normes SYSCOHADA et IFRS pour une visibilité totale sur votre activité",
				"header_audit": "Audit & Assurance",
				"header_audit_desc": "Certification et fiabilisation de vos états financiers par des experts-comptables inscrits à l'Ordre",
				"header_conseil": "Conseil Stratégique",
				"header_conseil_desc": "Optimisation fiscale, ingénierie financière et accompagnement à la levée de fonds pour propulser votre croissance",
				"header_btn": "Connectez-vous avec nous",
				
				// Section "Pourquoi nous choisir ?"
				"why_title": "Pourquoi nous choisir ?",
				"why_subtitle": "Bienvenu Chez P2APARTNERS",
				"why_vision": "Vision Stratégique",
				"why_vision_desc": "Nous ne nous contentons pas de saisir vos factures ; nous analysons vos données pour éclairer vos décisions",
				"why_agilite": "Agilité Sectorielle",
				"why_agilite_desc": "Une expertise adaptée aux PME, Start-ups, et organisations à but non lucratif",
				"why_securite": "Sécurité et Conformité",
				"why_securite_desc": "Une veille permanente sur la fiscalité et le droit social pour vous éviter tout risque réglementaire",
				"why_innovation": "Innovation Digitale",
				"why_innovation_desc": "Un cabinet moderne utilisant les meilleurs outils pour simplifier votre gestion quotidienne",
				
				// Services
				"services_comptabilite": "Comptabilité",
				"services_comptabilite_desc": "Nos experts vous proposent un service d'accompagnement comptable visant à garantir la régularité, la traçabilité et la qualité de l'information financière en normes locales et internationales (IFRS).",
				"services_fiscalite": "Fiscalité",
				"services_fiscalite_desc": "Nous proposons un accompagnement en matière fiscale visant à assurer la conformité de votre organisation avec les obligations légales en vigueur.",
				"services_juridique": "Assistance Juridique",
				"services_juridique_desc": "Nous accompagnons les porteurs de projets et les entreprises dans la gestion de leurs formalités juridiques, de la création jusqu'au suivi régulier de la vie sociale.",
				"services_financier": "Conseil financier",
				"services_financier_desc": "Nous proposons un accompagnement personnalisé en conseil financier afin de soutenir la prise de décision stratégique et la gestion optimale de vos ressources.",
				"services_gestion": "Conseil en gestion d'entreprise",
				"services_gestion_desc": "Nous proposons un accompagnement global en gestion d'entreprise visant à optimiser l'organisation, les processus opérationnels et la performance globale.",
				"services_paie": "Paie et RH",
				"services_paie_desc": "Nous offrons un service complet de gestion de la paie et des ressources humaines, garantissant la conformité avec la réglementation sociale en vigueur.",
				
				// Compteurs
				"counter_experience": "Années d'expérience",
				"counter_cas": "Cas terminés",
				"counter_prix": "Prix gagnés",
				"counter_consultant": "Consultant expert",
				
				// FAQ
				"faq_title": "Foire aux questions",
				"faq_subtitle": "FAQs",
				"faq_desc": "Retrouvez les réponses aux questions les plus fréquemment posées sur nos services.",
				"faq_q1": "Proposez-vous du conseil en gestion d'entreprise ?",
				"faq_a1_1": "Oui, nous analysons vos performances pour optimiser vos coûts,",
				"faq_a1_2": "améliorer votre rentabilité et structurer votre croissance.",
				"faq_q2": "Comment accompagnez-vous les entreprises en fiscalité ?",
				"faq_a2_1": "Nous gérons vos déclarations fiscales (TVA, IS)",
				"faq_a2_2": "et optimisons votre stratégie pour garantir votre conformité tout en réduisant vos charges.",
				"faq_q3": "Proposez-vous une assistance en cas de contrôle fiscal ?",
				"faq_a3": "Absolument. Nous vous assistons et vous représentons auprès de l'administration pour sécuriser vos intérêts et vos droits.",
				"faq_q4": "En quoi consiste votre assistance juridique ?",
				"faq_a4": "Nous vous aidons dans la rédaction de contrats, la création de sociétés et la sécurisation juridique de toutes vos transactions commerciales.",
				
				// Blog
				"blog_title": "Dernières nouvelles de notre blog",
				"blog_subtitle": "Actualité & Blog",
				
				// Newsletter
				"newsletter_title": "Inscrivez-vous pour votre 1ère consultation comptable gratuite",
				"newsletter_placeholder": "Entrez votre adresse email",
				"newsletter_btn": "S'abonner",
				
				// Footer
				"footer_about": "À propos de nous",
				"footer_about_desc": "Cabinet d'expertise comptable, d'audit et de conseils engagé aux côtés des chefs d'entreprise, PME/PMI, organisations à but non lucratif et associations.",
				"footer_services": "Services",
				"footer_discover": "Découvrir",
				"footer_apropos": "A propos",
				"footer_contact": "Contact",
				"footer_policies": "Politiques",
				"footer_consultation": "Consultation gratuite",
				"footer_name": "Votre Nom",
				"footer_email": "Votre Email",
				"footer_subject": "Sujet",
				"footer_message": "Message",
				"footer_send": "Envoyer un message",
				"footer_copyright": "Tous droits réservés | Ce site est réalisé avec ❤️ par bcmgroupe.com",
				
				// Search
				"search_placeholder": "Rechercher..."
			},
			
			en: {
				// Navigation
				"nav_accueil": "Home",
				"nav_apropos": "About",
				"nav_services": "Services",
				"nav_blog": "Blog",
				"nav_contact": "Contact",
				"nav_admin": "Login",
				
				// Header
				"header_expertise": "Accounting Expertise",
				"header_expertise_desc": "Rigorous accounting management in SYSCOHADA and IFRS standards for complete visibility of your business",
				"header_audit": "Audit & Assurance",
				"header_audit_desc": "Certification and reliability of your financial statements by chartered accountants registered with the Order",
				"header_conseil": "Strategic Consulting",
				"header_conseil_desc": "Tax optimization, financial engineering, and fundraising support to propel your growth",
				"header_btn": "Connect with us",
				
				// Section "Pourquoi nous choisir ?"
				"why_title": "Why choose us?",
				"why_subtitle": "Welcome to P2APARTNERS",
				"why_vision": "Strategic Vision",
				"why_vision_desc": "We don't just record your invoices; we analyze your data to inform your decisions",
				"why_agilite": "Sector Agility",
				"why_agilite_desc": "Expertise tailored to SMEs, Start-ups, and non-profit organizations",
				"why_securite": "Security & Compliance",
				"why_securite_desc": "Continuous monitoring of tax and social law to prevent regulatory risks",
				"why_innovation": "Digital Innovation",
				"why_innovation_desc": "A modern firm using the best tools to simplify your daily management",
				
				// Services
				"services_comptabilite": "Accounting",
				"services_comptabilite_desc": "Our experts offer accounting support services to ensure regularity, traceability, and quality of financial information in local and international standards (IFRS).",
				"services_fiscalite": "Taxation",
				"services_fiscalite_desc": "We provide tax support to ensure your organization's compliance with current legal obligations.",
				"services_juridique": "Legal Assistance",
				"services_juridique_desc": "We support project leaders and companies in managing their legal formalities, from creation to regular monitoring of corporate life.",
				"services_financier": "Financial Consulting",
				"services_financier_desc": "We offer personalized financial consulting to support strategic decision-making and optimal resource management.",
				"services_gestion": "Business Management Consulting",
				"services_gestion_desc": "We provide comprehensive business management support to optimize organization, operational processes, and overall performance.",
				"services_paie": "Payroll & HR",
				"services_paie_desc": "We offer a complete payroll and human resources management service, ensuring compliance with current social regulations.",
				
				// Compteurs
				"counter_experience": "Years of experience",
				"counter_cas": "Cases completed",
				"counter_prix": "Awards won",
				"counter_consultant": "Expert consultants",
				
				// FAQ
				"faq_title": "Frequently Asked Questions",
				"faq_subtitle": "FAQs",
				"faq_desc": "Find answers to the most frequently asked questions about our services.",
				"faq_q1": "Do you offer business management consulting?",
				"faq_a1_1": "Yes, we analyze your performance to optimize costs,",
				"faq_a1_2": "improve profitability and structure your growth.",
				"faq_q2": "How do you support companies with taxation?",
				"faq_a2_1": "We manage your tax declarations (VAT, CIT)",
				"faq_a2_2": "and optimize your strategy to ensure compliance while reducing your costs.",
				"faq_q3": "Do you offer assistance during tax audits?",
				"faq_a3": "Absolutely. We assist and represent you before the administration to secure your interests and rights.",
				"faq_q4": "What does your legal assistance involve?",
				"faq_a4": "We help you draft contracts, create companies, and legally secure all your commercial transactions.",
				
				// Blog
				"blog_title": "Latest news from our blog",
				"blog_subtitle": "News & Blog",
				
				// Newsletter
				"newsletter_title": "Sign up for your free 1st accounting consultation",
				"newsletter_placeholder": "Enter your email address",
				"newsletter_btn": "Subscribe",
				
				// Footer
				"footer_about": "About Us",
				"footer_about_desc": "A firm of chartered accountants, auditors, and consultants committed to supporting business leaders, SMEs/SMIs, non-profit organizations, and associations.",
				"footer_services": "Services",
				"footer_discover": "Discover",
				"footer_apropos": "About",
				"footer_contact": "Contact",
				"footer_policies": "Policies",
				"footer_consultation": "Free consultation",
				"footer_name": "Your Name",
				"footer_email": "Your Email",
				"footer_subject": "Subject",
				"footer_message": "Message",
				"footer_send": "Send a Message",
				"footer_copyright": "All rights reserved | This site is made with ❤️ by bcmgroupe.com",
				
				// Search
				"search_placeholder": "Search..."
			}
		};

		// ============================================
		// FONCTION PRINCIPALE DE CHANGEMENT DE LANGUE
		// ============================================
		function switchLang(lang) {
			// Sauvegarder la préférence
			localStorage.setItem('preferredLanguage', lang);
			
			// Mettre à jour la langue du document
			document.documentElement.lang = lang;
			
			// Mettre à jour l'affichage du sélecteur de langue
			document.getElementById('current-lang').textContent = lang.toUpperCase();
			
			// Traduire tous les éléments avec data-translate
			document.querySelectorAll('[data-translate]').forEach(element => {
				const key = element.getAttribute('data-translate');
				if (translations[lang] && translations[lang][key]) {
					// Pour les éléments avec HTML (comme les liens)
					if (element.innerHTML.includes('<')) {
						// Conserver le HTML mais traduire le texte
						const textNode = element.childNodes[0];
						if (textNode && textNode.nodeType === 3) {
							textNode.textContent = translations[lang][key];
						} else {
							element.textContent = translations[lang][key];
						}
					} else {
						element.textContent = translations[lang][key];
					}
				}
			});
			
			// Traduire les placeholders
			document.querySelectorAll('[data-translate-placeholder]').forEach(element => {
				const key = element.getAttribute('data-translate-placeholder');
				if (translations[lang] && translations[lang][key]) {
					element.placeholder = translations[lang][key];
				}
			});
			
			// Mettre à jour les boutons actifs
			document.querySelectorAll('.lang-btn').forEach(btn => {
				btn.classList.remove('active');
				if (btn.id === 'btn-' + lang) {
					btn.classList.add('active');
				}
			});
			
			// Mettre à jour le texte des dropdown items
			document.querySelectorAll('.dropdown-item').forEach(item => {
				if (item.getAttribute('onclick') && item.getAttribute('onclick').includes("switchLang('" + lang + "')")) {
					item.classList.add('active');
				} else {
					item.classList.remove('active');
				}
			});
		}

		// ============================================
		// CHARGER LA LANGUE SAUVEGARDÉE
		// ============================================
		document.addEventListener('DOMContentLoaded', function() {
			const savedLang = localStorage.getItem('preferredLanguage') || 'fr';
			switchLang(savedLang);
		});
  </script>

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