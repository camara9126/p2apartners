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
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

    <!-- HEADER -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#0b131d] text-white relative z-50">
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
        
        <!-- NAVIGATION -->
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
        <span class="text-xs text-gray-300"><strong>FR</strong> | EN</span>
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

</body>
</html>