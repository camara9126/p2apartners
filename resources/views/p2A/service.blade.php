<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2A Partners - Ce que nous faisons</title>
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
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

    <!-- HEADER / NAVIGATION -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#ffff] text-[#0b131d]">
        <div class="flex items-center space-x-2">
            <div class="text-blue-500 font-bold text-xl tracking-wider flex items-center">
                <img src="images/logo.jpeg" width="70">
                <!-- Logo SVG -->
                <!-- <svg class="w-8 h-8 mr-2" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
                <div class="leading-tight">
                    <span class="text-sm font-extrabold tracking-widest block">P2A</span>
                    <span class="text-[10px] tracking-widest text-gray-400 block">PARTNERS</span>
                </div> -->
            </div>
        </div>

        <!-- NAVIGATION PRINCIPALE AVEC MENUS DÉROULANTS -->
        @include('partials.navbar')

       
    </header>

    <!-- SECTION : HERO -->
    <section class="relative px-6 lg:px-16 py-20 bg-gradient-to-b from-[#0b131d] to-[#111c2a] overflow-hidden">
        <div class="max-w-4xl">
            <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-3">P2A PARTNERS</p>
            <h1 class="font-editorial text-4xl sm:text-6xl lg:text-7xl font-normal leading-[1.1] mb-6 text-white">
                Ce que nous faisons
            </h1>
            <p class="text-lg lg:text-xl text-gray-300 font-light max-w-2xl leading-relaxed">
                Des expertises coordonnées pour fiabiliser l'information, respecter les obligations et mieux piloter l'organisation.
            </p>
        </div>
    </section>

    <!-- SECTION : LES 7 SERVICES (Agencés en 2 colonnes sur desktop avec fond gris) -->
    <section class="bg-[#f8f9fa] text-gray-900 px-6 lg:px-16 py-20">
        <div class="max-w-7xl mx-auto">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Service 01 -->
                <div class="bg-white border border-gray-200 flex flex-col justify-between overflow-hidden shadow-sm">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80" alt="Expertise comptable" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <span class="text-xs font-bold text-blue-600">01</span>
                            <h3 class="font-editorial text-2xl lg:text-3xl font-normal mt-2 mb-3 text-gray-900">Expertise comptable</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Produire une information comptable fiable, ponctuelle et conforme au SYSCOHADA.
                            </p>
                        </div>
                        <a href="#" class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-gray-900 hover:text-blue-600 transition-colors">
                            Découvrir <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 02 -->
                <div class="bg-white border border-gray-200 flex flex-col justify-between overflow-hidden shadow-sm">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" alt="Audit & commissariat aux comptes" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <span class="text-xs font-bold text-blue-600">02</span>
                            <h3 class="font-editorial text-2xl lg:text-3xl font-normal mt-2 mb-3 text-gray-900">Audit & commissariat aux comptes</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Apporter une lecture indépendante des comptes, des procédures et des risques.
                            </p>
                        </div>
                        <a href="#" class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-gray-900 hover:text-blue-600 transition-colors">
                            Découvrir <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 03 -->
                <div class="bg-white border border-gray-200 flex flex-col justify-between overflow-hidden shadow-sm">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?auto=format&fit=crop&w=800&q=80" alt="Fiscalité & conformité" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <span class="text-xs font-bold text-blue-600">03</span>
                            <h3 class="font-editorial text-2xl lg:text-3xl font-normal mt-2 mb-3 text-gray-900">Fiscalité & conformité</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Sécuriser les déclarations et anticiper les conséquences fiscales des opérations.
                            </p>
                        </div>
                        <a href="#" class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-gray-900 hover:text-blue-600 transition-colors">
                            Découvrir <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 04 -->
                <div class="bg-white border border-gray-200 flex flex-col justify-between overflow-hidden shadow-sm">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Conseil & organisation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <span class="text-xs font-bold text-blue-600">04</span>
                            <h3 class="font-editorial text-2xl lg:text-3xl font-normal mt-2 mb-3 text-gray-900">Conseil & organisation</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Clarifier les responsabilités, formaliser les processus et renforcer le contrôle interne.
                            </p>
                        </div>
                        <a href="#" class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-gray-900 hover:text-blue-600 transition-colors">
                            Découvrir <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 05 -->
                <div class="bg-white border border-gray-200 flex flex-col justify-between overflow-hidden shadow-sm">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=800&q=80" alt="Paie & social" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <span class="text-xs font-bold text-blue-600">05</span>
                            <h3 class="font-editorial text-2xl lg:text-3xl font-normal mt-2 mb-3 text-gray-900">Paie & social</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Fiabiliser la paie et respecter les obligations sociales dans un cadre confidentiel.
                            </p>
                        </div>
                        <a href="#" class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-gray-900 hover:text-blue-600 transition-colors">
                            Découvrir <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 06 -->
                <div class="bg-white border border-gray-200 flex flex-col justify-between overflow-hidden shadow-sm">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=800&q=80" alt="Conseil Financier" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <span class="text-xs font-bold text-blue-600">06</span>
                            <h3 class="font-editorial text-2xl lg:text-3xl font-normal mt-2 mb-3 text-gray-900">Conseil Financier</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Faire dialoguer performance, trésorerie et référentiels financiers.
                            </p>
                        </div>
                        <a href="#" class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-gray-900 hover:text-blue-600 transition-colors">
                            Découvrir <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

            </div>

            <!-- 3ème ligne : Service 07 aligné à gauche -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white border border-gray-200 flex flex-col justify-between overflow-hidden shadow-sm">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=800&q=80" alt="Assistance Juridique" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <span class="text-xs font-bold text-blue-600">07</span>
                            <h3 class="font-editorial text-2xl lg:text-3xl font-normal mt-2 mb-3 text-gray-900">Assistance Juridique</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Accompagner les actes courants, la gouvernance et les formalités de la vie des organisations.
                            </p>
                        </div>
                        <a href="#" class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-gray-900 hover:text-blue-600 transition-colors">
                            Découvrir <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
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
                    <li><a href="#" class="hover:text-white transition-colors">Expertise comptable</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Audit & commissariat aux comptes</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Fiscalité & conformité</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Conseil & organisation</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white text-sm font-semibold mb-4">Qui nous sommes</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#" class="hover:text-white transition-colors">Qui nous sommes</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Actualités</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Carrières</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
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