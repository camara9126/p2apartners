<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    <title>P2A Partners · Expertise Comptable Sénégal & OHADA</title>

    <!-- Bootstrap 5 + Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/jpeg" />

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
    </style>
    
    <style>
        /* ----- VARIABLES & RESET ----- */
        :root {
            --primary: #0b2545;
            --primary-light: #13315c;
            --accent: #1d4ed8;
            --accent-hover: #1e40af;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --bg-light: #f8fafc;
            --white: #ffffff;
            --border-color: #e2e8f0;
            --shadow-card: 0 16px 32px -8px rgba(11, 37, 69, 0.08);
        }

        /* ----- HERO (visuel abstrait) ----- */
        .hero {
            position: relative;
            background: linear-gradient(135deg, rgba(11, 37, 69, 0.92) 0%, rgba(19, 49, 92, 0.85) 100%),
                url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 6rem 1.5rem 5rem;
        }

        .hero h1 {
            font-size: 2.6rem;
            font-weight: 800;
            line-height: 1.15;
            max-width: 850px;
            letter-spacing: -0.02em;
        }

        .hero p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 1rem 0 2rem;
        }

        .btn-primary {
            background: var(--accent);
            color: var(--white);
            padding: 0.8rem 1.6rem;
            border-radius: 6px;
            font-weight: 600;
            display: inline-block;
            box-shadow: 0 4px 14px rgba(29, 78, 216, 0.35);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(29, 78, 216, 0.45);
        }

        .btn-outline {
            background: transparent;
            color: var(--white);
            padding: 0.8rem 1.6rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 6px;
            font-weight: 600;
            display: inline-block;
        }
        .btn-outline:hover {
            border-color: var(--white);
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-2px);
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: center;
        }

        /* ----- SECTION GENERIQUE ----- */
        .section-tag {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--accent);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .section-header h2 {
            font-size: 2rem;
            color: var(--primary);
            font-weight: 700;
        }

        /* ----- SERVICES (grille responsive) ----- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
        }

        .service-card {
            background: var(--white);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 2rem 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 180px;
        }
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--accent);
            opacity: 0;
            transition: 0.3s;
        }
        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-card);
            border-color: transparent;
        }
        .service-card:hover::before {
            opacity: 1;
        }
        .service-card .service-number {
            font-size: 0.8rem;
            color: var(--text-muted);
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .service-card h3 {
            font-size: 1.15rem;
            color: var(--primary);
            font-weight: 600;
            margin: 1rem 0 0;
        }
        .service-card .service-arrow {
            background: #f1f5f9;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            transition: 0.3s;
            margin-top: 0.5rem;
        }
        .service-card:hover .service-arrow {
            background: var(--accent);
            color: var(--white);
            transform: translateX(4px);
        }
        .service-title-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        /* ----- SPLIT SECTIONS (responsive) ----- */
        .split-section {
            padding: 4rem 1.5rem;
            background: var(--bg-light);
        }
        .split-section.bg-white {
            background: var(--white);
        }

        .split-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            align-items: center;
        }
        .split-container.reverse {
            direction: rtl;
        }
        .split-container.reverse>* {
            direction: ltr;
        }

        .split-img-wrapper {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 40px -15px rgba(11, 37, 69, 0.15);
        }
        .split-img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: transform 0.5s ease;
            display: block;
        }
        .split-img-wrapper:hover .split-img {
            transform: scale(1.03);
        }

        .split-content h2 {
            font-size: 2.1rem;
            color: var(--primary);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }
        .split-content p {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.7;
        }

        /* ----- STATS (responsive) ----- */
        .stats-section {
            background: var(--primary);
            color: var(--white);
            padding: 4rem 1.5rem;
        }
        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            text-align: center;
        }
        .stat-box {
            border-left: 2px solid rgba(255, 255, 255, 0.15);
            padding-left: 1.5rem;
            text-align: left;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            letter-spacing: -1px;
        }
        .stat-label {
            font-size: 0.95rem;
            color: #94a3b8;
        }

        /* ----- INSIGHTS (responsive) ----- */
        .insights-section {
            background: var(--white);
            padding: 4rem 1.5rem;
        }
        .insights-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 2.5rem;
            gap: 1rem;
        }
        .insights-header h2 {
            font-size: 2rem;
            color: var(--primary);
            font-weight: 700;
        }
        .insights-all {
            color: var(--primary);
            font-weight: 600;
            white-space: nowrap;
        }
        .insights-all:hover {
            color: var(--accent);
        }

        .insights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        .insight-card {
            background: var(--bg-light);
            padding: 2rem 1.5rem;
            border-radius: 10px;
            border: 1px solid var(--border-color);
            transition: 0.3s;
        }
        .insight-card:hover {
            transform: translateY(-4px);
            background: var(--white);
            box-shadow: var(--shadow-card);
            border-color: transparent;
        }
        .insight-tag {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--accent);
            font-weight: 700;
        }
        .insight-card h3 {
            font-size: 1.1rem;
            color: var(--primary);
            font-weight: 600;
            margin: 0.75rem 0 0.5rem;
        }
        .insight-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        /* ----- NEWSLETTER (responsive) ----- */
        .newsletter-section {
            background: var(--bg-light);
            padding: 4rem 1.5rem;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }
        .newsletter-container {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        .newsletter-content h2 {
            font-size: 2rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .newsletter-content p {
            color: var(--text-muted);
            font-size: 1rem;
        }
        .newsletter-form {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            box-shadow: 0 12px 24px -6px rgba(11, 37, 69, 0.06);
        }
        .form-group label {
            font-size: 0.85rem;
            color: var(--primary);
            font-weight: 600;
            display: block;
            margin-bottom: 0.5rem;
        }
        .form-row {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }
        .form-row input {
            flex: 1;
            padding: 0.8rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 0.95rem;
            background: var(--bg-light);
            outline: none;
            transition: 0.3s;
            min-width: 180px;
        }
        .form-row input:focus {
            border-color: var(--accent);
            background: var(--white);
            box-shadow: 0 0 0 3px rgba(29, 78, 216, 0.1);
        }
        .form-row .btn-subscribe {
            background: var(--accent);
            color: var(--white);
            padding: 0.8rem 1.8rem;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            white-space: nowrap;
        }
        .form-row .btn-subscribe:hover {
            background: var(--accent-hover);
            transform: translateY(-2px);
        }

        /* ----- FOOTER ----- */
        footer {
            background: var(--primary);
            color: var(--white);
            padding: 3rem 1.5rem 1.5rem;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .footer-col h4 {
            color: #93c5fd;
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 1rem;
            letter-spacing: 0.3px;
        }
        .footer-col p,
        .footer-col ul {
            font-size: 0.9rem;
            color: #cbd5e1;
            list-style: none;
            line-height: 1.8;
        }
        .footer-col ul li {
            margin-bottom: 0.4rem;
        }
        .footer-col a {
            color: #cbd5e1;
            transition: 0.2s;
        }
        .footer-col a:hover {
            color: var(--white);
            padding-left: 4px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
            color: #94a3b8;
        }
        .footer-bottom-links {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }
        .footer-bottom-links a {
            color: #94a3b8;
        }
        .footer-bottom-links a:hover {
            color: var(--white);
        }

        /* ----- RESPONSIVE (mobile first) ----- */
        @media (max-width: 992px) {
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
            .stat-box:last-child {
                grid-column: span 2;
                text-align: center;
                border-left: none;
                padding-left: 0;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 4rem 1rem 3rem;
            }
            .hero h1 {
                font-size: 2rem;
            }
            .hero p {
                font-size: 1rem;
            }

            .split-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .split-container.reverse {
                direction: ltr;
            }
            .split-img {
                height: 220px;
            }
            .split-content h2 {
                font-size: 1.8rem;
            }

            .services-grid {
                grid-template-columns: 1fr 1fr;
            }
            .service-card {
                min-height: 140px;
                padding: 1.5rem 1rem;
            }
            .service-card h3 {
                font-size: 1rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .stat-box {
                border-left: none;
                padding-left: 0;
                text-align: center;
            }
            .stat-box:last-child {
                grid-column: span 1;
            }

            .newsletter-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .form-row {
                flex-direction: column;
            }
            .form-row input {
                width: 100%;
                min-width: unset;
            }
            .form-row .btn-subscribe {
                width: 100%;
                text-align: center;
            }

            .footer-grid {
                gap: 1.8rem;
            }
            .footer-bottom {
                flex-direction: column;
                gap: 0.8rem;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            .hero h1 {
                font-size: 1.7rem;
            }
            .btn-primary,
            .btn-outline {
                width: 100%;
                text-align: center;
            }
            .hero-buttons {
                flex-direction: column;
                width: 100%;
            }
            .hero-buttons a {
                width: 100%;
            }
            .split-content h2 {
                font-size: 1.5rem;
            }
            .insights-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }

    </style>
</head>
<body>

    <!-- ===== HEADER / NAVBAR ===== -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#ffff] text-[#0b131d]">
        <div class="flex items-center space-x-2">
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
        </div>

        <!-- NAVIGATION PRINCIPALE AVEC MENUS DEROULANTS -->
        @include('partials.navbar')

    </header>

    <!-- ===== HERO ===== -->
    <section class="hero">
        <div class="max-w-6xl mx-auto">
            <h1>À vos côtés, quand les chiffres engagent l'avenir.</h1>
            <p>Expertise comptable, audit et conseil stratégique pour les organisations qui évoluent au Sénégal et dans l'espace OHADA.</p>
            <div class="hero-buttons">
                <a href="contact" class="btn-primary">Prendre rendez-vous →</a>
                <a href="serviceaccompagnement" class="btn-outline">Découvrir nos expertises</a>
            </div>
        </div>
    </section>

    <!-- ===== SERVICES ===== -->
    <section class="py-12 px-4 max-w-7xl mx-auto">
        <div class="section-tag">NOS LIGNES DE SERVICE</div>
        <div class="section-header mb-8">
            <h2>Une offre complète pour piloter la performance</h2>
        </div>

        <div class="services-grid">
            <a href="expertisecomptable" class="service-card">
                <span class="service-number">01</span>
                <div class="service-title-row">
                    <h3>Expertise comptable</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="audit" class="service-card">
                <span class="service-number">02</span>
                <div class="service-title-row">
                    <h3>Audit &amp; commissariat</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="fiscalité" class="service-card">
                <span class="service-number">03</span>
                <div class="service-title-row">
                    <h3>Fiscalité &amp; conformité</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="conseiletorganisation" class="service-card">
                <span class="service-number">04</span>
                <div class="service-title-row">
                    <h3>Conseil &amp; organisation</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="paieetsocial" class="service-card">
                <span class="service-number">05</span>
                <div class="service-title-row">
                    <h3>Paie &amp; social</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="conseilfinancier" class="service-card">
                <span class="service-number">06</span>
                <div class="service-title-row">
                    <h3>Conseil Financier</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="assistancejuridique" class="service-card">
                <span class="service-number">07</span>
                <div class="service-title-row">
                    <h3>Assistance Juridique</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
        </div>
    </section>

    <!-- ===== SPLIT 1 ===== -->
    <section class="split-section">
        <div class="split-container">
            <div class="split-img-wrapper">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1000&q=80" alt="Collaboration" class="split-img" loading="lazy" />
            </div>
            <div class="split-content">
                <div class="section-tag">P2A PARTNERS</div>
                <h2>La relation d'abord.</h2>
                <p>Nous travaillons au plus près des dirigeants et de leurs équipes. Un interlocuteur responsable, des échanges directs et des livrables conçus pour être immédiatement opérationnels : notre méthode commence par l'écoute active et se mesure dans l'action concrète.</p>
            </div>
        </div>
    </section>

    <!-- ===== SPLIT 2 ===== -->
    <section class="split-section bg-white">
        <div class="split-container reverse">
            <div class="split-img-wrapper">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1000&q=80" alt="Standards internationaux" class="split-img" loading="lazy" />
            </div>
            <div class="split-content">
                <div class="section-tag">P2A PARTNERS</div>
                <h2>Une expertise locale. Des standards internationaux.</h2>
                <p>Parce que vos ambitions ne s'arrêtent pas aux frontières, notre cabinet combine un ancrage territorial fort et une maîtrise pointue des normes internationales (IFRS, réglementations globales). Nous transformons la complexité réglementaire en levier de performance.</p>
            </div>
        </div>
    </section>

    <!-- ===== STATS (réintégrée) ===== -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-box">
                <div class="stat-number">20+</div>
                <div class="stat-label">Années d'expérience cumulée des associés</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">7</div>
                <div class="stat-label">Lignes de service coordonnées en synergie</div>
            </div>
            <div class="stat-box">
                <div class="stat-number" style="font-size: 2.2rem;">OHADA &amp; Monde</div>
                <div class="stat-label">Une expertise locale ouverte sur l'international</div>
            </div>
        </div>
    </section>

    <!-- ===== INSIGHTS (réintégrée) ===== -->
    <section class="insights-section">
        <div class="max-w-7xl mx-auto">
            <div class="insights-header">
                <div>
                    <div class="section-tag">INSIGHTS</div>
                    <h2>Points de vue utiles</h2>
                    <p style="color: var(--text-muted); font-size: 0.95rem;">Analyses stratégiques pour comprendre les règles, anticiper les risques et structurer vos décisions.</p>
                </div>
                <a href="insights" class="insights-all">Tous les articles →</a>
            </div>
            <div class="insights-grid">
                <a href="insights#btn-fiscalite" class="insight-card">
                    <div>
                        <span class="insight-tag">FISCALITÉ</span>
                        <h3>Fiscalité sénégalaise : préparer un contrôle avant l'avis</h3>
                        <p>Une documentation rigoureuse réduit l'incertitude et fluidifie le dialogue avec l'administration.</p>
                    </div>
                </a>
                <a href="insights#btn-syscohada" class="insight-card">
                    <div>
                        <span class="insight-tag">SYSCOHADA</span>
                        <h3>Clôture SYSCOHADA : organiser un calendrier réellement utile</h3>
                        <p>Structurez les responsabilités pour sécuriser la qualité de vos états financiers.</p>
                    </div>
                </a>
                <a href="insights#btn-ifrs" class="insight-card">
                    <div>
                        <span class="insight-tag">IFRS</span>
                        <h3>IFRS 18 remplace IAS 1 : ce qui change dans la performance</h3>
                        <p>Nouveaux sous-totaux et indicateurs encadrés : les points clés à préparer avant 2027.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== NEWSLETTER (réintégrée) ===== -->
    <section class="newsletter-section">
        <div class="newsletter-container">
            <div class="newsletter-content">
                <div class="section-tag">NEWSLETTER</div>
                <h2>Recevez nos prochaines analyses</h2>
                <p>Une veille comptable, fiscale et financière de haute précision envoyée à fréquence mesurée.</p>
            </div>
            <div class="newsletter-form">
                <div class="form-group">
                    <label for="email">Votre adresse email professionnelle</label>
                    <div class="form-row">
                        <input type="email" id="email" placeholder="nom@entreprise.com" />
                        <button class="btn-subscribe">S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h4>P2A PARTNERS</h4>
                <p>Expertise Comptable, Audit et Conseil stratégique pour accompagner durablement les organisations au Sénégal et à l'international.</p>
            </div>
            <div class="footer-col">
                <h4>Expertises</h4>
                <ul>
                    <li><a href="expertisecomptable">Expertise comptable</a></li>
                    <li><a href="audit">Audit &amp; commissariat</a></li>
                    <li><a href="fiscalité">Fiscalité &amp; conformité</a></li>
                    <li><a href="conseiletorganisation">Conseil &amp; organisation</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Cabinet</h4>
                <ul>
                    <li><a href="apropos">Qui nous sommes</a></li>
                    <li><a href="actualites">Actualités</a></li>
                    <li><a href="carrières">Carrières</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Bureau de Dakar</h4>
                <p>Villa n° 90, Sacré-Cœur 3<br />Dakar, Sénégal<br />contact@p2apartners.com</p>
                <p style="margin-top: 0.8rem; font-size:0.8rem; color:#93c5fd;">Membre de l'ONECCA</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 P2A Partners. Tous droits réservés.</p>
            <div class="footer-bottom-links">
                <a href="#">Mentions légales</a>
                <a href="#">Politique de confidentialité</a>
            </div>
        </div>
    </footer>

    <!-- ===== SCRIPT MOBILE MENU ===== -->
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