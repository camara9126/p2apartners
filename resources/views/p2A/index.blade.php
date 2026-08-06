<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2A Partners - Qui nous accompagnons</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animation du menu déroulant */
        .group:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        /* Police éditoriale */
        .font-editorial {
            font-family: Georgia, serif;
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
        <div class="flex items-center space-x-2">
            <div class="text-blue-500 font-bold text-xl tracking-wider flex items-center">
                <!-- Logo SVG -->
                <!-- <svg class="w-8 h-8 mr-2" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg> -->
                <img src="images/logo.jpeg" width="70">
                <!-- <div class="leading-tight">
                    <span class="text-sm font-extrabold tracking-widest block">P2A</span>
                    <span class="text-[10px] tracking-widest text-gray-400 block">PARTNERS</span>
                </div> -->
            </div>
        </div>

        <!-- NAVIGATION PRINCIPALE AVEC MENUS DÉROULANTS -->
        @include('partials.navbar')

        
    </header>

    <!-- HERO SECTION -->
    <section class="relative px-6 lg:px-12 py-16 lg:py-24 bg-gradient-to-b from-[#0b131d] to-[#111c2a] overflow-hidden text-white">
        <div class="max-w-5xl">
            <p class="text-xs tracking-widest text-blue-400 uppercase mb-3">P2A PARTNERS</p>
            <h1 class="text-4xl sm:text-6xl font-editorial font-normal leading-tight mb-6">Qui nous accompagnons</h1>
            <p class="text-gray-300 text-base lg:text-lg max-w-2xl font-light">
                Une approche utile commence par la compréhension du modèle économique, des cycles et des exigences propres à chaque secteur.
            </p>
        </div>
    </section>

    <!-- SECTION LISTE DES SECTEURS (AVEC TRAITS DE SÉPARATION ET ANIMATION IMAGES) -->
    <section class="px-6 lg:px-12 py-12 bg-white">
        <div class="max-w-7xl mx-auto">

            <!-- Élément 1 -->
            <div class="py-8 border-t border-gray-300 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center group cursor-pointer">
                <div class="lg:col-span-3 overflow-hidden rounded shadow-sm">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=600&q=80" alt="Services financiers" class="w-full h-36 object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="lg:col-span-1 text-gray-400 font-mono text-sm">01</div>
                <div class="lg:col-span-4 text-2xl font-editorial text-gray-900 group-hover:text-blue-600 transition-colors">Services financiers</div>
                <div class="lg:col-span-3 text-sm text-gray-600">Banque, assurances et fintech : sécuriser les données, la conformité et le reporting.</div>
                <div class="lg:col-span-1 text-right">
                    <span class="inline-block transform transition-transform duration-300 group-hover:translate-x-2 text-xl">→</span>
                </div>
            </div>

            <!-- Élément 2 -->
            <div class="py-8 border-t border-gray-300 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center group cursor-pointer">
                <div class="lg:col-span-3 overflow-hidden rounded shadow-sm">
                    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=600&q=80" alt="Industries & mines" class="w-full h-36 object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="lg:col-span-1 text-gray-400 font-mono text-sm">02</div>
                <div class="lg:col-span-4 text-2xl font-editorial text-gray-900 group-hover:text-blue-600 transition-colors">Industries & mines</div>
                <div class="lg:col-span-3 text-sm text-gray-600">Coûts de production, stocks, investissements et contrôle des opérations.</div>
                <div class="lg:col-span-1 text-right">
                    <span class="inline-block transform transition-transform duration-300 group-hover:translate-x-2 text-xl">→</span>
                </div>
            </div>

            <!-- Élément 3 -->
            <div class="py-8 border-t border-gray-300 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center group cursor-pointer">
                <div class="lg:col-span-3 overflow-hidden rounded shadow-sm">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&w=600&q=80" alt="Automobile" class="w-full h-36 object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="lg:col-span-1 text-gray-400 font-mono text-sm">03</div>
                <div class="lg:col-span-4 text-2xl font-editorial text-gray-900 group-hover:text-blue-600 transition-colors">Automobile</div>
                <div class="lg:col-span-3 text-sm text-gray-600">Stocks, marges, pièces détachées et performance des réseaux de distribution.</div>
                <div class="lg:col-span-1 text-right">
                    <span class="inline-block transform transition-transform duration-300 group-hover:translate-x-2 text-xl">→</span>
                </div>
            </div>

            <!-- Élément 4 -->
            <div class="py-8 border-t border-gray-300 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center group cursor-pointer">
                <div class="lg:col-span-3 overflow-hidden rounded shadow-sm">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Télécom & multimédia" class="w-full h-36 object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="lg:col-span-1 text-gray-400 font-mono text-sm">04</div>
                <div class="lg:col-span-4 text-2xl font-editorial text-gray-900 group-hover:text-blue-600 transition-colors">Télécom & multimédia</div>
                <div class="lg:col-span-3 text-sm text-gray-600">Volumes de transactions, revenus récurrents, investissements réseau et services numériques.</div>
                <div class="lg:col-span-1 text-right">
                    <span class="inline-block transform transition-transform duration-300 group-hover:translate-x-2 text-xl">→</span>
                </div>
            </div>

            <!-- Élément 5 -->
            <div class="py-8 border-t border-gray-300 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center group cursor-pointer">
                <div class="lg:col-span-3 overflow-hidden rounded shadow-sm">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=600&q=80" alt="Transport & logistique" class="w-full h-36 object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="lg:col-span-1 text-gray-400 font-mono text-sm">05</div>
                <div class="lg:col-span-4 text-2xl font-editorial text-gray-900 group-hover:text-blue-600 transition-colors">Transport & logistique</div>
                <div class="lg:col-span-3 text-sm text-gray-600">Maîtriser les coûts, les actifs, les flux physiques et la rentabilité des opérations.</div>
                <div class="lg:col-span-1 text-right">
                    <span class="inline-block transform transition-transform duration-300 group-hover:translate-x-2 text-xl">→</span>
                </div>
            </div>

            <!-- Élément 6 -->
            <div class="py-8 border-t border-gray-300 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center group cursor-pointer">
                <div class="lg:col-span-3 overflow-hidden rounded shadow-sm">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80" alt="Services" class="w-full h-36 object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="lg:col-span-1 text-gray-400 font-mono text-sm">06</div>
                <div class="lg:col-span-4 text-2xl font-editorial text-gray-900 group-hover:text-blue-600 transition-colors">Services</div>
                <div class="lg:col-span-3 text-sm text-gray-600">Structurer la facturation, la trésorerie et le pilotage au rythme de la croissance.</div>
                <div class="lg:col-span-1 text-right">
                    <span class="inline-block transform transition-transform duration-300 group-hover:translate-x-2 text-xl">→</span>
                </div>
            </div>

            <!-- Élément 7 -->
            <div class="py-8 border-t border-b border-gray-300 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center group cursor-pointer">
                <div class="lg:col-span-3 overflow-hidden rounded shadow-sm">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80" alt="ONG & secteur public" class="w-full h-36 object-cover transform transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="lg:col-span-1 text-gray-400 font-mono text-sm">07</div>
                <div class="lg:col-span-4 text-2xl font-editorial text-gray-900 group-hover:text-blue-600 transition-colors">ONG & secteur public</div>
                <div class="lg:col-span-3 text-sm text-gray-600">Traçabilité des fonds, procédures, missions HACT et reddition des comptes.</div>
                <div class="lg:col-span-1 text-right">
                    <span class="inline-block transform transition-transform duration-300 group-hover:translate-x-2 text-xl">→</span>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION APPEL À L'ACTION -->
    <section class="bg-[#1e6091] text-white px-6 lg:px-12 py-16">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between items-center">
            <div class="mb-8 lg:mb-0 max-w-2xl">
                <p class="text-xs uppercase tracking-widest text-blue-200 mb-2">P2A PARTNERS</p>
                <h2 class="text-3xl lg:text-4xl font-editorial mb-4">Une question mérite un échange direct.</h2>
                <p class="text-blue-100 text-sm font-light">Parlons de votre contexte, sans engagement.</p>
            </div>
            <div>
                <a href="contact" class="inline-flex items-center border border-white px-6 py-3 text-sm font-medium hover:bg-white hover:text-[#1e6091] transition-colors">
                    Prendre rendez-vous →
                </a>
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


        <!-- Script JavaScript pour la gestion des menus déroulants sur mobile et desktop -->
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