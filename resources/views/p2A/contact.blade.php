<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2A Partners - Contact</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Icon Image -->
    <link rel="shortcut icon" href="images/logo.jpeg">
	<!-- Google Recaptcha -->
	 <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    <style>
        .group:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .font-editorial {
            font-family: Georgia, serif;
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

    <!-- HEADER / NAVIGATION -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#0b131d] text-white">
        <div class="flex items-center space-x-2">
            <div class="text-blue-500 font-bold text-xl tracking-wider flex items-center">
                <img src="images/logo.jpeg" width="70">
                <!-- <svg class="w-8 h-8 mr-2" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
                <div class="leading-tight">
                    <span class="text-sm font-extrabold tracking-widest block">P2A</span>
                    <span class="text-[10px] tracking-widest text-gray-400 block">PARTNERS</span>
                </div> -->
            </div>
        </div>

        <!-- NAVIGATION PRINCIPALE AVEC MENUS DEROULANTS -->
        <nav class="hidden lg:flex items-center space-x-8 text-sm text-gray-300">
            
            <!-- Dropdown 1 : Qui nous accompagnons -->
            <div class="relative group py-2">
                <a href="index" class="hover:text-white flex items-center focus:outline-none py-1">
                    Qui nous accompagnons 
                    <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div class="dropdown-menu absolute top-full left-0 w-64 bg-[#0b131d] text-white shadow-2xl opacity-0 invisible transform -translate-y-2 transition-all duration-200 py-2 border border-gray-800 z-50">
                    <a href="servicesfinanciers" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Services financiers</a>
                    <a href="industriesetmines" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Industries & mines</a>
                    <a href="automobile" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Automobile</a>
                    <a href="telecometmultimedia" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Télécom & multimédia</a>
                    <a href="transportetlogistique" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Transport & logistique</a>
                    <a href="serviceaccompagnement" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Services</a>
                    <a href="ongetsecteur" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">ONG & secteur public</a>
                </div>
            </div>

            <!-- Dropdown 2 : Ce que nous faisons -->
            <div class="relative group py-2">
                <a href="service" class="hover:text-white flex items-center focus:outline-none py-1">
                    Ce que nous faisons 
                    <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div class="dropdown-menu absolute top-full left-0 w-72 bg-[#0b131d] text-white shadow-2xl opacity-0 invisible transform -translate-y-2 transition-all duration-200 py-2 border border-gray-800 z-50">
                    <a href="expertisecomptable" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Expertise comptable</a>
                    <a href="audit" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Audit & commissariat aux comptes</a>
                    <a href="fiscalité" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Fiscalité & conformité</a>
                    <a href="conseiletorganisation" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Conseil & organisation</a>
                    <a href="paieetsocial" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Paie & social</a>
                    <a href="conseilfinancier" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Conseil Financier</a>
                    <a href="assistancejuridique" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Assistance Juridique</a>
                </div>
            </div>

            <!-- Dropdown 3 : Qui nous sommes -->
            <div class="relative group py-2">
                <a href="apropos" class="hover:text-white flex items-center focus:outline-none py-1">
                    Qui nous sommes 
                    <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div class="dropdown-menu absolute top-full left-0 w-56 bg-[#0b131d] text-white shadow-2xl opacity-0 invisible transform -translate-y-2 transition-all duration-200 py-2 border border-gray-800 z-50">
                    <a href="apropos" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Qui nous sommes</a>
                    <a href="carrières" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Carrières</a>
                </div>
            </div>

            <a href="insights" class="hover:text-white">Insights</a>
            <a href="actualites" class="hover:text-white">Actualités</a>
            <a href="contact" class="hover:text-white">Contact</a>
        </nav>

        <div class="flex items-center space-x-4">
            <span class="text-xs text-gray-300"><strong class="text-white">FR</strong> | EN</span>
        </div>
    </header>

    <!-- HERO SECTION CONTACT (Image complète avec overlay sombre opacifié) -->
    <section class="relative px-6 lg:px-16 py-24 overflow-hidden text-white">
        <!-- Image complète en fond -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1600&q=80" alt="Background Contact" class="w-full h-full object-cover object-center">
            <!-- Calque de couleur sombre avec opacité -->
            <div class="absolute inset-0 bg-[#070d14]/85"></div>
        </div>

        <!-- Contenu du Hero -->
        <div class="relative z-10 max-w-4xl">
            <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-3">CONTACT</p>
            <h1 class="font-editorial text-4xl sm:text-6xl lg:text-7xl font-normal leading-[1.1] mb-6">
                Parlons de votre organisation
            </h1>
            <p class="text-lg lg:text-xl text-gray-300 font-light max-w-2xl leading-relaxed">
                Présentez-nous brièvement votre contexte. Nous vous répondrons pour préciser le besoin et convenir d'un premier échange.
            </p>
        </div>
    </section>

    <!-- SECTION PRINCIPALE AVEC COORDONNÉES ET FORMULAIRE -->
    <section class="px-6 lg:px-16 py-16 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- COLONNE GAUCHE : COORDONNÉES AVEC TRAITS -->
            <div class="lg:col-span-5 flex flex-col space-y-6 pr-0 lg:pr-8">
                <!-- Adresse -->
                <div class="pb-6 border-b border-gray-300">
                    <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase block mb-2">ADRESSE</span>
                    <p class="text-sm text-gray-800 font-medium leading-relaxed">Villa n° 90, Sacré-Cœur 3<br>Dakar, Sénégal</p>
                </div>

                <!-- Téléphone -->
                <div class="pb-6 border-b border-gray-300">
                    <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase block mb-2">TÉLÉPHONE</span>
                    <p class="text-sm text-gray-800 font-medium leading-relaxed">+221 78 581 35 66 / +221 77 801 22 82</p>
                </div>

                <!-- Email -->
                <div class="pb-6 border-b border-gray-300">
                    <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase block mb-2">EMAIL</span>
                    <p class="text-sm text-gray-800 font-medium leading-relaxed">contact@p2apartners.com</p>
                </div>

                <!-- Horaires -->
                <div class="pb-6 border-b border-gray-300">
                    <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase block mb-2">HORAIRES</span>
                    <p class="text-sm text-gray-800 font-medium leading-relaxed">Du lundi au vendredi, de 08h à 17h</p>
                </div>

                <!-- Image illustrative sous les infos -->
                <div class="pt-2">
                    <div class="h-48 rounded overflow-hidden shadow-sm">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Équipe P2A Partners" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- COLONNE DROITE : FORMULAIRE DE CONTACT -->
            <div class="lg:col-span-7 bg-gray-50 p-8 border border-gray-200">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('danger') }}
                    </div>
                @endif
                <form action="{{ route('contactForm.store') }}" method="POST" class="space-y-6">
					@csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 uppercase mb-2">Nom complet</label>
                            <input type="text" name="nom" required class="w-full bg-white border border-gray-300 rounded px-4 py-3 text-sm focus:outline-none focus:border-blue-600">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 uppercase mb-2">Entreprise</label>
                            <input type="text" name="company" class="w-full bg-white border border-gray-300 rounded px-4 py-3 text-sm focus:outline-none focus:border-blue-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 uppercase mb-2">Email professionnel</label>
                            <input type="email" name="email" required class="w-full bg-white border border-gray-300 rounded px-4 py-3 text-sm focus:outline-none focus:border-blue-600">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 uppercase mb-2">Téléphone</label>
                            <input type="tel" name="phone" class="w-full bg-white border border-gray-300 rounded px-4 py-3 text-sm focus:outline-none focus:border-blue-600">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-700 uppercase mb-2">Service recherché</label>
                        <select name="sujet" class="w-full bg-white border border-gray-300 rounded px-4 py-3 text-sm focus:outline-none focus:border-blue-600">
                            <option value="Expertise comptable">Expertise comptable</option>
                            <option value="Audit & commissariat aux comptes">Audit & commissariat aux comptes</option>
                            <option value="Fiscalité & conformité">Fiscalité & conformité</option>
                            <option value="Conseil & organisation">Conseil & organisation</option>
                            <option value="Paie & social">Paie & social</option>
                            <option value="Conseil Financier">Conseil Financier</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-700 uppercase mb-2">Votre message</label>
                        <textarea rows="5" name="message" required class="w-full bg-white border border-gray-300 rounded px-4 py-3 text-sm focus:outline-none focus:border-blue-600" placeholder="Décrivez brièvement votre contexte..."></textarea>
                    </div>

                    <div class="flex items-start space-x-3">
                        <input type="checkbox" id="privacy" name="privacy" required class="mt-1">
                        <label for="privacy" class="text-xs text-gray-600 leading-relaxed">J'accepte que mes données soient utilisées pour répondre à ma demande.</label>
                    </div>

                    <div class="flex items-start space-x-3">
                        <label class="label" for="#">RECAPTCHA</label>
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}" data-action="LOGIN"></div>
                        @if($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="w-full bg-[#1e6091] hover:bg-[#15466d] text-white font-medium py-3 px-6 text-sm transition-colors shadow-sm">
                            Envoyer la demande →
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0b131d] text-gray-300 px-6 lg:px-12 pt-16 pb-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div>
                <div class="text-blue-500 font-bold text-xl tracking-wider flex items-center mb-4">
                    <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span class="text-sm font-extrabold text-white">P2A PARTNERS</span>
                </div>
                <p class="text-xs text-gray-400 leading-relaxed">
                    Expertise Comptable, Audit et Conseils pour les organisations au Sénégal et partout dans le monde.
                </p>
            </div>
            <div>
                <h4 class="text-white text-sm font-semibold mb-4">Ce que nous faisons</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="service" class="hover:text-white transition-colors">Expertise comptable</a></li>
                    <li><a href="service" class="hover:text-white transition-colors">Audit & commissariat aux comptes</a></li>
                    <li><a href="service" class="hover:text-white transition-colors">Fiscalité & conformité</a></li>
                    <li><a href="service" class="hover:text-white transition-colors">Conseil & organisation</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white text-sm font-semibold mb-4">Qui nous sommes</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="apropos" class="hover:text-white transition-colors">Qui nous sommes</a></li>
                    <li><a href="actualites" class="hover:text-white transition-colors">Actualités</a></li>
                    <li><a href="apropos" class="hover:text-white transition-colors">Carrières</a></li>
                    <li><a href="contact" class="hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white text-sm font-semibold mb-4">Dakar</h4>
                <p class="text-xs text-gray-400 leading-relaxed mb-2">
                    Villa n° 90, Sacré-Cœur 3<br>
                    Dakar, Sénégal<br>
                    contact@p2apartners.com
                </p>
                <p class="text-xs text-blue-400 font-semibold">Membre de l'ONECCA</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pt-8 border-t border-gray-800 flex flex-col sm:flex-row justify-between items-center text-xs text-gray-500">
            <p>&copy; 2026 P2A Partners. Tous droits réservés.</p>
            <div class="flex space-x-6 mt-4 sm:mt-0">
                <a href="#" class="hover:text-gray-400 transition-colors">Mentions légales</a>
                <a href="#" class="hover:text-gray-400 transition-colors">Confidentialité</a>
            </div>
        </div>
    </footer>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
</body>
</html>