<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2A Partners - Services financiers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .font-editorial { font-family: Georgia, serif; }
        .dropdown-menu { opacity: 0; visibility: hidden; transform: translateY(-10px); transition: all 0.2s ease-in-out; }
        .group:hover .dropdown-menu { opacity: 1; visibility: visible; transform: translateY(0); }

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

    <!-- HEADER -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#ffff] text-[#0b131d] relative z-50">
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
        
        <!-- NAVIGATION PRINCIPALE AVEC MENUS DEROULANTS -->
        @include('partials.navbar')
    
    </header>

    <!-- HERO SECTION -->
    <section class="relative px-6 lg:px-16 py-24 overflow-hidden text-white bg-[#070d14]">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1600&q=80" alt="Services Financiers" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-[#070d14] via-[#070d14]/90 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-4xl">
            <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-3">QUI NOUS ACCOMPAGNONS</p>
            <h1 class="font-editorial text-4xl sm:text-6xl font-normal leading-[1.1] mb-6">
                Services financiers
            </h1>
            <p class="text-lg text-gray-300 font-light max-w-2xl leading-relaxed">
                Banque, assurances et fintech : sécuriser les données, la conformité et le reporting.
            </p>
        </div>
    </section>

    <!-- SECTION ENJEUX DU SECTEUR & NOTRE RÉPONSE -->
    <section class="px-6 lg:px-16 py-20 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Colonne de gauche : Enjeux -->
            <div class="lg:col-span-7 space-y-8">
                <p class="text-xs font-bold tracking-widest text-gray-400 uppercase">ENJEUX DU SECTEUR</p>
                <div class="space-y-6">
                    <div class="pb-6 border-b border-gray-200">
                        <span class="text-xs font-bold text-gray-400 block mb-1">01</span>
                        <h3 class="font-editorial text-2xl font-normal text-gray-900">Fiabilité des données financières</h3>
                    </div>
                    <div class="pb-6 border-b border-gray-200">
                        <span class="text-xs font-bold text-gray-400 block mb-1">02</span>
                        <h3 class="font-editorial text-2xl font-normal text-gray-900">Conformité fiscale et réglementaire</h3>
                    </div>
                    <div class="pb-6 border-b border-gray-200">
                        <span class="text-xs font-bold text-gray-400 block mb-1">03</span>
                        <h3 class="font-editorial text-2xl font-normal text-gray-900">Reporting IFRS et pilotage des risques</h3>
                    </div>
                </div>
            </div>

            <!-- Colonne de droite : Notre réponse -->
            <div class="lg:col-span-5 bg-gray-50 border border-gray-200 p-8 lg:p-10">
                <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-4">NOTRE RÉPONSE</p>
                <p class="font-editorial text-2xl sm:text-3xl font-normal leading-relaxed text-gray-900">
                    Nous articulons les exigences comptables, fiscales et de contrôle interne avec les contraintes opérationnelles propres aux institutions financières et aux fintech.
                </p>
            </div>

        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="bg-[#1e6091] text-white px-6 lg:px-16 py-20">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="mb-8 md:mb-0 max-w-xl">
                <p class="text-xs font-bold tracking-widest text-blue-200 uppercase mb-2">P2A PARTNERS</p>
                <h2 class="font-editorial text-3xl sm:text-4xl font-normal">Une question mérite un échange direct.</h2>
                <p class="text-sm text-blue-100 mt-2 font-light">Parlons de votre contexte, sans engagement.</p>
            </div>
            <a href="contact" class="bg-white text-gray-900 hover:bg-gray-100 text-xs font-semibold px-8 py-4 uppercase tracking-wider transition-colors shadow-lg">
                Prendre rendez-vous →
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0b131d] text-gray-300 px-6 lg:px-12 py-16 border-t border-gray-800 text-xs">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
            <div>
                <div class="text-blue-500 font-bold text-xl tracking-wider flex items-center mb-4">
                    <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span>P2A PARTNERS</span>
                </div>
                <p class="text-gray-400 leading-relaxed">Expertise Comptable, Audit et Conseils pour les organisations au Sénégal et partout dans le monde.</p>
            </div>
            <div>
                <h3 class="text-white font-semibold uppercase tracking-wider mb-4">Ce que nous faisons</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="expertise-comptable" class="hover:text-white">Expertise comptable</a></li>
                    <li><a href="audit" class="hover:text-white">Audit & commissariat aux comptes</a></li>
                    <li><a href="fiscalite" class="hover:text-white">Fiscalité & conformité</a></li>
                    <li><a href="conseil" class="hover:text-white">Conseil & organisation</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-semibold uppercase tracking-wider mb-4">Qui nous sommes</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="apropos" class="hover:text-white">Qui nous sommes</a></li>
                    <li><a href="actualites" class="hover:text-white">Actualités</a></li>
                    <li><a href="carrieres" class="hover:text-white">Carrières</a></li>
                    <li><a href="contact" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-semibold uppercase tracking-wider mb-4">Dakar</h3>
                <p class="text-gray-400 leading-relaxed mb-2">Villa n° 90, Sacré-Cœur 3<br>Dakar, Sénégal</p>
                <p class="text-gray-400 mb-2">contact@p2apartners.com</p>
                <p class="text-gray-500 text-[11px]">Membre de l'ONECCA</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pt-8 border-t border-gray-800 flex flex-col sm:flex-row justify-between items-center text-gray-500">
            <p>&copy; 2026 P2A Partners. Tous droits réservés.</p>
            <div class="flex space-x-6 mt-4 sm:mt-0">
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