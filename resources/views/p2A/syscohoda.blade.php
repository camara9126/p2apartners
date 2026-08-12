<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clôture SYSCOHADA : organiser un calendrier réellement utile - P2A Partners</title>
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

        /* [COMMENTAIRE : Section Hero de l'article] */
        .hero {
            position: relative;
            background-image: linear-gradient(rgba(11, 37, 69, 0.85), rgba(11, 37, 69, 0.85)), url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            padding: 5rem 2rem 4rem 2rem;
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
        }

        .hero-tag {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #8da9c4;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.1rem;
            color: #e2e8f0;
            margin-bottom: 1.5rem;
            max-width: 750px;
        }

        .hero-meta {
            font-size: 0.85rem;
            color: #a0aec0;
        }

        /* [COMMENTAIRE : Structure principale en grille (Sidebar + Article)] */
        .main-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 4rem;
        }

        .sidebar {
            position: sticky;
            top: 100px;
            align-self: start;
        }

        .toc-box {
            background: #ffffff;
            padding: 1.5rem;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .toc-box h3 {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: #0b2545;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .toc-box ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .toc-box a {
            text-decoration: none;
            color: #4a5568;
            font-size: 0.9rem;
            transition: color 0.2s;
        }

        .toc-box a:hover {
            color: #1d4ed8;
        }

        .article-content {
            background: #ffffff;
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .article-image-featured {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 3rem;
        }

        .article-section {
            margin-bottom: 3.5rem;
        }

        .article-section h2 {
            font-size: 1.8rem;
            color: #0b2545;
            margin-bottom: 1.25rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #f1f5f9;
        }

        .article-section h3 {
            font-size: 1.3rem;
            color: #1e293b;
            margin-top: 2rem;
            margin-bottom: 0.75rem;
        }

        .article-section p {
            margin-bottom: 1rem;
            color: #334155;
            font-size: 1.05rem;
        }

        .article-section ul {
            margin-left: 1.5rem;
            margin-top: 0.75rem;
            margin-bottom: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            color: #334155;
        }

        /* [COMMENTAIRE : Pied de page] */
        footer {
            background: #0b2545;
            color: #ffffff;
            padding: 4rem 2rem 2rem 2rem;
            margin-top: 4rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .footer-col h4 {
            margin-bottom: 1rem;
            font-size: 1.1rem;
            color: #93c5fd;
        }

        .footer-col p, .footer-col ul {
            font-size: 0.9rem;
            color: #cbd5e1;
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 0.5rem;
        }

        .footer-col a {
            color: #cbd5e1;
            text-decoration: none;
        }

        .footer-col a:hover {
            color: #ffffff;
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            border-top: 1px solid #1e3a8a;
            padding-top: 1.5rem;
            font-size: 0.85rem;
            color: #94a3b8;
            text-align: center;
        }

        @media (max-width: 960px) {
            .nav-links {
                display: none;
            }
            .main-container {
                grid-template-columns: 1fr;
            }
            .sidebar {
                display: none;
            }
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
<body>

    <!-- [COMMENTAIRE : En-tête de navigation aligné exactement sur l'image de référence] -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#ffff] text-[#0b131d]">
        <div class="nav-container">
            <!-- Logo à gauche -->
            <a href="/" class="logo-area">
                <img src="images/logo.jpeg" width="70">
                <!-- <div class="logo-icon">P2A</div>
                <div class="logo-text">
                    P2A PARTNERS
                    <span>PARTNERS</span>
                </div> -->
            </a>          

        </div>

          @include('partials.navbar')
    </header>

    <!-- Section Hero avec image thématique et filtre dégradé -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-tag">SYSCOHADA</div>
            <h1>Clôture SYSCOHADA : organiser un calendrier réellement utile</h1>
            <p>Un calendrier structuré clarifie les responsabilités, anticipe les contrôles et améliore la qualité des états financiers.</p>
            <div class="hero-meta">19 juillet 2025 • 8 min de lecture</div>
        </div>
    </section>

    <!-- Contenu Principal -->
    <div class="main-container">
        
        <!-- Sommaire latéral -->
        <aside class="sidebar">
            <nav class="toc-box">
                <h3>Dans cet article</h3>
                <ul>
                    <li><a href="#livraison">Date de livraison attendue</a></li>
                    <li><a href="#preparer">Préparer avant la fin de l'exercice</a></li>
                    <li><a href="#cycles">Organiser les travaux par cycle</a></li>
                    <li><a href="#responsabilites">Définir les responsabilités</a></li>
                    <li><a href="#dossier">Dossier de clôture standard</a></li>
                    <li><a href="#suspendus">Formaliser les points en suspens</a></li>
                    <li><a href="#analytique">Revue analytique finale</a></li>
                    <li><a href="#efficacite">Mesurer l'efficacité</a></li>
                    <li><a href="#continu">Processus continu</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Corps de l'article -->
        <main class="article-content">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80" alt="Planning et organisation comptable" class="article-image-featured">

            <div class="article-section">
                <p>La clôture comptable ne devrait pas être une succession de tâches réalisées dans l'urgence après la fin de l'exercice. Un calendrier efficace permet de répartir les travaux, de clarifier les responsabilités et d'identifier suffisamment tôt les opérations susceptibles de retarder la production des états financiers.</p>
                <p>Dans l'espace OHADA, l'Acte uniforme relatif au droit comptable et à l'information financière — auquel est annexé le SYSCOHADA révisé — définit les règles de tenue des comptes, de présentation des états financiers et de production de l'information financière.</p>
                <p>Le calendrier de clôture constitue le lien opérationnel entre ces exigences, l'organisation de l'entreprise et les informations disponibles.</p>
            </div>

            <div id="livraison" class="article-section">
                <h2>Partir de la date de livraison attendue</h2>
                <p>La construction du calendrier doit commencer par la date à laquelle les états financiers doivent être disponibles, puis remonter vers les différentes étapes de préparation.</p>
                <p>Cette date peut dépendre :</p>
                <ul>
                    <li>des exigences des actionnaires ou de la société mère ;</li>
                    <li>du calendrier des organes de gouvernance ;</li>
                    <li>des obligations fiscales ;</li>
                    <li>de l'intervention des commissaires aux comptes ;</li>
                    <li>des engagements pris envers les banques ou les bailleurs ;</li>
                    <li>des besoins internes de pilotage.</li>
                </ul>
                <p>Pour chaque échéance, l'entreprise doit définir le livrable attendu, la personne responsable, les contributeurs et la date de validation.</p>
            </div>

            <div id="preparer" class="article-section">
                <h2>Préparer la clôture avant la fin de l'exercice</h2>
                <p>Une partie importante des travaux peut être réalisée avant la date de clôture. Cette anticipation réduit la charge concentrée sur les premières semaines de l'exercice suivant.</p>
                <p>Les principaux travaux préparatoires peuvent comprendre :</p>
                <ul>
                    <li>la justification des comptes anciens ou inhabituels ;</li>
                    <li>l'apurement des comptes d'attente ;</li>
                    <li>la mise à jour du fichier des immobilisations ;</li>
                    <li>la préparation des instructions d'inventaire ;</li>
                    <li>l'identification des contrats nécessitant une analyse particulière ;</li>
                    <li>la confirmation des soldes avec certaines parties prenantes ;</li>
                    <li>la revue des créances anciennes ;</li>
                    <li>le rapprochement entre les déclarations fiscales et la comptabilité ;</li>
                    <li>la préparation des demandes d'informations adressées aux différents services.</li>
                </ul>
            </div>

            <div id="cycles" class="article-section">
                <h2>Organiser les travaux par cycle</h2>
                <p>Un calendrier utile doit être structuré autour des principaux cycles comptables. Cette organisation facilite la répartition des responsabilités et la revue des dossiers.</p>
                
                <h3>Trésorerie</h3>
                <p>Les rapprochements bancaires doivent être préparés pour chaque compte et expliquer les opérations en circulation. Les caisses, placements et éventuels financements doivent également être rapprochés des justificatifs disponibles.</p>
                
                <h3>Clients et chiffre d'affaires</h3>
                <p>La revue porte notamment sur la facturation, les avoirs, les créances anciennes, les encaissements postérieurs et la séparation des exercices. Les pertes de valeur éventuelles doivent être documentées à partir d'éléments objectifs.</p>
                
                <h3>Fournisseurs et charges</h3>
                <p>L'entreprise doit rechercher les factures non parvenues, analyser les paiements postérieurs et vérifier que les charges sont comptabilisées dans le bon exercice. Les soldes débiteurs inhabituels nécessitent une explication.</p>
                
                <h3>Stocks</h3>
                <p>Les inventaires physiques doivent être préparés, supervisés et rapprochés de la comptabilité. Les écarts, les articles endommagés, les stocks à rotation lente et les méthodes de valorisation doivent faire l'objet d'une revue documentée.</p>
            </div>

            <div id="responsabilites" class="article-section">
                <h2>Définir clairement les responsabilités</h2>
                <p>Chaque tâche du calendrier doit comporter au minimum quatre informations :</p>
                <ul>
                    <li>la personne chargée de la préparation ;</li>
                    <li>la personne chargée de la revue ;</li>
                    <li>la date prévue de remise ;</li>
                    <li>le justificatif attendu.</li>
                </ul>
                <p>La personne qui prépare un rapprochement ne devrait pas être la seule à le valider. Une revue distincte permet de détecter plus facilement les erreurs, les éléments anciens et les explications insuffisantes.</p>
            </div>

            <div id="dossier" class="article-section">
                <h2>Définir un dossier de clôture standard</h2>
                <p>Le dossier de clôture doit permettre à une personne extérieure au processus de comprendre les soldes significatifs et les écritures enregistrées.</p>
                <p>Il peut comprendre :</p>
                <ul>
                    <li>la balance générale définitive ;</li>
                    <li>les rapprochements bancaires ;</li>
                    <li>la justification des comptes ;</li>
                    <li>les états d'inventaire ;</li>
                    <li>le fichier des immobilisations ;</li>
                    <li>les analyses des créances et des dettes ;</li>
                    <li>les calculs des provisions ;</li>
                    <li>les rapprochements fiscaux et sociaux ;</li>
                    <li>les principales écritures de clôture ;</li>
                    <li>les contrats ou décisions justifiant les traitements retenus ;</li>
                    <li>la revue analytique des variations ;</li>
                    <li>les états financiers et les notes annexes.</li>
                </ul>
            </div>

            <div id="suspendus" class="article-section">
                <h2>Formaliser les points en suspens</h2>
                <p>Toutes les difficultés ne sont pas nécessairement résolues au moment prévu. Elles doivent toutefois rester visibles.</p>
                <p>Un tableau des points en suspens peut préciser :</p>
                <ul>
                    <li>la question à résoudre ;</li>
                    <li>le montant concerné ;</li>
                    <li>les comptes affectés ;</li>
                    <li>le responsable ;</li>
                    <li>l'action attendue ;</li>
                    <li>la date de résolution ;</li>
                    <li>l'incidence éventuelle sur les états financiers.</li>
                </ul>
            </div>

            <div id="analytique" class="article-section">
                <h2>Prévoir une revue analytique finale</h2>
                <p>Avant l'arrêté définitif des comptes, une revue d'ensemble doit être réalisée. Elle consiste notamment à comparer :</p>
                <ul>
                    <li>les données de l'exercice avec celles de l'exercice précédent ;</li>
                    <li>les réalisations avec le budget ;</li>
                    <li>les marges par activité ;</li>
                    <li>les principaux ratios financiers ;</li>
                    <li>les mouvements inhabituels ;</li>
                    <li>les soldes sans variation ou présentant un sens anormal.</li>
                </ul>
            </div>

            <div id="efficacite" class="article-section">
                <h2>Mesurer l'efficacité du calendrier</h2>
                <p>Un calendrier utile doit être évalué après chaque clôture. Les indicateurs peuvent porter sur :</p>
                <ul>
                    <li>le respect des dates prévues ;</li>
                    <li>le nombre de tâches livrées en retard ;</li>
                    <li>le volume des écritures enregistrées après la première balance ;</li>
                    <li>le nombre de comptes insuffisamment justifiés ;</li>
                    <li>les corrections demandées lors de la revue ou de l'audit ;</li>
                    <li>les tâches qui ont dépendu d'une seule personne ;</li>
                    <li>les difficultés récurrentes d'un exercice à l'autre.</li>
                </ul>
            </div>

            <div id="continu" class="article-section">
                <h2>Transformer la clôture en processus continu</h2>
                <p>Une clôture fiable ne repose pas uniquement sur les travaux réalisés en fin d'exercice. Les rapprochements bancaires, la justification des comptes, le suivi des immobilisations et la revue des déclarations gagnent à être effectués chaque mois ou chaque trimestre.</p>
                <p>L'objectif est de réduire les régularisations tardives et de consacrer davantage de temps à l'analyse de la performance et à la qualité des états financiers.</p>
                <p>Le calendrier devient réellement utile lorsqu'il ne se limite plus à rappeler des dates, mais permet de savoir qui produit chaque information, qui la contrôle et comment elle est documentée.</p>
            </div>
        </main>

    </div>

    <!-- Pied de page -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h4>P2A PARTNERS</h4>
                <p>Expertise Comptable, Audit et Conseils pour les organisations au Sénégal et partout dans le monde.</p>
            </div>
            <div class="footer-col">
                <h4>Ce que nous faisons</h4>
                <ul>
                    <li><a href="expertisecomptable">Expertise comptable</a></li>
                    <li><a href="audit">Audit & commissariat aux comptes</a></li>
                    <li><a href="fiscalité">Fiscalité & conformité</a></li>
                    <li><a href="conseiletorganisation">Conseil & organisation</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Qui nous sommes</h4>
                <ul>
                    <li><a href="apropos">Qui nous sommes</a></li>
                    <li><a href="actualites">Actualités</a></li>
                    <li><a href="carrières">Carrières</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Dakar</h4>
                <p>Villa n° 90, Sacré-Cœur 3<br>Dakar, Sénégal<br>contact@p2apartners.com</p>
                <p style="margin-top: 1rem; font-size: 0.8rem;">Membre de l'ONECCA</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 P2A Partners. Tous droits réservés.</p>
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
    <!-- [COMMENTAIRE : Script JavaScript pour la gestion des menus déroulants] -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(dropdown => {
                const link = dropdown.querySelector('a');

                link.addEventListener('click', function (e) {
                    if (window.innerWidth <= 960) {
                        e.preventDefault();
                        dropdown.classList.toggle('active');
                        
                        const expanded = dropdown.classList.contains('active');
                        link.setAttribute('aria-expanded', expanded);
                    }
                });
            });

            document.addEventListener('click', function (e) {
                if (!e.target.closest('.dropdown')) {
                    dropdowns.forEach(dropdown => {
                        dropdown.classList.remove('active');
                        const link = dropdown.querySelector('a');
                        if (link) link.setAttribute('aria-expanded', 'false');
                    });
                }
            });
        });
    </script>
</body>
</html>