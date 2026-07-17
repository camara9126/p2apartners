<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site en construction</title>
  <!-- Font Awesome pour les icônes (gratuit) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
      min-height: 100vh;
      /* background: linear-gradient(145deg, #0b1a2e 0%, #1a2f3f 100%); */
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      position: relative;
      color: #eef5fa;
    }

    /* animation de fond subtile */
    body::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 20% 30%, rgba(0, 180, 255, 0.08), transparent 60%),
                  radial-gradient(circle at 80% 70%, rgba(0, 255, 200, 0.06), transparent 50%);
      pointer-events: none;
    }

    .card {
      background: #327eb1;
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 3.5rem 3.5rem 3rem 3rem;
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), 0 0 0 1px rgba(255, 255, 255, 0.03) inset;
      max-width: 720px;
      width: 100%;
      padding: 3.5rem 2.8rem;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.4s ease;
      position: relative;
      z-index: 2;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 40px 70px rgba(0, 0, 0, 0.7), 0 0 0 1px rgba(255, 255, 255, 0.06) inset;
    }

    /* icône engrenage / construction */
    .icon-wrapper {
      display: inline-block;
      background: rgba(255, 215, 100, 0.08);
      padding: 1.2rem 1.2rem 0.8rem 1.2rem;
      border-radius: 50%;
      margin-bottom: 1.8rem;
      border: 1px solid rgba(255, 215, 100, 0.15);
      backdrop-filter: blur(4px);
    }

    .icon-wrapper i {
      font-size: 4.5rem;
      color: #f7d44a;
      filter: drop-shadow(0 6px 12px rgba(255, 200, 50, 0.25));
      animation: pulseRotate 4s infinite ease-in-out;
    }

    @keyframes pulseRotate {
      0% { transform: rotate(0deg) scale(1); }
      50% { transform: rotate(12deg) scale(1.08); }
      100% { transform: rotate(0deg) scale(1); }
    }

    h1 {
      font-size: 2.8rem;
      font-weight: 600;
      letter-spacing: -0.02em;
      margin-bottom: 0.6rem;
      background: linear-gradient(to right, #f6e9b2, #edcd6c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-shadow: 0 2px 10px rgba(245, 215, 123, 0.2);
    }

    .subhead {
      font-size: 1.2rem;
      font-weight: 300;
      color: #ebf4fa;
      margin-bottom: 2.2rem;
      letter-spacing: 0.02em;
      border-bottom: 1px dashed rgba(255, 255, 255, 0.08);
      padding-bottom: 1.2rem;
    }

    .message-box {
      background: rgba(0, 0, 0, 0.2);
      border-radius: 2.5rem;
      padding: 1.8rem 2rem;
      margin: 1.8rem 0 2.2rem;
      border-left: 3px solid #f7d44a;
      border-right: 3px solid transparent;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .message-box p {
      font-size: 1.15rem;
      line-height: 1.6;
      color: #dce9f2;
      font-weight: 300;
    }

    .message-box i {
      color: #f7d44a;
      margin: 0 6px;
    }

    .status-badge {
      display: inline-block;
      background: #f7d44a20;
      backdrop-filter: blur(4px);
      border: 1px solid #f7d44a40;
      padding: 0.5rem 1.8rem;
      border-radius: 60px;
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      color: #f7d44a;
      font-weight: 500;
      margin-bottom: 1.5rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .status-badge i {
      margin-right: 8px;
      font-size: 0.8rem;
    }

    .progress-container {
      background: rgba(255, 255, 255, 0.06);
      border-radius: 40px;
      height: 6px;
      width: 100%;
      margin: 2.2rem 0 1.2rem;
      overflow: hidden;
      box-shadow: inset 0 1px 4px rgba(0,0,0,0.4);
    }

    .progress-bar {
      height: 100%;
      width: 70%;
      background: linear-gradient(90deg, #f7d44a, #f5b342);
      border-radius: 40px;
      box-shadow: 0 0 12px #f7d44a80;
      animation: shimmer 2.6s infinite;
    }

    @keyframes shimmer {
      0% { opacity: 0.7; }
      50% { opacity: 1; }
      100% { opacity: 0.7; }
    }

    .info-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem 2.2rem;
      margin-top: 2rem;
      font-size: 0.95rem;
      color: #aac2d4;
    }

    .info-grid span i {
      color: #f7d44a;
      margin-right: 10px;
      width: 1.2rem;
      opacity: 0.8;
    }

    .info-grid span {
      display: inline-flex;
      align-items: center;
      background: rgba(255,255,255,0.02);
      padding: 0.3rem 0.8rem 0.3rem 0.4rem;
      border-radius: 40px;
      border: 1px solid rgba(255,255,255,0.03);
    }

    .footer-note {
      margin-top: 2.5rem;
      font-size: 0.85rem;
      color: #6f8a9c;
      letter-spacing: 0.4px;
      border-top: 1px solid rgba(255,255,255,0.04);
      padding-top: 1.8rem;
      display: flex;
      justify-content: center;
      gap: 1.8rem;
      flex-wrap: wrap;
    }

    .footer-note a {
      color: #b6d0e0;
      text-decoration: none;
      transition: color 0.2s;
      border-bottom: 1px dotted transparent;
    }

    .footer-note a:hover {
      color: #f7d44a;
      border-bottom-color: #f7d44a60;
    }

    /* responsive */
    @media (max-width: 550px) {
      .card {
        padding: 2.4rem 1.5rem;
        border-radius: 2.5rem;
      }
      h1 {
        font-size: 2.2rem;
      }
      .icon-wrapper i {
        font-size: 3.5rem;
      }
      .message-box {
        padding: 1.2rem 1rem;
      }
      .info-grid {
        flex-direction: column;
        align-items: center;
        gap: 0.8rem;
      }
    }

    /* petite touche de grille */
    .grid-bg {
      position: absolute;
      inset: 0;
      background-image: 
        linear-gradient(rgba(255,255,255,0.01) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.01) 1px, transparent 1px);
      background-size: 40px 40px;
      pointer-events: none;
      z-index: 0;
      opacity: 0.3;
    }
  </style>
</head>
<body>
  <!-- fond grille discrète -->
  <div class="grid-bg"></div>

  <div class="card">
    <!-- icône principale -->
    <div class="icon-wrapper">
      <i class="fas fa-hard-hat"></i>
    </div>

    <!-- Badge "en cours" -->
    <div class="status-badge">
      <i class="fas fa-circle" style="font-size: 0.5rem; vertical-align: middle;"></i> EN CONSTRUCTION
    </div>
    <p>
        <img src="images/logo.jpeg" width="100" alt="">
        <h3>P2APARTNERS</h3>
    </p>

    <h1>Bientôt disponible</h1>
    <div class="subhead">
      <i class="fas fa-code" style="margin-right: 8px; opacity: 0.6;"></i> 
      Nous façonnons quelque chose de nouveau
    </div>

    <!-- message principal -->
    <div class="message-box">
      <p>
        <i class="fas fa-wrench"></i> 
        Ce site est actuellement en développement. 
        <i class="fas fa-cogs"></i> <br>
        Il n'est pas encore accessible, mais nous travaillons dur pour vous offrir une expérience exceptionnelle.
      </p>
    </div>

    <!-- barre de progression symbolique -->
    <div class="progress-container">
      <div class="progress-bar"></div>
    </div>
    <span style="font-size: 0.8rem; color: #f5f6f6; letter-spacing: 0.6px;">
      <i class="far fa-clock"></i> Avancement estimé ~ 70%
    </span>

    <!-- infos supplémentaires -->
    <div class="info-grid">
      <span><i class="fas fa-phone"></i> +221 78 581 35 66</span>
      <span><i class="fas fa-envelope"></i> contact@p2apartners.com</span>
      <span><i class="fas fa-bell"></i> Restez à l'écoute</span>
    </div>

    <!-- footer liens / réseaux -->
    <div class="footer-note">
      <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#"><i class="fas fa-rss"></i> Flux</a>
      <span style="color: #4a6679; border: none;">
        <i class="fas fa-shield-alt"></i> <?= now()->year ?>
      </span>
    </div>
  </div>
</body>
</html>