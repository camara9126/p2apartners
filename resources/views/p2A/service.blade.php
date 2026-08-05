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
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

    <!-- HEADER / NAVIGATION -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#0b131d] text-white">
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
        <!-- NAVIGATION PRINCIPALE AVEC MENUS DEROULANTS -->
        <nav class="hidden lg:flex items-center space-x-8 text-sm text-gray-300">
            
            <!-- Dropdown 1 : Qui nous accompagnons -->
            <div class="relative group py-2">
                <a href="/" class="hover:text-white flex items-center focus:outline-none py-1">
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

        <!-- Langue -->
        <div class="flex items-center space-x-4">
            <span class="text-xs text-gray-300"><strong class="text-white">FR</strong> | EN</span>
        </div>
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

</body>
</html>