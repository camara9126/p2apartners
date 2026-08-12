<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2A Partners - Expertise Comptable, Audit et Conseil au Sénégal et dans l'espace OHADA</title>
    <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon Image -->
    <link rel="shortcut icon" href="images/logo.jpeg">
       <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
                /* Styles globaux & Variables */
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
                    --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
                }

                body {
                    color: var(--text-main);
                    background-color: var(--bg-light);
                    /* line-height: 1.7; */
                    -webkit-font-smoothing: antialiased;
                }


                /* Section Hero (Visuel IA / Abstrait Corporate Lumineux) */
                .hero {
                    position: relative;
                    background-image: linear-gradient(135deg, rgba(11, 37, 69, 0.92) 0%, rgba(19, 49, 92, 0.85) 100%),
                    url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1920&q=80');
                    background-size: cover;
                    background-position: center;
                    color: var(--white);
                    padding: 8rem 2rem 7rem 2rem;
                    overflow: hidden;
                }

                .hero-content {
                    max-width: 1200px;
                    margin: 0 auto;
                    position: relative;
                    z-index: 2;
                }

                .hero h1 {
                    font-size: 3.8rem;
                    font-weight: 800;
                    margin-bottom: 1.5rem;
                    line-height: 1.12;
                    max-width: 850px;
                    letter-spacing: -0.5px;
                }

                .hero p {
                    font-size: 1.25rem;
                    color: #cbd5e1;
                    margin-bottom: 2.8rem;
                    max-width: 680px;
                    font-weight: 400;
                }

                .hero-buttons {
                    display: flex;
                    /* gap: 1.2rem; */
                    align-items: center;
                }

                .btn-primary {
                    background-color: var(--accent);
                    color: var(--white);
                    padding: 0.9rem 1.8rem;
                    border-radius: 6px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 0.95rem;
                    transition: var(--transition-smooth);
                    box-shadow: 0 4px 14px rgba(29, 78, 216, 0.35);
                }

                .btn-primary:hover {
                    background-color: var(--accent-hover);
                    transform: translateY(-2px);
                    box-shadow: 0 6px 20px rgba(29, 78, 216, 0.45);
                }

                .btn-outline {
                    background-color: transparent;
                    color: var(--white);
                    padding: 0.9rem 1.8rem;
                    border: 1px solid rgba(255, 255, 255, 0.3);
                    border-radius: 6px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 0.95rem;
                    transition: var(--transition-smooth);
                }

                .btn-outline:hover {
                    border-color: var(--white);
                    background-color: rgba(255, 255, 255, 0.08);
                    transform: translateY(-2px);
                }

                /* Section 2 : Nos lignes de service (Grille moderne) */
                .services-section {
                    background-color: var(--white);
                    padding: 6rem 2.5rem;
                    max-width: 1350px;
                    margin: 0 auto;
                }

                .section-tag {
                    font-size: 0.75rem;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    color: var(--accent);
                    margin-bottom: 1rem;
                    font-weight: 700;
                }

                .section-header-row {
                    margin-bottom: 3.5rem;
                }

                .section-header-row h2 {
                    font-size: 2.5rem;
                    color: var(--primary);
                    font-weight: 700;
                }

                .services-grid {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    /* gap: 1.5rem; */
                }

                .service-card {
                    padding: 2.5rem 2rem;
                    border: 1px solid var(--border-color);
                    border-radius: 10px;
                    text-decoration: none;
                    color: inherit;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    min-height: 200px;
                    transition: var(--transition-smooth);
                    background-color: var(--white);
                    position: relative;
                    overflow: hidden;
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
                    transition: var(--transition-smooth);
                }

                .service-card:hover {
                    border-color: transparent;
                    background-color: var(--white);
                    transform: translateY(-5px);
                    box-shadow: 0 16px 32px -8px rgba(11, 37, 69, 0.08);
                }

                .service-card:hover::before {
                    opacity: 1;
                }

                .service-number {
                    font-size: 0.85rem;
                    color: var(--text-muted);
                    font-weight: 600;
                    letter-spacing: 1px;
                }

                .service-title-row {
                    display: flex;
                    justify-content: space-between;
                    align-items: flex-end;
                    margin-top: 2rem;
                }

                .service-card h3 {
                    font-size: 1.25rem;
                    color: var(--primary);
                    font-weight: 600;
                    line-height: 1.35;
                }

                .service-arrow {
                    font-size: 1.2rem;
                    color: var(--text-muted);
                    transition: var(--transition-smooth);
                    background: #f1f5f9;
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .service-card:hover .service-arrow {
                    transform: translateX(4px);
                    background: var(--accent);
                    color: var(--white);
                }

        /* Section 3 & 4 : Sections alternées avec design épuré et visuels IA/Minimalistes */
        .split-section {
            background-color: var(--bg-light);
            padding: 6rem 2.5rem;
        }

        .split-container {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            /* gap: 5rem; */
            align-items: center;
        }

        .split-container.reverse {
            direction: rtl;
        }

        .split-container.reverse > * {
            direction: ltr;
        }

        .split-img-wrapper {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 40px -15px rgba(11, 37, 69, 0.15);
        }

        .split-img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .split-img-wrapper:hover .split-img {
            transform: scale(1.03);
        }

        .split-content h2 {
            font-size: 2.6rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            line-height: 1.2;
            font-weight: 700;
        }

        .split-content p {
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.8;
        }

        /* Section 5 : Chiffres clés / Blocs sombres architecturés */
        .stats-section {
            background-color: var(--primary);
            color: var(--white);
            padding: 5rem 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .stats-container {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* gap: 3rem; */
            position: relative;
            z-index: 2;
        }

        .stat-box {
            border-left: 2px solid rgba(255, 255, 255, 0.15);
            padding-left: 2rem;
        }

        .stat-number {
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: var(--white);
            letter-spacing: -1px;
        }

        .stat-label {
            font-size: 1rem;
            color: #94a3b8;
            font-weight: 400;
        }

        /* Section 6 : Insights modernes */
        .insights-section {
            background-color: var(--white);
            padding: 6rem 2.5rem;
            max-width: 1350px;
            margin: 0 auto;
        }

        .insights-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3.5rem;
        }

        .insights-header h2 {
            font-size: 2.4rem;
            color: var(--primary);
            margin-top: 0.5rem;
            font-weight: 700;
        }

        .insights-all {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            /* gap: 0.5rem; */
            transition: var(--transition-smooth);
        }

        .insights-all:hover {
            color: var(--accent);
            /* gap: 0.8rem; */
        }

        .insights-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* gap: 2rem; */
        }

        .insight-card {
            background: var(--bg-light);
            padding: 2.5rem 2rem;
            border-radius: 10px;
            border: 1px solid var(--border-color);
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: var(--transition-smooth);
        }

        .insight-card:hover {
            transform: translateY(-5px);
            background: var(--white);
            box-shadow: 0 16px 32px -8px rgba(11, 37, 69, 0.08);
            border-color: transparent;
        }

        .insight-tag {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--accent);
            font-weight: 700;
            margin-bottom: 1.2rem;
            display: inline-block;
        }

        .insight-card h3 {
            font-size: 1.2rem;
            color: var(--primary);
            margin-bottom: 1rem;
            line-height: 1.4;
            font-weight: 600;
        }

        .insight-card p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Section 7 : Newsletter Pro */
        .newsletter-section {
            background-color: var(--bg-light);
            padding: 6rem 2.5rem;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        /* .newsletter-container {
            max-width: 950px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        } */

        .newsletter-content h2 {
            font-size: 2.4rem;
            color: var(--primary);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .newsletter-content p {
            color: var(--text-muted);
            font-size: 1.05rem;
        }

        .newsletter-form {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 12px 24px -6px rgba(11, 37, 69, 0.06);
            border: 1px solid var(--border-color);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            /* gap: 0.6rem; */
        }

        .form-group label {
            font-size: 0.85rem;
            color: var(--primary);
            font-weight: 600;
        }

        .form-row {
            display: flex;
            /* gap: 0.8rem; */
        }

        .form-row input {
            flex: 1;
            padding: 0.9rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 0.95rem;
            outline: none;
            transition: var(--transition-smooth);
            background: var(--bg-light);
        }

        .form-row input:focus {
            border-color: var(--accent);
            background: var(--white);
            box-shadow: 0 0 0 3px rgba(29, 78, 216, 0.1);
        }

        /* Pied de page épuré */
        footer {
            background: var(--primary);
            color: var(--white);
            padding: 5rem 2.5rem 2rem 2.5rem;
        }

        .footer-container {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            /* gap: 3rem; */
            margin-bottom: 4rem;
        }

        .footer-col h4 {
            margin-bottom: 1.2rem;
            font-size: 1.05rem;
            color: #93c5fd;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .footer-col p, .footer-col ul {
            font-size: 0.9rem;
            color: #cbd5e1;
            list-style: none;
            line-height: 1.8;
        }

        .footer-col ul li {
            margin-bottom: 0.6rem;
        }

        .footer-col a {
            color: #cbd5e1;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .footer-col a:hover {
            color: var(--white);
            padding-left: 4px;
        }

        .footer-bottom {
            max-width: 1300px;
            margin: 0 auto;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            font-size: 0.85rem;
            color: #94a3b8;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-bottom-links {
            display: flex;
            /* gap: 2rem; */
        }

        .footer-bottom-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .footer-bottom-links a:hover {
            color: var(--white);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .services-grid, .insights-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
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
</head>
<body>

    <!-- En-tête / Navbar avec menus déroulants -->
    <header class="flex items-center justify-between px-6 lg:px-12 py-5 border-b border-gray-800 bg-[#ffff] text-[#0b131d]">
        <div class="flex items-center space-x-2">
            <div class="text-blue-500 font-bold text-xl tracking-wider flex items-center">
                <a href="/" class="logo-area">
                    <img src="images/logo.jpeg" width="70">
                    <!-- <div class="logo-icon">P2A</div>
                    <div class="logo-text">
                        P2A PARTNERS
                        <span>PARTNERS</span>
                    </div> -->
                </a>
            </div>
        </div>

        <!-- NAVIGATION PRINCIPALE AVEC MENUS DÉROULANTS -->
        @include('partials.navbar')

        
    </header>

    <!-- Section 1 : Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>{{ __('messages.À vos côtés, quand les chiffres engagent l\'avenir.') }}</h1>
            <p>{{ __('messages.Expertise comptable, audit et conseil stratégique pour les organisations qui évoluent au Sénégal et dans l\'espace OHADA.') }}</p>
            <div class="hero-buttons">
                <a href="contact" class="btn-primary">{{ __('messages.Prendre rendez-vous &rarr;') }}</a>
                <a href="serviceaccompagnement" class="btn-outline">{{ __('messages.Découvrir nos expertises') }}</a>
            </div>
        </div>
    </section>

    <!-- Section 2 : Nos lignes de service -->
    <section class="services-section">
        <div class="section-tag">{{ __('messages.NOS LIGNES DE SERVICE') }}</div>
        <div class="section-header-row">
            <h2>{{ __('messages.Une offre complète pour piloter la performance') }}</h2>
        </div>
        <div class="services-grid">
            <a href="expertisecomptable" class="service-card">
                <div class="service-number">01</div>
                <div class="service-title-row">
                    <h3>{{ __('messages.Expertise comptable') }}</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="audit" class="service-card">
                <div class="service-number">02</div>
                <div class="service-title-row">
                    <h3>{{ __('messages.Audit & commissariat aux comptes') }}</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="fiscalité" class="service-card">
                <div class="service-number">03</div>
                <div class="service-title-row">
                    <h3>{{ __('messages.Fiscalité & conformité') }}</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="conseiletorganisation" class="service-card">
                <div class="service-number">04</div>
                <div class="service-title-row">
                    <h3>{{ __('messages.Conseil & organisation') }}</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="paieetsocial" class="service-card">
                <div class="service-number">05</div>
                <div class="service-title-row">
                    <h3>{{ __('messages.Paie & social') }}</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="conseilfinancier" class="service-card">
                <div class="service-number">06</div>
                <div class="service-title-row">
                    <h3>{{ __('messages.Conseil Financier') }}</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="assistancejuridique" class="service-card" style="grid-column: span 3;">
                <div class="service-number">07</div>
                <div class="service-title-row">
                    <h3>{{ __('messages.Assistance Juridique') }}</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
        </div>
    </section>

    <!-- Section 3 : La relation d'abord (Visuel IA moderne - Collaboration) -->
    <section class="split-section">
        <div class="split-container">
            <div class="split-img-wrapper">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1000&q=80" alt="Collaboration professionnelle" class="split-img">
            </div>
            <div class="split-content">
                <div class="section-tag">P2A PARTNERS</div>
                <h2>{{ __('messages.La relation d\'abord.') }}</h2>
                <p>{{ __('messages.Nous travaillons au plus près des dirigeants et de leurs équipes. Un interlocuteur responsable, des échanges directs et des livrables conçus pour être immédiatement opérationnels : notre méthode commence par l\'écoute active et se mesure dans l\'action concrète.') }}</p>
            </div>
        </div>
    </section>

    <!-- Section 4 : Une expertise locale. Des standards internationaux. -->
    <section class="split-section" style="background-color: var(--white);">
        <div class="split-container reverse">
            <div class="split-img-wrapper">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1000&q=80" alt="Standards internationaux et vision globale" class="split-img">
            </div>
            <div class="split-content">
                <div class="section-tag">P2A PARTNERS</div>
                <h2>{{ __('messages.Une expertise locale. Des standards internationaux.') }}</h2>
                <p>{{ __('messages.Parce que vos ambitions ne s\'arrêtent pas aux frontières, notre cabinet combine un ancrage territorial fort et une maîtrise pointue des normes internationales (IFRS, réglementations globales). Nous transformons la complexité réglementaire en levier de performance.') }}</p>
            </div>
        </div>
    </section>

    <!-- Section 5 : Chiffres clés / Blocs sombres -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-box">
                <div class="stat-number">20+</div>
                <div class="stat-label">Années d'expérience cumulée des associés</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">7</div>
                <div class="stat-label">{{ __('messages.Lignes de service coordonnées en synergie') }}</div>
            </div>
            <div class="stat-box">
                <div class="stat-number" style="font-size: 2.5rem; padding-top: 0.3rem;">{{ __('messages.OHADA & Monde') }}</div>
                <div class="stat-label">{{ __('messages.Une expertise locale ouverte sur l\'international') }}</div>
            </div>
        </div>
    </section>

    <!-- Section 6 : Points de vue utiles (Insights) -->
    <section class="insights-section">
        <div class="insights-header">
            <div>
                <div class="section-tag" style="margin-bottom: 0;">{{ __('messages.INSIGHTS') }}</div>
                <h2>{{ __('messages.Points de vue utiles') }}</h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-top: 0.5rem;">{{ __('messages.Analyses stratégiques pour comprendre les règles, anticiper les risques et structurer vos décisions.') }}</p>
            </div>
            <a href="insights" class="insights-all">{{ __('messages.Tous les articles →') }}</a>
        </div>
        <div class="insights-grid">
            <a href="insights#btn-fiscalite" class="insight-card">
                <div>
                    <span class="insight-tag">{{ __('messages.FISCALITÉ') }}</span>
                    <h3>{{ __('messages.Fiscalité sénégalaise : préparer un contrôle avant l\'avis') }}</h3>
                    <p>Une documentation rigoureuse réduit l'incertitude et fluidifie le dialogue avec l'administration.</p>
                </div>
            </a>
            <a href="insights#btn-syscohada" class="insight-card">
                <div>
                    <span class="insight-tag">{{ __('messages.SYSCOHADA') }}</span>
                    <h3>{{ __('messages.Clôture SYSCOHADA : organiser un calendrier réellement utile') }}</h3>
                    <p>Structurez les responsabilités pour sécuriser la qualité de vos états financiers.</p>
                </div>
            </a>
            <a href="insights#btn-ifrs" class="insight-card">
                <div>
                    <span class="insight-tag">{{ __('messages.IFRS') }}</span>
                    <h3>{{ __('messages.IFRS 18 remplace IAS 1 : ce qui change dans la performance') }}</h3>
                    <p>{{ __('messages.Nouveaux sous-totaux et indicateurs encadrés : les points clés à préparer avant 2027.') }}</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Section 7 : Newsletter -->
    <section class="newsletter-section">
        <div class="newsletter-container">
            <div class="newsletter-content">
                <div class="section-tag">{{ __('messages.NEWSLETTER') }}</div>
                <h2>{{ __('messages.Recevez nos prochaines analyses') }}</h2>
                <p>{{ __('messages.Une veille comptable, fiscale et financière de haute précision envoyée à fréquence mesurée.') }}</p>
            </div>
            <div class="newsletter-form">
                <div class="form-group">
                    <label for="email">{{ __('messages.Votre adresse email professionnelle') }}</label>
                    <div class="form-row">
                        <input type="email" id="email" placeholder="nom@entreprise.com">
                        </div>
                        <div class="form-row">
                        <a href="#" class="btn btn-primary" style="border-radius: 6px;">{{ __('messages.S\'inscrire') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h4>{{ __('messages.P2A PARTNERS') }}</h4>
                <p>{{ __('messages.Expertise Comptable, Audit et Conseil stratégique pour accompagner durablement les organisations au Sénégal et à l\'international.') }}</p>
            </div>
            <div class="footer-col">
                <h4>{{ __('messages.Expertises') }}</h4>
                <ul>
                    <li><a href="expertisecomptable">{{ __('messages.Expertise comptable') }}</a></li>
                    <li><a href="audit">{{ __('messages.Audit & commissariat') }}</a></li>
                    <li><a href="fiscalité">{{ __('messages.Fiscalité & conformité') }}</a></li>
                    <li><a href="conseiletorganisation">{{ __('messages.Conseil & organisation') }}</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>{{ __('messages.Cabinet') }}</h4>
                <ul>
                    <li><a href="apropos">{{ __('messages.Qui nous sommes') }}</a></li>
                    <li><a href="actualites">{{ __('messages.Actualités') }}</a></li>
                    <li><a href="carrières">{{ __('messages.Carrières') }}</a></li>
                    <li><a href="contact">{{ __('messages.Contact') }}</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>{{ __('messages.Bureau de Dakar') }}</h4>
                <p>{{ __('messages.Villa n° 90, Sacré-Cœur 3<br>Dakar,') }}
Sénégal<br>contact@p2apartners.com</p>
                <p style="margin-top: 1rem; font-size: 0.8rem; color:
#93c5fd;">{{ __('messages.Membre de l\'ONECCA') }}</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 P2A Partners. Tous droits réservés.</p>
            <div class="footer-bottom-links">
                <a href="#">{{ __('messages.Mentions légales') }}</a>
                <a href="#">{{ __('messages.Politique de confidentialité') }}</a>
            </div>
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

  
</body>
</html>