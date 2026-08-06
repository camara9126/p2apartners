<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFRS 18 remplace IAS 1 : ce qui change dans la présentation de la performance - P2A Partners</title>
    <style>
        /* Styles globaux */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: #1a1a1a;
            background-color: #f8f9fa;
            line-height: 1.6;
        }

        /* Navigation */
        header {
            background: #ffffff;
            border-bottom: 1px solid #e5e5e5;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 2rem;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            background: #0b2545;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .logo-text {
            font-weight: 700;
            font-size: 1rem;
            color: #0b2545;
            letter-spacing: 0.5px;
            line-height: 1.2;
        }

        .logo-text span {
            display: block;
            font-size: 0.65rem;
            font-weight: 500;
            color: #64748b;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            gap: 1.8rem;
            list-style: none;
            align-items: center;
            margin: 0 auto;
        }

        .nav-links > li {
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: #333333;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.3rem;
            padding: 0.5rem 0;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: #1d4ed8;
        }

        /* Menus Déroulants (Dropdown) */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            min-width: 260px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 6px;
            padding: 0.5rem 0;
            z-index: 1001;
            border: 1px solid #e2e8f0;
            list-style: none;
            flex-direction: column;
        }

        .dropdown-content li {
            width: 100%;
        }

        .dropdown-content a {
            padding: 0.6rem 1.25rem;
            color: #334155;
            white-space: nowrap;
            font-size: 0.88rem;
            font-weight: 400;
            transition: background-color 0.2s, color 0.2s;
        }

        .dropdown-content a:hover {
            background-color: #f1f5f9;
            color: #1d4ed8;
        }

        .dropdown.active .dropdown-content,
        .dropdown:hover .dropdown-content {
            display: flex;
        }

        .arrow-down {
            font-size: 0.65rem;
            color: #64748b;
            transition: transform 0.2s;
        }

        .dropdown:hover .arrow-down {
            transform: rotate(180deg);
        }

        /* Sélecteur de langue */
        .lang-area {
            display: flex;
            align-items: center;
        }

        .lang-switch {
            font-size: 0.85rem;
            font-weight: 600;
            color: #333333;
            text-decoration: none;
            padding: 0.3rem 0.6rem;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            transition: all 0.2s;
        }

        .lang-switch:hover {
            border-color: #1d4ed8;
            color: #1d4ed8;
        }

        /* Section Hero avec image et dégradé à faible opacité */
        .hero {
            position: relative;
            background-image: linear-gradient(rgba(11, 37, 69, 0.85), rgba(11, 37, 69, 0.85)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1920&q=80');
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

        /* Structure principale de l'article */
        .main-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 4rem;
        }

        /* Sommaire / Dans cet article */
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

        /* Contenu de l'article & Espacement des sections */
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

        /* Pied de page */
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
            .hero h1 {
                font-size: 2rem;
            }
            .article-content {
                padding: 1.5rem;
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

    <!-- En-tête / Navbar avec les menus déroulants -->
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

            <!-- Liens de navigation centrés avec menus déroulants -->
            @include('partials.navbar')

          
        </div>
    </header>

    <!-- Section Hero avec image thématique et filtre dégradé -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-tag">IFRS</div>
            <h1>IFRS 18 remplace IAS 1 : ce qui change dans la présentation de la performance</h1>
            <p>Nouveaux sous-totaux, indicateurs de gestion encadrés et présentation plus comparable : les points à préparer avant 2027.</p>
            <div class="hero-meta">19 juillet 2026 • 8 min de lecture</div>
        </div>
    </section>

    <!-- Contenu Principal -->
    <div class="main-container">
        
        <!-- Sommaire latéral -->
        <aside class="sidebar">
            <nav class="toc-box">
                <h3>Dans cet article</h3>
                <ul>
                    <li><a href="#pourquoi">Pourquoi IAS 1 est-elle remplacée ?</a></li>
                    <li><a href="#structure">Une structure plus définie du compte de résultat</a></li>
                    <li><a href="#indicateurs">Des indicateurs de gestion désormais encadrés</a></li>
                    <li><a href="#agreger">Agréger moins, expliquer mieux</a></li>
                    <li><a href="#consequences">Des conséquences sur le tableau des flux de trésorerie</a></li>
                    <li><a href="#dispositions">Que deviennent les autres dispositions d'IAS 1 ?</a></li>
                    <li><a href="#transition">Une transition rétrospective à préparer</a></li>
                    <li><a href="#projet">Comment organiser le projet IFRS 18 ?</a></li>
                    <li><a href="#anticiper">Anticiper pour préserver la qualité du reporting</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Corps de l'article -->
        <main class="article-content">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80" alt="Présentation IFRS 18" class="article-image-featured">

            <div class="article-section">
                <p>Publiée par l'International Accounting Standards Board en avril 2024, IFRS 18 « Présentation et informations à fournir dans les états financiers » remplace IAS 1. Elle s'appliquera aux exercices ouverts à compter du 1er janvier 2027, avec une application anticipée autorisée.</p>
                <p>IFRS 18 ne modifie pas les règles de comptabilisation et d'évaluation des actifs, passifs, produits et charges. Elle transforme toutefois la manière dont la performance est structurée dans le compte de résultat et expliquée dans les notes. Pour les groupes concernés, sa mise en œuvre suppose donc bien plus qu'une simple modification de format.</p>
            </div>

            <div id="pourquoi" class="article-section">
                <h2>Pourquoi IAS 1 est-elle remplacée ?</h2>
                <p>IAS 1 définissait les principes généraux de présentation des états financiers, mais imposait peu de sous-totaux dans le compte de résultat. Des indicateurs portant le même nom, comme le résultat opérationnel, pouvaient ainsi être calculés différemment d'une entreprise à l'autre.</p>
                <p>IFRS 18 vise à améliorer la comparabilité et la transparence de la performance financière autour de trois évolutions majeures :</p>
                <ul>
                    <li>une structure plus définie du compte de résultat ;</li>
                    <li>des informations encadrées sur les indicateurs de performance définis par la direction ;</li>
                    <li>des principes renforcés d'agrégation et de désagrégation.</li>
                </ul>
                <p>L'IFRS Foundation présente ces trois axes comme le cœur de la nouvelle norme. Consulter la présentation officielle d'IFRS 18.</p>
            </div>

            <div id="structure" class="article-section">
                <h2>Une structure plus définie du compte de résultat</h2>
                <p>IFRS 18 impose de classer les produits et les charges dans des catégories définies, notamment les catégories opérationnelle, investissement et financement. Les impôts sur le résultat et les activités abandonnées sont présentés séparément lorsqu'ils sont applicables.</p>
                <p>La norme introduit deux sous-totaux obligatoires :</p>
                <ul>
                    <li>le résultat opérationnel ;</li>
                    <li>le résultat avant financement et impôts sur le résultat.</li>
                </ul>
                <p>Le résultat opérationnel devient ainsi un point de comparabilité commun. Il regroupe les produits et charges classés dans la catégorie opérationnelle, laquelle comprend les éléments qui ne relèvent pas des autres catégories prévues par la norme.</p>
                <p>La classification doit néanmoins être analysée au regard du modèle économique. Des règles particulières s'appliquent lorsque l'investissement dans des actifs ou le financement de clients constitue une activité principale, notamment pour certaines banques, institutions financières ou entités d'investissement.</p>
            </div>

            <div id="indicateurs" class="article-section">
                <h2>Des indicateurs de gestion désormais encadrés</h2>
                <p>De nombreuses entreprises communiquent des indicateurs tels que le résultat opérationnel ajusté ou un résultat avant éléments non récurrents. Lorsqu'un sous-total de produits et de charges est utilisé dans une communication publique pour présenter la vision de la direction et qu'il n'est pas défini par les normes IFRS, il peut constituer une mesure de performance définie par la direction, ou « management-defined performance measure ».</p>
                <p>IFRS 18 exige de regrouper les informations relatives à ces mesures dans une note unique. Pour chaque mesure concernée, l'entreprise devra notamment expliquer :</p>
                <ul>
                    <li>ce que l'indicateur représente et pourquoi il est utile ;</li>
                    <li>son mode de calcul ;</li>
                    <li>son rapprochement avec le total ou sous-total IFRS le plus directement comparable ;</li>
                    <li>l'effet fiscal et l'effet sur les intérêts ne donnant pas le contrôle des ajustements présentés ;</li>
                    <li>toute modification apportée à la définition ou au calcul de l'indicateur.</li>
                </ul>
                <p>Ces informations doivent permettre au lecteur de comprendre la mesure et de la comparer aux indicateurs définis par les normes IFRS. Consulter les exigences officielles relatives aux mesures de performance.</p>
            </div>

            <div id="agreger" class="article-section">
                <h2>Agréger moins, expliquer mieux</h2>
                <p>IFRS 18 renforce les principes permettant de déterminer quelles informations doivent être regroupées ou présentées séparément. Les éléments partageant des caractéristiques similaires peuvent être agrégés, tandis que les éléments présentant des caractéristiques différentes doivent être désagrégés lorsque cette séparation fournit une information significative.</p>
                <p>L'objectif est d'éviter aussi bien la multiplication de lignes peu utiles que le regroupement excessif dans des rubriques génériques comme « autres charges » ou « autres produits ».</p>
                <p>L'entreprise devra donc revoir simultanément :</p>
                <ul>
                    <li>les lignes du compte de résultat ;</li>
                    <li>les informations présentées dans les notes ;</li>
                    <li>les libellés utilisés ;</li>
                    <li>la ventilation des charges opérationnelles par nature, par fonction ou selon une présentation mixte lorsque celle-ci fournit l'information la plus utile.</li>
                </ul>
            </div>

            <div id="consequences" class="article-section">
                <h2>Des conséquences sur le tableau des flux de trésorerie</h2>
                <p>IFRS 18 entraîne également des modifications ciblées d'IAS 7. Pour les entreprises utilisant la méthode indirecte, le résultat opérationnel devient le point de départ du rapprochement des flux de trésorerie liés aux activités opérationnelles.</p>
                <p>Pour la plupart des entreprises, les options de classement des intérêts et dividendes sont également réduites : les intérêts et dividendes payés sont généralement classés en financement, tandis que les intérêts et dividendes reçus sont généralement classés en investissement. Des règles adaptées demeurent nécessaires pour les entités dont le financement ou l'investissement constitue une activité principale.</p>
                <p>Ces modifications visent à réduire la diversité des pratiques. Consulter le résumé du projet publié par l'IFRS Foundation.</p>
            </div>

            <div id="dispositions" class="article-section">
                <h2>Que deviennent les autres dispositions d'IAS 1 ?</h2>
                <p>Le remplacement d'IAS 1 ne signifie pas que tous ses principes disparaissent. L'IASB n'a pas réexaminé l'ensemble de la norme. Certaines dispositions ont été reprises dans IFRS 18 avec des modifications limitées, tandis que d'autres ont été transférées vers IAS 8 « Base de préparation des états financiers » ou IFRS 7 « Instruments financiers : informations à fournir ».</p>
                <p>Les équipes devront donc actualiser leurs manuels comptables, modèles d'états financiers et références internes plutôt que remplacer mécaniquement toute mention d'IAS 1 par IFRS 18.</p>
            </div>

            <div id="transition" class="article-section">
                <h2>Une transition rétrospective à préparer</h2>
                <p>IFRS 18 doit être appliquée rétrospectivement. Les informations comparatives devront être retraitées selon la nouvelle présentation. Lors de la première application, une entreprise devra notamment fournir, pour la période comparative précédant immédiatement l'adoption, un rapprochement entre les montants précédemment présentés sous IAS 1 et les montants retraités selon IFRS 18, ligne par ligne dans le compte de résultat.</p>
                <p>La date d'entrée en vigueur peut sembler éloignée, mais la nécessité de produire des comparatifs impose d'anticiper. Consulter les dispositions officielles relatives à la transition.</p>
            </div>

            <div id="projet" class="article-section">
                <h2>Comment organiser le projet IFRS 18 ?</h2>
                <p>Une préparation structurée peut être organisée autour de six chantiers :</p>
                <ul>
                    <li>cartographier les lignes actuelles du compte de résultat et leur classement futur ;</li>
                    <li>analyser les activités principales qui influencent la classification ;</li>
                    <li>recenser les indicateurs communiqués publiquement par la direction ;</li>
                    <li>évaluer les données nécessaires aux nouvelles notes et aux rapprochements ;</li>
                    <li>revoir le tableau des flux de trésorerie, les outils de consolidation et les modèles de reporting ;</li>
                    <li>préparer un compte de résultat comparatif à blanc avant l'exercice de première application.</li>
                </ul>
                <p>Le projet doit associer les équipes comptables, le contrôle de gestion, la communication financière, la fiscalité, les systèmes d'information et les auditeurs. Les indicateurs publiés en dehors des états financiers devront notamment être suivis de manière cohérente afin d'identifier ceux qui entrent dans le champ des mesures de performance définies par la direction.</p>
            </div>

            <div id="anticiper" class="article-section">
                <h2>Anticiper pour préserver la qualité du reporting</h2>
                <p>IFRS 18 ne change pas le résultat net uniquement par son entrée en vigueur, puisqu'elle porte principalement sur la présentation et les informations à fournir. Elle peut néanmoins modifier sensiblement la lecture de la performance, les sous-totaux mis en avant et les processus de production du reporting.</p>
                <p>Les entreprises qui commencent tôt pourront tester leurs choix de classement, fiabiliser les données comparatives et expliquer les nouveaux indicateurs à leur gouvernance avant la première publication obligatoire.</p>
                <p><em>Cet article présente une synthèse générale d'IFRS 18. Les conséquences doivent être analysées en fonction des activités, des transactions et de la communication financière propres à chaque entité.</em></p>
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

    <!-- Script JavaScript pour la gestion des menus déroulants -->
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