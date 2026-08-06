<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Télécom & multimédia - P2A Partners</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .group:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Styles pour le menu mobile */
        .mobile-menu {
            max-height: 80vh;
            overflow-y: auto;
        }

        .mobile-submenu {
            border-left: 2px solid #0b131d;
            margin-left: 8px;
        }

        .mobile-submenu a {
            padding-left: 20px;
        }

        /* Animation du hamburger */
        button span {
            transition: all 0.3s ease-in-out;
        }

        /* Amélioration du scroll sur mobile */
        .mobile-menu::-webkit-scrollbar {
            width: 4px;
        }

        .mobile-menu::-webkit-scrollbar-thumb {
            background: #0b131d; 
            border-radius: 2px;
        }

        /* Overlay optionnel */
        .mobile-menu {
            position: absolute;
            top: 10%;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

    <!-- HEADER / NAVIGATION -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#ffff] text-[#0b131d]">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <a href="/" class="flex items-center space-x-2">
                <img src="images/logo.jpeg" width="70">
                <!-- <div class="text-center">
                    <span class="block font-bold tracking-widest text-lg">P2A</span>
                    <span class="block text-[10px] tracking-wider text-gray-400">PARTNERS</span>
                </div> -->
            </a>
        </div>

        <!-- NAVIGATION PRINCIPALE AVEC MENUS DEROULANTS -->
        @include('partials.navbar')

    </header>

    <!-- HERO SECTION TELECOM & MULTIMEDIA AVEC IMAGE DE FOND ET VOILE FAIBLE -->
    <section class="relative text-white py-24 px-6 lg:px-16 overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=1920&q=80');">
        <!-- Voile sombre à intensité faible sur la gauche (pour laisser deviner l'image technologique à droite) -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#0b131d] via-[#0b131d]/90 to-[#0b131d]/50"></div>

        <div class="max-w-5xl mx-auto relative z-10">
            <p class="text-xs uppercase tracking-widest text-gray-400 mb-4">Qui nous accompagnons</p>
            <h1 class="text-4xl lg:text-6xl font-serif mb-6">Télécom & multimédia</h1>
            <p class="text-lg lg:text-xl text-gray-300 font-light max-w-2xl">
                Volumes de transactions, revenus récurrents, investissements réseau et services numériques.
            </p>
        </div>
    </section>

    <!-- SECTION ENJEUX DU SECTEUR & NOTRE RÉPONSE -->
    <section class="py-20 px-6 lg:px-16 bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <!-- Colonne Enjeux -->
            <div>
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-6 font-semibold">Enjeux du secteur</p>
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <span class="text-xs text-gray-400 font-mono">01</span>
                        <h3 class="text-xl font-serif mt-1 text-gray-900">Reconnaissance et rapprochement des revenus</h3>
                    </div>
                    <div class="border-b border-gray-200 pb-6">
                        <span class="text-xs text-gray-400 font-mono">02</span>
                        <h3 class="text-xl font-serif mt-1 text-gray-900">Suivi des investissements technologiques</h3>
                    </div>
                    <div class="border-b border-gray-200 pb-6">
                        <span class="text-xs text-gray-400 font-mono">03</span>
                        <h3 class="text-xl font-serif mt-1 text-gray-900">Contrôle des transactions à fort volume</h3>
                    </div>
                </div>
            </div>

            <!-- Colonne Notre réponse -->
            <div class="bg-[#f9f8f6] p-10 border-l-4 border-[#0b131d]">
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-4 font-semibold">Notre réponse</p>
                <h2 class="text-2xl lg:text-3xl font-serif text-gray-900 leading-snug">
                    Nous sécurisons les flux financiers et les référentiels de données nécessaires au reporting des opérateurs télécoms et des entreprises multimédias.
                </h2>
            </div>

        </div>
    </section>

    <!-- SECTION APPEL À L'ACTION -->
    <section class="bg-[#1e40af] text-white py-20 px-6 lg:px-16">
        <div class="max-w-5xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-8">
            <div>
                <h2 class="text-3xl lg:text-4xl font-serif mb-3">Une question mérite un échange direct.</h2>
                <p class="text-gray-200 text-sm lg:text-base">Parlons de votre contexte, sans engagement.</p>
            </div>
            <div>
                <a href="contact" class="inline-block border border-white text-white px-6 py-3 text-sm font-medium hover:bg-white hover:text-blue-900 transition-colors">
                    Prendre rendez-vous &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0b131d] text-gray-400 py-16 px-6 lg:px-16 text-xs">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
            <div>
                <img src="images/logo.jpeg" width="70">
                <!-- <div class="text-white font-bold tracking-widest text-lg mb-4">P2A PARTNERS</div> -->
                <p class="text-gray-400 leading-relaxed">
                    Expertise Comptable, Audit et Conseils pour les organisations au Sénégal et partout dans le monde.
                </p>
            </div>
            <div>
                <p class="text-white font-semibold mb-4 uppercase tracking-wider">Ce que nous faisons</p>
                <ul class="space-y-2">
                    <li><a href="expertisecomptable" class="hover:text-white transition-colors">Expertise comptable</a></li>
                    <li><a href="audit" class="hover:text-white transition-colors">Audit & commissariat aux comptes</a></li>
                    <li><a href="fiscalité" class="hover:text-white transition-colors">Fiscalité & conformité</a></li>
                    <li><a href="conseiletorganisation" class="hover:text-white transition-colors">Conseil & organisation</a></li>
                </ul>
            </div>
            <div>
                <p class="text-white font-semibold mb-4 uppercase tracking-wider">Qui nous sommes</p>
                <ul class="space-y-2">
                    <li><a href="quinoussomme" class="hover:text-white transition-colors">Qui nous sommes</a></li>
                    <li><a href="actualites" class="hover:text-white transition-colors">Actualités</a></li>
                    <li><a href="carrières" class="hover:text-white transition-colors">Carrières</a></li>
                    <li><a href="contact" class="hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <p class="text-white font-semibold mb-4 uppercase tracking-wider">Dakar</p>
                <p class="leading-relaxed mb-4">Villa n° 90, Sacré-Cœur 3<br>Dakar, Sénégal<br>contact@p2apartners.com</p>
                <p class="text-gray-500">Membre de l'ONECCA</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center text-gray-500">
            <p>&copy; 2026 P2A Partners. Tous droits réservés.</p>
            <div class="space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-gray-400">Mentions légales</a>
                <a href="#" class="hover:text-gray-400">Confidentialité</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Créer le bouton hamburger pour mobile
            const nav = document.querySelector('nav');
            const navContainer = nav.parentElement;
            
            // Créer le bouton hamburger
            const hamburgerBtn = document.createElement('button');
            hamburgerBtn.className = 'lg:hidden flex flex-col items-center text-[#0b131d] justify-center w-10 h-10 space-y-1.5 focus:outline-none';
            hamburgerBtn.setAttribute('aria-label', 'Menu');
            hamburgerBtn.innerHTML = `
                <span class="block w-6 h-0.5 bg-[#0b131d] transition-all duration-300"></span>
                <span class="block w-6 h-0.5 bg-[#0b131d] transition-all duration-300"></span>
                <span class="block w-6 h-0.5 bg-[#0b131d] transition-all duration-300"></span>
            `;
            
            // Insérer le bouton avant la navigation
            navContainer.insertBefore(hamburgerBtn, nav);
            
            // Créer le menu mobile
            const mobileMenu = document.createElement('div');
            mobileMenu.className = 'mobile-menu lg:hidden hidden w-full mt-1 bg-[#ffff] text-[#0b131d] border-t border-gray-800';
            mobileMenu.innerHTML = `
                <div class="container mx-auto px-4 py-1 space-y-2">
                    <!-- Dropdown 1 : Qui nous accompagnons -->
                    <div class="mobile-dropdown">
                        <button class="mobile-dropdown-toggle w-full text-left text-sm hover: text-[#0b131d] py-2 flex items-center justify-between focus:outline-none">
                            <span>Qui nous accompagnons</span>
                            <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="mobile-submenu hidden pl-4 space-y-1">
                            <a href="servicesfinanciers" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Services financiers</a>
                            <a href="industriesetmines" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Industries & mines</a>
                            <a href="automobile" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Automobile</a>
                            <a href="telecometmultimedia" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Télécom & multimédia</a>
                            <a href="transportetlogistique" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Transport & logistique</a>
                            <a href="serviceaccompagnement" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Services</a>
                            <a href="ongetsecteur" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">ONG & secteur public</a>
                        </div>
                    </div>

                    <!-- Dropdown 2 : Ce que nous faisons -->
                    <div class="mobile-dropdown">
                        <button class="mobile-dropdown-toggle w-full text-left text-sm hover: bg-[#ffff] text-[#0b131d] py-2 flex items-center justify-between focus:outline-none">
                            <span>Ce que nous faisons</span>
                            <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="mobile-submenu hidden pl-4 space-y-1">
                            <a href="expertisecomptable" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Expertise comptable</a>
                            <a href="audit" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Audit & commissariat aux comptes</a>
                            <a href="fiscalité" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Fiscalité & conformité</a>
                            <a href="conseiletorganisation" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Conseil & organisation</a>
                            <a href="paieetsocial" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Paie & social</a>
                            <a href="conseilfinancier" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Conseil Financier</a>
                            <a href="assistancejuridique" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Assistance Juridique</a>
                        </div>
                    </div>

                    <!-- Dropdown 3 : Qui nous sommes -->
                    <div class="mobile-dropdown">
                        <button class="mobile-dropdown-toggle w-full text-left text-sm hover: bg-[#ffff] text-[#0b131d] py-2 flex items-center justify-between focus:outline-none">
                            <span>Qui nous sommes</span>
                            <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="mobile-submenu hidden pl-4 space-y-1">
                            <a href="apropos" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Qui nous sommes</a>
                            <a href="carrières" class="block px-3 py-2 text-xs bg-[#ffff] text-[#0b131d] hover:text-white hover:bg-gray-800 rounded transition-colors">Carrières</a>
                        </div>
                    </div>

                    <!-- Liens simples -->
                    <a href="insights" class="block text-sm bg-[#ffff] text-[#0b131d] hover:text-white py-2">Insights</a>
                    <a href="actualites" class="block text-sm bg-[#ffff] text-[#0b131d] hover:text-white py-2">Actualités</a>
                    <a href="contact" class="block text-sm bg-[#ffff] text-[#0b131d] hover:text-white py-2">Contact</a>
                </div>
            `;
            
            // Insérer le menu mobile après la navigation
            navContainer.appendChild(mobileMenu);
            
            // Gérer l'ouverture/fermeture du menu mobile
            hamburgerBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                
                // Animation du hamburger
                const spans = this.querySelectorAll('span');
                if (!mobileMenu.classList.contains('hidden')) {
                    spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                    spans[1].style.opacity = '0';
                    spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
                } else {
                    spans[0].style.transform = 'rotate(0) translate(0, 0)';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = 'rotate(0) translate(0, 0)';
                }
            });
        
            // Gérer l'ouverture/fermeture des sous-menus
            const dropdownToggles = mobileMenu.querySelectorAll('.mobile-dropdown-toggle');
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const submenu = this.nextElementSibling;
                    const icon = this.querySelector('svg');
                    
                    // Fermer tous les autres sous-menus
                    const allSubmenus = mobileMenu.querySelectorAll('.mobile-submenu');
                    allSubmenus.forEach(menu => {
                        if (menu !== submenu) {
                            menu.classList.add('hidden');
                            const parentIcon = menu.previousElementSibling.querySelector('svg');
                            if (parentIcon) {
                                parentIcon.style.transform = 'rotate(0)';
                            }
                        }
                    });
                    
                    // Ouvrir/fermer le sous-menu cliqué
                    submenu.classList.toggle('hidden');
                    icon.style.transform = submenu.classList.contains('hidden') ? 'rotate(0)' : 'rotate(180deg)';
                });
            });
        
                // Fermer le menu mobile lors du clic sur un lien
                const mobileLinks = mobileMenu.querySelectorAll('a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                        // Réinitialiser le hamburger
                        const spans = hamburgerBtn.querySelectorAll('span');
                        spans[0].style.transform = 'rotate(0) translate(0, 0)';
                        spans[1].style.opacity = '1';
                        spans[2].style.transform = 'rotate(0) translate(0, 0)';
                    });
                });
        });
    </script>
</body>
</html>