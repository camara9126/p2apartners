<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights - P2A Partners</title>
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
        <div class="flex items-center space-x-2">
            <a href="/" class="flex items-center space-x-2">
                <img src="images/logo.jpeg" width="70">
                <!-- <div class="text-center">
                    <span class="block font-bold tracking-widest text-lg">P2A</span>
                    <span class="block text-[10px] tracking-wider text-gray-400">PARTNERS</span>
                </div> -->
            </a>
        </div>

        <nav class="hidden lg:flex items-center space-x-8 text-sm text-gray-300">
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

            <a href="insights" class="text-white font-medium">Insights</a>
            <a href="actualites" class="hover:text-white">Actualités</a>
            <a href="contact" class="hover:text-white">Contact</a>
        </nav>

        <div class="text-xs font-semibold tracking-wider text-gray-300">
            FR | EN
        </div>
    </header>

    <!-- HERO SECTION INSIGHTS -->
    <section class="relative text-white py-24 px-6 lg:px-16 overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0b131d] via-[#0b131d]/90 to-[#0b131d]/50"></div>
        <div class="max-w-5xl mx-auto relative z-10">
            <p class="text-xs uppercase tracking-widest text-gray-400 mb-4">P2A PARTNERS</p>
            <h1 class="text-4xl lg:text-6xl font-serif mb-4">Insights</h1>
            <p class="text-lg lg:text-xl text-gray-300 font-light max-w-2xl">
                Fiscalité sénégalaise, SYSCOHADA, IFRS et OHADA expliqués avec précision.
            </p>
        </div>
    </section>

    <!-- SECTION FILTRES ET ARTICLES -->
    <section class="py-16 px-6 lg:px-16 bg-white min-h-[500px]">
        <div class="max-w-7xl mx-auto">
            
            <!-- Boutons de Filtres -->
            <div class="flex flex-wrap gap-3 mb-12 border-b border-gray-200 pb-6">
                <button onclick="filterArticles('all')" id="btn-all" class="filter-btn px-6 py-2.5 text-sm font-medium bg-[#1e40af] text-white rounded transition-colors shadow-sm">Tous</button>
                <button onclick="filterArticles('fiscalite')" id="btn-fiscalite" class="filter-btn px-6 py-2.5 text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200 rounded transition-colors">Fiscalité</button>
                <button onclick="filterArticles('syscohada')" id="btn-syscohada" class="filter-btn px-6 py-2.5 text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200 rounded transition-colors">SYSCOHADA</button>
                <button onclick="filterArticles('ifrs')" id="btn-ifrs" class="filter-btn px-6 py-2.5 text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200 rounded transition-colors">IFRS</button>
            </div>

            <!-- Grille des Articles -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="articles-grid">
                
                <!-- Article 1 : Fiscalité -->
               <!-- Article 1 : Fiscalite -->
            <a href="insightfiscalite" class="article-card flex flex-col group cursor-pointer" data-category="fiscalite">
                <div class="mb-5 overflow-hidden bg-gray-100 aspect-[16/10]">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1600&q=80" alt="Fiscalité sénégalaise" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <span class="text-xs font-semibold tracking-wider text-blue-900 uppercase mb-2">Fiscalité</span>
                <h3 class="text-xl font-serif text-gray-900 mb-3 group-hover:text-blue-900 transition-colors">
                    Fiscalité sénégalaise : préparer un contrôle avant l'avis
                </h3>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed flex-grow">
                    Une documentation périodique réduit l'incertitude et améliore le dialogue avec l'administration.
                </p>
                <span class="text-xs text-gray-400">7 min de lecture</span>
            </a>

                <!-- Article 2 : SYSCOHADA -->
            <!-- Article 2 : SYSCOHADA -->
            <a href="syscohoda" class="article-card flex flex-col group cursor-pointer" data-category="syscohada">
                <div class="mb-5 overflow-hidden bg-gray-100 aspect-[16/10]">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80" alt="Clôture SYSCOHADA" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <span class="text-xs font-semibold tracking-wider text-blue-900 uppercase mb-2">SYSCOHADA</span>
                <h3 class="text-xl font-serif text-gray-900 mb-3 group-hover:text-blue-900 transition-colors">
                    Clôture SYSCOHADA : organiser un calendrier réellement utile
                </h3>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed flex-grow">
                    Un calendrier structuré clarifie les responsabilités, anticipe les contrôles et améliore la qualité des états financiers.
                </p>
                <span class="text-xs text-gray-400">8 min de lecture</span>
            </a>

                <!-- Article 3 : IFRS -->
            <a href="ifrs" class="article-card flex flex-col group cursor-pointer" data-category="ifrs">
                <div class="mb-5 overflow-hidden bg-gray-100 aspect-[16/10]">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="IFRS 18" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <span class="text-xs font-semibold tracking-wider text-blue-900 uppercase mb-2">IFRS</span>
                <h3 class="text-xl font-serif text-gray-900 mb-3 group-hover:text-blue-900 transition-colors">
                    IFRS 18 remplace IAS 1 : ce qui change dans la présentation de la performance
                </h3>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed flex-grow">
                    Nouveaux sous-totaux, indicateurs de gestion encadrés et présentation plus comparable : les points à préparer avant 2027.
                </p>
                <span class="text-xs text-gray-400">8 min de lecture</span>
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
                    <li><a href="apropos" class="hover:text-white transition-colors">Qui nous sommes</a></li>
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

    <!-- SCRIPT DE FILTRAGE INTERACTIF -->
    <script>
        function filterArticles(category) {
            const cards = document.querySelectorAll('.article-card');
            const buttons = document.querySelectorAll('.filter-btn');

            // Gestion des styles des boutons actifs
            buttons.forEach(btn => {
                btn.classList.remove('bg-[#1e40af]', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });

            const activeBtn = document.getElementById(`btn-${category}`);
            if (activeBtn) {
                activeBtn.classList.remove('bg-gray-100', 'text-gray-700');
                activeBtn.classList.add('bg-[#1e40af]', 'text-white');
            }

            // Filtrage des cartes d'articles
            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>