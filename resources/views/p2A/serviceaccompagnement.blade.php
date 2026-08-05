<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - P2A Partners</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .group:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

    <!-- HEADER / NAVIGATION -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#0b131d] text-white">
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
                <a href="quinoussomme" class="hover:text-white flex items-center focus:outline-none py-1">
                    Qui nous sommes 
                    <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div class="dropdown-menu absolute top-full left-0 w-56 bg-[#0b131d] text-white shadow-2xl opacity-0 invisible transform -translate-y-2 transition-all duration-200 py-2 border border-gray-800 z-50">
                    <a href="quinoussomme" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Qui nous sommes</a>
                    <a href="carrières" class="block px-5 py-2.5 text-xs hover:bg-gray-800 transition-colors">Carrières</a>
                </div>
            </div>

            <a href="insights" class="hover:text-white">Insights</a>
            <a href="actualites" class="hover:text-white">Actualités</a>
            <a href="contact" class="hover:text-white">Contact</a>
        </nav>

        <!-- Langue -->
        <div class="text-xs font-semibold tracking-wider text-gray-300">
            FR | EN
        </div>
    </header>

    <!-- HERO SECTION SERVICES -->
    <section class="relative text-white py-24 px-6 lg:px-16 overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0b131d] via-[#0b131d]/90 to-[#0b131d]/50"></div>

        <div class="max-w-5xl mx-auto relative z-10">
            <p class="text-xs uppercase tracking-widest text-gray-400 mb-4">Qui nous accompagnons</p>
            <h1 class="text-4xl lg:text-6xl font-serif mb-6">Services</h1>
            <p class="text-lg lg:text-xl text-gray-300 font-light max-w-2xl">
                Structurer la facturation, la trésorerie et le pilotage au rythme de la croissance.
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
                        <h3 class="text-xl font-serif mt-1 text-gray-900">Suivi des missions et de la facturation</h3>
                    </div>
                    <div class="border-b border-gray-200 pb-6">
                        <span class="text-xs text-gray-400 font-mono">02</span>
                        <h3 class="text-xl font-serif mt-1 text-gray-900">Visibilité de trésorerie</h3>
                    </div>
                    <div class="border-b border-gray-200 pb-6">
                        <span class="text-xs text-gray-400 font-mono">03</span>
                        <h3 class="text-xl font-serif mt-1 text-gray-900">Mesure de la rentabilité par activité</h3>
                    </div>
                </div>
            </div>

            <!-- Colonne Notre réponse -->
            <div class="bg-[#f9f8f6] p-10 border-l-4 border-[#0b131d]">
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-4 font-semibold">Notre réponse</p>
                <h2 class="text-2xl lg:text-3xl font-serif text-gray-900 leading-snug">
                    Nous mettons en place une organisation comptable et des tableaux de bord proportionnés au modèle économique et aux ressources de chaque entreprise de services.
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
                <div class="text-white font-bold tracking-widest text-lg mb-4">P2A PARTNERS</div>
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

</body>
</html>