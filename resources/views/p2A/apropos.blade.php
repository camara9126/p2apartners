<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2A Partners - Qui nous sommes</title>
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

        <!-- Langue -->
        <div class="flex items-center space-x-4">
            <span class="text-xs text-gray-300"><strong class="text-white">FR</strong> | EN</span>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="relative px-6 lg:px-16 py-20 bg-gradient-to-b from-[#0b131d] to-[#111c2a] overflow-hidden text-white">
        <div class="max-w-4xl">
            <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-3">P2A PARTNERS</p>
            <h1 class="font-editorial text-4xl sm:text-6xl lg:text-7xl font-normal leading-[1.1] mb-6">
                Qui nous sommes
            </h1>
            <p class="text-lg lg:text-xl text-gray-300 font-light max-w-2xl leading-relaxed">
                Un cabinet sénégalais indépendant, proche des dirigeants et ouvert sur les standards internationaux.
            </p>
        </div>
    </section>

    <!-- NOTRE HISTOIRE -->
    <section class="px-6 lg:px-16 py-20 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-3">NOTRE HISTOIRE</p>
                <h2 class="font-editorial text-3xl sm:text-4xl lg:text-5xl font-normal leading-tight text-gray-900 mb-6">
                    P2A Partners est né de la volonté de réunir expérience de l'audit, maîtrise comptable et conseil opérationnel dans une relation plus directe avec les clients.
                </h2>
            </div>
            <div>
                <div class="bg-gray-100 rounded overflow-hidden shadow-sm mb-4">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80" alt="Paysage côtier" class="w-full h-72 object-cover">
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <h3 class="font-editorial text-xl font-normal text-gray-900 mb-2">Une profession réglementée</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        P2A Partners est membre de l'Ordre National des Experts-Comptables et Comptables Agréés du Sénégal (ONECCA). Les missions réglementées sont réalisées dans le respect des habilitations applicables.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- NOS VALEURS -->
    <!-- NOS VALEURS -->
    <section class="relative bg-[#0b131d] text-white px-6 lg:px-16 py-10 overflow-hidden">
        <!-- Image de fond avec opacité faible (à remplacer plus tard si besoin) -->
        <div class="absolute inset-0 z-0 opacity-15">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80" alt="Fond Nos Valeurs" class="w-full h-full object-cover">
        </div>
        <!-- Calque de superposition bleu avec opacité -->
        <div class="absolute inset-0 z-0 bg-blue-950/40 mix-blend-multiply"></div>

        <!-- Contenu de la section (centré) -->
        <div class="relative z-10 max-w-6xl mx-auto flex flex-col items-center">
            <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-6 text-center">NOS VALEURS</p>
            <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-px bg-gray-800/60 border border-gray-800">
                
                <!-- Valeur 01 -->
                <div class="bg-[#0b131d]/90 backdrop-blur-sm p-6 lg:p-8 flex flex-col justify-between text-center">
                    <span class="text-[10px] font-mono text-gray-500 mb-4 block">01</span>
                    <div>
                        <h3 class="font-editorial text-xl lg:text-2xl font-normal mb-1">Intégrité</h3>
                    </div>
                </div>

                <!-- Valeur 02 -->
                <div class="bg-[#0b131d]/90 backdrop-blur-sm p-6 lg:p-8 flex flex-col justify-between text-center">
                    <span class="text-[10px] font-mono text-gray-500 mb-4 block">02</span>
                    <div>
                        <h3 class="font-editorial text-xl lg:text-2xl font-normal mb-1">Excellence</h3>
                    </div>
                </div>

                <!-- Valeur 03 -->
                <div class="bg-[#0b131d]/90 backdrop-blur-sm p-6 lg:p-8 flex flex-col justify-between text-center">
                    <span class="text-[10px] font-mono text-gray-500 mb-4 block">03</span>
                    <div>
                        <h3 class="font-editorial text-xl lg:text-2xl font-normal mb-1">Proximité</h3>
                    </div>
                </div>

                <!-- Valeur 04 -->
                <div class="bg-[#0b131d]/90 backdrop-blur-sm p-6 lg:p-8 flex flex-col justify-between text-center">
                    <span class="text-[10px] font-mono text-gray-500 mb-4 block">04</span>
                    <div>
                        <h3 class="font-editorial text-xl lg:text-2xl font-normal mb-1">Confidentialité</h3>
                    </div>
                </div>

                <!-- Valeur 05 -->
                <div class="bg-[#0b131d]/90 backdrop-blur-sm p-6 lg:p-8 flex flex-col justify-between text-center">
                    <span class="text-[10px] font-mono text-gray-500 mb-4 block">05</span>
                    <div>
                        <h3 class="font-editorial text-xl lg:text-2xl font-normal mb-1">Responsabilité</h3>
                    </div>
                </div>

                <!-- Valeur 06 -->
                <div class="bg-[#0b131d]/90 backdrop-blur-sm p-6 lg:p-8 flex flex-col justify-between text-center">
                    <span class="text-[10px] font-mono text-gray-500 mb-4 block">06</span>
                    <div>
                        <h3 class="font-editorial text-xl lg:text-2xl font-normal mb-1">Transmission</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NOTRE MÉTHODE -->
    <section class="px-6 lg:px-16 py-20 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div>
                <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-3">NOTRE MÉTHODE</p>
                <h2 class="font-editorial text-3xl sm:text-4xl lg:text-5xl font-normal leading-tight text-gray-900">
                    Une méthode lisible, du diagnostic à l'action.
                </h2>
            </div>
            <div class="space-y-6">
                <div class="border-t border-gray-200 pt-6 flex items-start space-x-6">
                    <span class="text-xs font-mono text-gray-400">01</span>
                    <p class="text-gray-900 font-medium text-lg">Comprendre les décisions à sécuriser</p>
                </div>
                <div class="border-t border-gray-200 pt-6 flex items-start space-x-6">
                    <span class="text-xs font-mono text-gray-400">02</span>
                    <p class="text-gray-900 font-medium text-lg">Définir un périmètre et des responsabilités clairs</p>
                </div>
                <div class="border-t border-gray-200 pt-6 flex items-start space-x-6">
                    <span class="text-xs font-mono text-gray-400">03</span>
                    <p class="text-gray-900 font-medium text-lg">Produire des analyses directement utilisables</p>
                </div>
                <div class="border-t border-gray-200 pt-6 flex items-start space-x-6">
                    <span class="text-xs font-mono text-gray-400">04</span>
                    <p class="text-gray-900 font-medium text-lg">Transmettre les méthodes aux équipes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ÉQUIPE DIRIGEANTE -->
    <section class="bg-[#f8f9fa] px-6 lg:px-16 py-20">
        <div class="max-w-7xl mx-auto">
            <p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-12">L'ÉQUIPE DIRIGEANTE</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                
                <!-- Membre 1 : Abdoul Aziz -->
                <div class="bg-white border border-gray-200 overflow-hidden shadow-sm flex flex-col justify-between">
                    <div class="h-80 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80" alt="Abdoul Aziz" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <h3 class="font-editorial text-3xl font-normal text-gray-900 mb-1">Abdoul Aziz</h3>
                            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4">Associé, Co-gérant</p>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Expert-comptable et commissaire aux comptes, certifié en normes internationales d'information financière. Abdoul a exercé plusieurs années au sein de cabinets du Big Four et de directions financières d'entreprises. Il accompagne PME, groupes internationaux et startups en audit, IFRS, comptabilité locale, fiscalité et finance, au Sénégal et sur les marchés africains.
                            </p>
                        </div>
                        <div class="border-t border-gray-100 pt-4">
                            <a href="mailto:contact@p2apartners.com" class="text-gray-400 hover:text-gray-900 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Membre 2 : Pierre -->
                <div class="bg-white border border-gray-200 overflow-hidden shadow-sm flex flex-col justify-between">
                    <div class="h-80 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" alt="Pierre" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <h3 class="font-editorial text-3xl font-normal text-gray-900 mb-1">Pierre</h3>
                            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4">Associé, Co-gérant</p>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                Expert-comptable et commissaire aux comptes inscrit à l'ONECCA, Pierre totalise près de onze années d'expérience en organisation comptable, conseil fiscal et social, audit légal et contractuel. Il intervient également en formation, contrôle interne, SYSCOHADA, IFRS et contrôle de gestion.
                            </p>
                        </div>
                        <div class="border-t border-gray-100 pt-4">
                            <a href="mailto:contact@p2apartners.com" class="text-gray-400 hover:text-gray-900 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </a>
                        </div>
                    </div>
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

</body>
</html>