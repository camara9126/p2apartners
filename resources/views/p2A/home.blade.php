<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2A Partners - Expertise Comptable, Audit et Conseil au Sénégal et dans l'espace OHADA</title>
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
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        /* Navigation haut de gamme */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
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
            padding: 1rem 2.5rem;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            text-decoration: none;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: var(--primary);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 0.95rem;
            box-shadow: 0 4px 12px rgba(11, 37, 69, 0.15);
        }

        .logo-text {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--primary);
            letter-spacing: 0.5px;
            line-height: 1.1;
        }

        .logo-text span {
            display: block;
            font-size: 0.65rem;
            font-weight: 500;
            color: var(--text-muted);
            letter-spacing: 1.5px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
            align-items: center;
            margin: 0 auto;
        }

        .nav-links > li {
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-main);
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.5rem 0;
            transition: var(--transition-smooth);
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        /* Menus Déroulants (Dropdown UX amélioré) */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: var(--white);
            min-width: 270px;
            box-shadow: 0 12px 24px -4px rgba(0, 0, 0, 0.08), 0 0 0
        1px rgba(0, 0, 0, 0.04);
                    border-radius: 8px;
                    padding: 0.6rem 0;
                    z-index: 1001;
                    list-style: none;
                    flex-direction: column;
                    transform: translateY(8px);
                    opacity: 0;
                    transition: var(--transition-smooth);
                }

                .dropdown-content li {
                    width: 100%;
                }

                .dropdown-content a {
                    padding: 0.65rem 1.25rem;
                    color: var(--text-main);
                    white-space: nowrap;
                    font-size: 0.88rem;
                    font-weight: 400;
                    transition: var(--transition-smooth);
                }

                .dropdown-content a:hover {
                    background-color: #f1f5f9;
                    color: var(--accent);
                    padding-left: 1.4rem;
                }

                .dropdown.active .dropdown-content,
                .dropdown:hover .dropdown-content {
                    display: flex;
                    transform: translateY(0);
                    opacity: 1;
                }

                .arrow-down {
                    font-size: 0.6rem;
                    color: var(--text-muted);
                    transition: transform 0.3s ease;
                }

                .dropdown:hover .arrow-down {
                    transform: rotate(180deg);
                }

                /* Sélecteur de langue */
                .lang-switch {
                    font-size: 0.85rem;
                    font-weight: 600;
                    color: var(--primary);
                    text-decoration: none;
                    padding: 0.4rem 0.8rem;
                    border: 1px solid var(--border-color);
                    border-radius: 6px;
                    transition: var(--transition-smooth);
                    background: var(--white);
                }

                .lang-switch:hover {
                    border-color: var(--accent);
                    color: var(--accent);
                    background: #f8fafc;
                }

                /* Section Hero (Visuel IA / Abstrait Corporate Lumineux) */
                .hero {
                    position: relative;
                    background-image: linear-gradient(135deg, rgba(11, 37, 69,
        0.92) 0%, rgba(19, 49, 92, 0.85) 100%),
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
                    gap: 1.2rem;
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
                    grid-template-columns: repeat(3, 1fr);
                    gap: 1.5rem;
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
                    min-height: 220px;
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

                /* Section 3 & 4 : Sections alternées avec design épuré et
        visuels IA/Minimalistes */
        .split-section {
            background-color: var(--bg-light);
            padding: 6rem 2.5rem;
        }

        .split-container {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
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
            gap: 3rem;
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
            gap: 0.5rem;
            transition: var(--transition-smooth);
        }

        .insights-all:hover {
            color: var(--accent);
            gap: 0.8rem;
        }

        .insights-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
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

        .newsletter-container {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

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
            gap: 0.6rem;
        }

        .form-group label {
            font-size: 0.85rem;
            color: var(--primary);
            font-weight: 600;
        }

        .form-row {
            display: flex;
            gap: 0.8rem;
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
            gap: 3rem;
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
            gap: 2rem;
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

        @media (max-width: 960px) {
            .nav-links {
                display: none;
            }
            .hero h1 {
                font-size: 2.6rem;
            }
            .split-container, .split-container.reverse,
        .newsletter-container, .stats-container {
                grid-template-columns: 1fr;
                gap: 2.5rem;
                direction: ltr;
            }
            .services-grid, .insights-grid {
                grid-template-columns: 1fr;
            }
            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            .footer-bottom-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <!-- En-tête / Navbar avec menus déroulants -->
    <header>
        <div class="nav-container">
            <a href="accueil" class="logo-area">
                <img src="images/logo.jpeg" width="70">
                <!-- <div class="logo-icon">P2A</div>
                <div class="logo-text">
                    P2A PARTNERS
                    <span>PARTNERS</span>
                </div> -->
            </a>

            <ul class="nav-links">
                <li class="dropdown">
                    <a href="clients" aria-haspopup="true" aria-expanded="false">
                        Qui nous accompagnons <span class="arrow-down">▼</span>
                    </a>
                    <ul class="dropdown-content">
                        <li><a href="servicesfinanciers">Services financiers</a></li>
                        <li><a href="industriesetmines">Industries & mines</a></li>
                        <li><a href="automobile">Automobile</a></li>
                        <li><a href="telecometmultimedia">Télécom & multimédia</a></li>
                        <li><a href="transportetlogistique">Transport & logistique</a></li>
                        <li><a href="serviceaccompagnement">Services</a></li>
                        <li><a href="ongetsecteur">ONG & secteur public</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="services" aria-haspopup="true" aria-expanded="false">
                        Ce que nous faisons <span class="arrow-down">▼</span>
                    </a>
                    <ul class="dropdown-content">
                        <li><a href="expertisecomptable">Expertise comptable</a></li>
                        <li><a href="audit">Audit & commissariat aux comptes</a></li>
                        <li><a href="fiscalité">Fiscalité & conformité</a></li>
                        <li><a href="conseiletorganisation">Conseil & organisation</a></li>
                        <li><a href="paieetsocial">Paie & social</a></li>
                        <li><a href="conseilfinancier">Conseil Financier</a></li>
                        <li><a href="assistancejuridique">Assistance Juridique</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="apropos" aria-haspopup="true" aria-expanded="false">
                        Qui nous sommes <span class="arrow-down">▼</span>
                    </a>
                    <ul class="dropdown-content">
                        <li><a href="apropos">Qui nous sommes</a></li>
                        <li><a href="carrières">Carrières</a></li>
                    </ul>
                </li>

                <li><a href="insights">Insights</a></li>
                <li><a href="actualites">Actualités</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>

            <div class="lang-area">
                <a href="#" class="lang-switch">FR | EN</a>
            </div>
        </div>
    </header>

    <!-- Section 1 : Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>À vos côtés, quand les chiffres engagent l'avenir.</h1>
            <p>Expertise comptable, audit et conseil stratégique pour les organisations qui évoluent au Sénégal et dans l'espace OHADA.</p>
            <div class="hero-buttons">
                <a href="contact" class="btn-primary">Prendre rendez-vous &rarr;</a>
                <a href="services" class="btn-outline">Découvrir nos expertises</a>
            </div>
        </div>
    </section>

    <!-- Section 2 : Nos lignes de service -->
    <section class="services-section">
        <div class="section-tag">NOS LIGNES DE SERVICE</div>
        <div class="section-header-row">
            <h2>Une offre complète pour piloter la performance</h2>
        </div>
        <div class="services-grid">
            <a href="expertisecomptable" class="service-card">
                <div class="service-number">01</div>
                <div class="service-title-row">
                    <h3>Expertise comptable</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="audit" class="service-card">
                <div class="service-number">02</div>
                <div class="service-title-row">
                    <h3>Audit & commissariat aux comptes</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="fiscalité" class="service-card">
                <div class="service-number">03</div>
                <div class="service-title-row">
                    <h3>Fiscalité & conformité</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="conseiletorganisation" class="service-card">
                <div class="service-number">04</div>
                <div class="service-title-row">
                    <h3>Conseil & organisation</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="paieetsocial" class="service-card">
                <div class="service-number">05</div>
                <div class="service-title-row">
                    <h3>Paie & social</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="conseilfinancier" class="service-card">
                <div class="service-number">06</div>
                <div class="service-title-row">
                    <h3>Conseil Financier</h3>
                    <span class="service-arrow">→</span>
                </div>
            </a>
            <a href="assistancejuridique" class="service-card" style="grid-column: span 3;">
                <div class="service-number">07</div>
                <div class="service-title-row">
                    <h3>Assistance Juridique</h3>
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
                <h2>La relation d'abord.</h2>
                <p>Nous travaillons au plus près des dirigeants et de leurs équipes. Un interlocuteur responsable, des échanges directs et des livrables conçus pour être immédiatement opérationnels : notre méthode commence par l'écoute active et se mesure dans l'action concrète.</p>
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
                <h2>Une expertise locale. Des standards internationaux.</h2>
                <p>Parce que vos ambitions ne s'arrêtent pas aux frontières, notre cabinet combine un ancrage territorial fort et une maîtrise pointue des normes internationales (IFRS, réglementations globales). Nous transformons la complexité réglementaire en levier de performance.</p>
            </div>
        </div>
    </section>

    <!-- Section 5 : Chiffres clés / Blocs sombres -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-box">
                <div class="stat-number">20+</div>
                <div class="stat-label">Années d'expérience cumulée
des associés</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">7</div>
                <div class="stat-label">Lignes de service coordonnées
en synergie</div>
            </div>
            <div class="stat-box">
                <div class="stat-number" style="font-size: 2.5rem;
padding-top: 0.3rem;">OHADA & Monde</div>
                <div class="stat-label">Une expertise locale ouverte
sur l'international</div>
            </div>
        </div>
    </section>

    <!-- Section 6 : Points de vue utiles (Insights) -->
    <section class="insights-section">
        <div class="insights-header">
            <div>
                <div class="section-tag" style="margin-bottom:
0;">INSIGHTS</div>
                <h2>Points de vue utiles</h2>
                <p style="color: var(--text-muted); font-size:
0.95rem; margin-top: 0.5rem;">Analyses stratégiques pour comprendre
les règles, anticiper les risques et structurer vos décisions.</p>
            </div>
            <a href="insights" class="insights-all">Tous les articles →</a>
        </div>
        <div class="insights-grid">
            <a href="insights/fiscalite-senegal" class="insight-card">
                <div>
                    <span class="insight-tag">FISCALITÉ</span>
                    <h3>Fiscalité sénégalaise : préparer un contrôle
avant l'avis</h3>
                    <p>Une documentation rigoureuse réduit
l'incertitude et fluidifie le dialogue avec l'administration.</p>
                </div>
            </a>
            <a href="insights/cloture-syscohada" class="insight-card">
                <div>
                    <span class="insight-tag">SYSCOHADA</span>
                    <h3>Clôture SYSCOHADA : organiser un calendrier
réellement utile</h3>
                    <p>Structurez les responsabilités pour sécuriser
la qualité de vos états financiers.</p>
                </div>
            </a>
            <a href="insights/ifrs-18" class="insight-card">
                <div>
                    <span class="insight-tag">IFRS</span>
                    <h3>IFRS 18 remplace IAS 1 : ce qui change dans la
performance</h3>
                    <p>Nouveaux sous-totaux et indicateurs encadrés :
les points clés à préparer avant 2027.</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Section 7 : Newsletter -->
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
                        <input type="email" id="email" placeholder="nom@entreprise.com">
                        <a href="#" class="btn-primary" style="display: flex; align-items: center; justify-content: center; border-radius: 6px;">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h4>P2A PARTNERS</h4>
                <p>Expertise Comptable, Audit et Conseil stratégique pour accompagner durablement les organisations au Sénégal et à l'international.</p>
            </div>
            <div class="footer-col">
                <h4>Expertises</h4>
                <ul>
                    <li><a href="expertisecomptable">Expertise comptable</a></li>
                    <li><a href="audit">Audit & commissariat</a></li>
                    <li><a href="fiscalité">Fiscalité & conformité</a></li>
                    <li><a href="conseiletorganisation">Conseil & organisation</a></li>
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
                <p>Villa n° 90, Sacré-Cœur 3<br>Dakar,
Sénégal<br>contact@p2apartners.com</p>
                <p style="margin-top: 1rem; font-size: 0.8rem; color:
#93c5fd;">Membre de l'ONECCA</p>
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

    <!-- Script JavaScript pour la gestion des menus déroulants sur mobile et desktop -->
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