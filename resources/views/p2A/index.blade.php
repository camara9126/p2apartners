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
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

    <!-- HEADER / NAVIGATION -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#0b131d] text-white">
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

</body>
</html>