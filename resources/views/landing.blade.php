<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoclick — Delivery Inteligente para tu Negocio</title>
    <meta name="description" content="Motoclick integra tus apps de delivery, despacha con tu propia flota y reduce comisiones hasta un 30%. Tracking SMS en tiempo real.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --primary: #FE7314;
            --primary-dark: #e05f05;
            --primary-light: #ff9a52;
            --primary-glow: rgba(254,115,20,.12);
            --dark: #1a1a1a;
            --dark-2: #2a2a2a;
            --dark-3: #333;
            --white: #ffffff;
            --gray-50: #fafafa;
            --gray-100: #f5f5f5;
            --gray-200: #e5e5e5;
            --gray-300: #d4d4d4;
            --gray-400: #a3a3a3;
            --gray-500: #737373;
            --gray-600: #525252;
            --radius: 16px;
        }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', system-ui, sans-serif;
            color: var(--dark);
            background: var(--white);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }
        img { max-width: 100%; display: block; }
        a { text-decoration: none; color: inherit; }

        /* ═══════════ NAVBAR ═══════════ */
        .nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 100;
            padding: 1rem 0;
            transition: all .35s ease;
        }
        .nav.scrolled {
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(16px);
            box-shadow: 0 1px 0 var(--gray-200);
        }
        .nav-inner {
            max-width: 1200px; margin: 0 auto; padding: 0 2rem;
            display: flex; align-items: center; justify-content: space-between;
        }
        .nav-brand img { height: 38px; border-radius: 8px; }
        
        /* Language Toggle in Nav */
        .nav-actions { display: flex; align-items: center; gap: 1.5rem; }
        .lang-toggle {
            display: flex; background: var(--gray-100); border-radius: 20px;
            padding: 3px; border: 1px solid var(--gray-200);
        }
        .lang-btn {
            padding: .35rem .8rem; border-radius: 17px; border: none; background: transparent;
            color: var(--gray-500); font-size: .75rem; font-weight: 700; font-family: inherit;
            cursor: pointer; transition: all .25s ease;
        }
        .lang-btn.active {
            background: var(--white); color: var(--primary); box-shadow: 0 2px 8px rgba(0,0,0,.08);
        }
        .lang-btn:not(.active):hover { color: var(--dark); background: rgba(0,0,0,.03); }

        .nav-links { display: flex; align-items: center; gap: 2rem; list-style: none; }
        .nav-links a {
            font-size: .875rem; font-weight: 500; color: var(--gray-600);
            transition: color .2s;
        }
        .nav-links a:hover { color: var(--dark); }
        .btn {
            display: inline-flex; align-items: center; gap: .5rem;
            padding: .7rem 1.6rem; border-radius: 10px;
            font-size: .875rem; font-weight: 600; font-family: inherit;
            border: none; cursor: pointer; transition: all .25s ease;
        }
        .btn-primary {
            background: var(--primary); color: var(--white);
            box-shadow: 0 2px 8px rgba(254,115,20,.25);
        }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-1px); box-shadow: 0 4px 16px rgba(254,115,20,.3); }
        .btn-outline {
            background: transparent; color: var(--dark);
            border: 1.5px solid var(--gray-300);
        }
        .btn-outline:hover { border-color: var(--dark); }

        /* ═══════════ HERO ═══════════ */
        .hero {
            padding: 6rem 2rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            background: var(--white);
        }
        .hero-inner { max-width: 800px; margin: 0 auto; position: relative; z-index: 2; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: .5rem;
            padding: .4rem 1rem .4rem .5rem;
            background: var(--gray-50); border: 1px solid var(--gray-200);
            border-radius: 100px; font-size: .8rem; font-weight: 500;
            color: var(--gray-600); margin-bottom: 1.5rem;
        }
        .hero-badge-dot {
            width: 8px; height: 8px; background: #22c55e;
            border-radius: 50%; animation: pulse-dot 2s infinite;
        }
        @keyframes pulse-dot {
            0%, 100% { opacity: 1; } 50% { opacity: .4; }
        }
        .hero h1 {
            font-size: 4rem; font-weight: 900; line-height: 1.05;
            letter-spacing: -.04em; color: var(--dark); margin-bottom: 1.5rem;
        }
        .hero h1 .highlight {
            background: linear-gradient(135deg, var(--primary), #ff6b00);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .hero-sub {
            font-size: 1.2rem; line-height: 1.6; color: var(--gray-500);
            max-width: 560px; margin: 0 auto 1.5rem;
        }
        .hero-actions { display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; }

        /* ═══════════ BANNER STRIP (dark bg) ═══════════ */
        .banner-strip {
            background: var(--dark);
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .banner-strip::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at center, rgba(254,115,20,.08) 0%, transparent 70%);
        }
        .banner-strip-inner {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        .banner-strip img {
            height: 100px;
            width: auto;
            margin: 0 auto;
            display: block;
            filter: drop-shadow(0 4px 30px rgba(254,115,20,.25));
        }
        .banner-strip .banner-tagline {
            color: var(--gray-400);
            font-size: .9rem;
            font-weight: 500;
            margin-top: 1rem;
            letter-spacing: .04em;
        }

        /* ═══════════ MOTORCYCLE SHOWCASE ═══════════ */
        .moto-showcase {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin: .5rem auto 0;
            padding: 0 0 1rem;
            overflow: visible;
        }
        .moto-image-wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .moto-image-wrapper img {
            width: 400px;
            height: auto;
            position: relative;
            z-index: 2;
            filter: drop-shadow(0 20px 50px rgba(254,115,20,.2)) drop-shadow(0 8px 20px rgba(0,0,0,.12));
            opacity: 0;
            transform: translateX(-120px) scale(.85) rotate(-3deg);
            transition: none;
        }
        .moto-image-wrapper img.animate {
            animation: motoRideIn 1.4s cubic-bezier(.22,1,.36,1) forwards;
        }
        .moto-image-wrapper img.parked {
            opacity: 1;
            transform: translateX(0) scale(1) rotate(0deg);
            animation: motoFloat 4s ease-in-out infinite;
        }
        @keyframes motoRideIn {
            0%   { opacity: 0; transform: translateX(-120px) scale(.85) rotate(-3deg); }
            20%  { opacity: 1; }
            60%  { transform: translateX(15px) scale(1.03) rotate(.5deg); }
            80%  { transform: translateX(-6px) scale(1) rotate(-.3deg); }
            100% { opacity: 1; transform: translateX(0) scale(1) rotate(0deg); }
        }
        @keyframes motoFloat {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-6px) rotate(.3deg); }
            50% { transform: translateY(-10px) rotate(-.2deg); }
            75% { transform: translateY(-4px) rotate(.2deg); }
        }

        /* Particle canvas */
        .particle-canvas {
            position: absolute;
            inset: 0;
            z-index: 1;
            pointer-events: none;
        }

        /* Speed lines behind motorcycle */
        .speed-lines {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            opacity: 0;
        }
        .speed-lines.animate {
            animation: speedShow 1.8s .1s ease forwards;
        }
        @keyframes speedShow {
            0% { opacity: 0; }
            20% { opacity: .8; }
            60% { opacity: .5; }
            100% { opacity: 0; }
        }
        .speed-line {
            position: absolute;
            height: 2px;
            border-radius: 2px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light), transparent);
        }
        .speed-line:nth-child(1) { top: 15%; left: 0; width: 30%; opacity: .7; animation-delay: 0s; }
        .speed-line:nth-child(2) { top: 28%; left: 4%; width: 22%; opacity: .5; }
        .speed-line:nth-child(3) { top: 42%; left: 1%; width: 35%; opacity: .6; }
        .speed-line:nth-child(4) { top: 56%; left: 6%; width: 18%; opacity: .4; }
        .speed-line:nth-child(5) { top: 70%; left: 2%; width: 28%; opacity: .5; }
        .speed-line:nth-child(6) { top: 82%; left: 5%; width: 20%; opacity: .35; }
        .speed-line:nth-child(7) { top: 36%; left: 3%; width: 15%; opacity: .3; }

        /* Glow behind moto */
        .moto-glow {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 380px; height: 380px;
            background: radial-gradient(circle, rgba(254,115,20,.15) 0%, rgba(254,115,20,.05) 40%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
            opacity: 0;
            transition: opacity .8s ease;
        }
        .moto-glow.visible {
            opacity: 1;
            animation: glowPulse 3s ease-in-out infinite;
        }
        @keyframes glowPulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 1; }
            50% { transform: translate(-50%, -50%) scale(1.1); opacity: .7; }
        }


        /* ═══════════ VIDEO SECTION ═══════════ */
        .video-section {
            padding: 5rem 2rem;
            background: var(--dark);
            position: relative;
        }
        .video-section-inner {
            max-width: 1000px;
            margin: 0 auto;
        }
        .video-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .video-header h2 {
            font-size: 2.2rem; font-weight: 800; color: var(--white);
            letter-spacing: -.02em; margin-bottom: .8rem;
        }
        .video-header p {
            color: var(--gray-400); font-size: 1rem; line-height: 1.6;
        }
        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 */
            border-radius: 20px;
            overflow: hidden;
            background: var(--dark-2);
            box-shadow: 0 20px 60px rgba(0,0,0,.4);
            border: 1px solid rgba(255,255,255,.08);
        }
        .video-container iframe,
        .video-container video {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            border: none;
        }
        .video-placeholder {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            cursor: pointer;
        }
        .video-play-btn {
            width: 80px; height: 80px;
            background: var(--primary);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 8px 30px rgba(254,115,20,.4);
            transition: all .3s;
        }
        .video-play-btn:hover { transform: scale(1.1); box-shadow: 0 12px 40px rgba(254,115,20,.5); }
        .video-play-btn svg { width: 32px; height: 32px; stroke: white; fill: white; margin-left: 4px; }
        .video-placeholder p {
            color: var(--gray-400); font-size: .9rem; font-weight: 500;
        }

        /* ═══════════ SECTION COMMON ═══════════ */
        .section { padding: 6rem 2rem; }
        .section-inner { max-width: 1100px; margin: 0 auto; }
        .section-header { text-align: center; max-width: 600px; margin: 0 auto 4rem; }
        .section-tag {
            display: inline-block; padding: .35rem .9rem;
            background: var(--primary-glow); color: var(--primary);
            font-size: .75rem; font-weight: 700; text-transform: uppercase;
            letter-spacing: .08em; border-radius: 100px; margin-bottom: 1rem;
        }
        .section-header h2 {
            font-size: 2.5rem; font-weight: 800; letter-spacing: -.03em;
            line-height: 1.15; margin-bottom: .8rem;
        }
        .section-header p { color: var(--gray-500); font-size: 1.05rem; line-height: 1.6; }

        /* ═══════════ FEATURES ═══════════ */
        .features-section { background: var(--gray-50); }
        .features-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;
        }
        .feature-card {
            background: var(--white); border-radius: var(--radius);
            padding: 2rem 1.8rem;
            border: 1px solid var(--gray-200);
            transition: all .3s ease;
        }
        .feature-card:hover {
            border-color: var(--primary);
            box-shadow: 0 8px 30px rgba(254,115,20,.08);
            transform: translateY(-4px);
        }
        .feature-icon {
            width: 48px; height: 48px; border-radius: 12px;
            background: var(--primary-glow);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 1.2rem;
        }
        .feature-icon svg { width: 22px; height: 22px; stroke: var(--primary); }
        .feature-card h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: .5rem; }
        .feature-card p { font-size: .88rem; line-height: 1.6; color: var(--gray-500); }

        /* ═══════════ HOW IT WORKS ═══════════ */
        .steps-grid {
            display: grid; grid-template-columns: repeat(4, 1fr);
            gap: 2rem; position: relative;
        }
        .steps-grid::before {
            content: ''; position: absolute;
            top: 32px; left: 12%; right: 12%; height: 2px;
            background: var(--gray-200);
        }
        .step-item { text-align: center; position: relative; z-index: 1; }
        .step-num {
            width: 64px; height: 64px; border-radius: 50%;
            background: var(--white); border: 2px solid var(--gray-200);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.2rem; font-weight: 800; color: var(--gray-400);
            transition: all .3s;
        }
        .step-item:hover .step-num {
            border-color: var(--primary); color: var(--primary);
            box-shadow: 0 4px 16px var(--primary-glow);
        }
        .step-item h4 { font-size: .95rem; font-weight: 700; margin-bottom: .3rem; }
        .step-item p { font-size: .82rem; color: var(--gray-500); line-height: 1.5; }

        /* ═══════════ CTA ═══════════ */
        .cta-section {
            padding: 5rem 2rem;
            background: var(--dark);
            text-align: center;
        }
        .cta-inner {
            max-width: 600px; margin: 0 auto;
        }
        .cta-inner h2 {
            font-size: 2.5rem; font-weight: 800; color: var(--white);
            letter-spacing: -.02em; margin-bottom: 1rem;
        }
        .cta-inner p { color: var(--gray-400); font-size: 1.05rem; line-height: 1.6; margin-bottom: 2rem; }
        .btn-cta {
            display: inline-flex; align-items: center; gap: .5rem;
            background: var(--primary); color: var(--white);
            padding: 1rem 2.5rem; border-radius: 12px;
            font-size: 1rem; font-weight: 700; font-family: inherit;
            border: none; cursor: pointer;
            box-shadow: 0 4px 20px rgba(254,115,20,.3);
            transition: all .3s;
        }
        .btn-cta:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(254,115,20,.4); }

        /* ═══════════ FOOTER ═══════════ */
        .footer {
            background: #111; padding: 2.5rem 2rem;
        }
        .footer-inner {
            max-width: 1100px; margin: 0 auto;
            display: flex; justify-content: space-between; align-items: center;
            flex-wrap: wrap; gap: 1rem;
        }
        .footer-brand img { height: 32px; border-radius: 6px; }
        .footer p { color: var(--gray-500); font-size: .8rem; }
        .footer-links { display: flex; gap: 1.5rem; list-style: none; }
        .footer-links a { color: var(--gray-400); font-size: .8rem; font-weight: 500; transition: color .2s; }
        .footer-links a:hover { color: var(--primary); }

        /* ═══════════ REVEAL ═══════════ */
        .reveal {
            opacity: 0; transform: translateY(24px);
            transition: all .6s cubic-bezier(.4,0,.2,1);
        }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        /* ═══════════ RESPONSIVE ═══════════ */
        @media (max-width: 900px) {
            .hero h1 { font-size: 2.8rem; }
            .features-grid { grid-template-columns: 1fr; max-width: 420px; margin: 0 auto; }
            .steps-grid { grid-template-columns: repeat(2, 1fr); }
            .steps-grid::before { display: none; }
            .nav-links { display: none; }
            .moto-image-wrapper img { width: 300px; }
            .banner-strip img { height: 70px; }
        }
        @media (max-width: 600px) {
            .hero h1 { font-size: 2.2rem; }
            .hero-sub { font-size: 1rem; }
            .section-header h2 { font-size: 1.8rem; }
            .cta-inner h2 { font-size: 1.8rem; }
            .moto-image-wrapper img { width: 240px; }
            .moto-showcase { margin-top: 1rem; }
            .banner-strip img { height: 50px; }
        }
    </style>
</head>
<body>

<!-- ═══════════ NAVBAR ═══════════ -->
<nav class="nav" id="nav">
    <div class="nav-inner">
        <a href="/" class="nav-brand">
            <img src="{{ asset('images/icon.png') }}" alt="Motoclick">
        </a>
        <div class="nav-actions">
            <ul class="nav-links">
                <li><a href="#video" data-i18n="nav_video">Video</a></li>
                <li><a href="#features" data-i18n="nav_services">Servicios</a></li>
                <li><a href="#how" data-i18n="nav_how">Cómo funciona</a></li>
            </ul>
            <a href="/onboarding" class="btn btn-primary" data-i18n="nav_onboarding">Comenzar Onboarding</a>
            
            <!-- Language Toggle -->
            <div class="lang-toggle" style="margin-left: 1rem;">
                <button type="button" class="lang-btn active" data-lang="es" onclick="switchLang('es')">ES</button>
                <button type="button" class="lang-btn" data-lang="en" onclick="switchLang('en')">EN</button>
            </div>
        </div>
    </div>
</nav>

<!-- ═══════════ HERO ═══════════ -->
<section class="hero">
    <div class="hero-inner">
        <div class="hero-badge" data-i18n="hero_badge">
            <span class="hero-badge-dot"></span>
            Plataforma de delivery en New York
        </div>
        <h1 data-i18n="hero_title">Tu delivery, <span class="highlight" data-i18n="hero_highlight">menos comisiones,</span> más control.</h1>
        <p class="hero-sub" data-i18n="hero_sub">Integra tus apps, despacha con tu propia flota y ofrece tracking SMS a tus clientes. Todo desde un solo dashboard.</p>
        <div class="hero-actions">
            <a href="/onboarding" class="btn btn-primary" data-i18n="hero_btn_primary">
                <i data-lucide="rocket" style="width:18px;height:18px"></i>
                Comenzar Onboarding
            </a>
            <a href="#video" class="btn btn-outline" data-i18n="hero_btn_outline">
                <i data-lucide="play" style="width:16px;height:16px"></i>
                Ver video
            </a>
        </div>
    </div>

    <!-- MOTORCYCLE SHOWCASE — particles + animation -->
    <div class="moto-showcase" id="moto-showcase">
        <canvas class="particle-canvas" id="particle-canvas"></canvas>
        <div class="moto-glow" id="moto-glow"></div>
        <div class="speed-lines" id="speed-lines">
            <div class="speed-line"></div>
            <div class="speed-line"></div>
            <div class="speed-line"></div>
            <div class="speed-line"></div>
            <div class="speed-line"></div>
            <div class="speed-line"></div>
            <div class="speed-line"></div>
        </div>
        <div class="moto-image-wrapper">
            <img src="{{ asset('images/motorcycle-delivery.png') }}" alt="Motoclick Delivery" id="moto-rider">
        </div>
    </div>
</section>

<!-- ═══════════ VIDEO SECTION ═══════════ -->
<section class="video-section" id="video">
    <div class="video-section-inner">
        <div class="video-header reveal">
            <h2 data-i18n="video_title">Mira cómo funciona Motoclick</h2>
            <p data-i18n="video_sub">En 2 minutos descubre cómo simplificamos la logística de última milla para tu negocio.</p>
        </div>
        <div class="video-container reveal">
            <!-- Replace the src below with your actual video URL (YouTube embed, Vimeo, or <video> tag) -->
            <div class="video-placeholder" id="video-placeholder">
                <div class="video-play-btn">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                </div>
                <p data-i18n="video_play">Click para reproducir el video</p>
            </div>
            <!-- Example: uncomment and replace with your YouTube video ID -->
            <!-- <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>
    </div>
</section>

<!-- ═══════════ FEATURES ═══════════ -->
<section class="section features-section" id="features">
    <div class="section-inner">
        <div class="section-header reveal">
            <span class="section-tag" data-i18n="feat_tag">Servicios</span>
            <h2 data-i18n="feat_title">Todo lo que tu negocio necesita</h2>
            <p data-i18n="feat_sub">Desde integración hasta tracking en tiempo real, cubrimos toda la cadena de delivery.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card reveal">
                <div class="feature-icon"><i data-lucide="truck"></i></div>
                <h3 data-i18n="feat1_title">Flota Dedicada</h3>
                <p data-i18n="feat1_desc">Conductores exclusivos para tu negocio, uniformados y capacitados para tus horarios pico.</p>
            </div>
            <div class="feature-card reveal">
                <div class="feature-icon"><i data-lucide="zap"></i></div>
                <h3 data-i18n="feat2_title">Integración Rápida</h3>
                <p data-i18n="feat2_desc">Conecta Uber Eats, DoorDash, Grubhub y tu POS en minutos. API robusta o panel manual.</p>
            </div>
            <div class="feature-card reveal">
                <div class="feature-icon"><i data-lucide="map-pin"></i></div>
                <h3 data-i18n="feat3_title">Tracking en Tiempo Real</h3>
                <p data-i18n="feat3_desc">SMS tracking para tus clientes con ETA real y mapa en vivo. Más transparencia, más recompras.</p>
            </div>
            <div class="feature-card reveal">
                <div class="feature-icon"><i data-lucide="shield-check"></i></div>
                <h3 data-i18n="feat4_title">Cobertura Garantizada</h3>
                <p data-i18n="feat4_desc">Nunca te quedes sin conductor. Flota propia + red de respaldo para cubrir cada orden.</p>
            </div>
            <div class="feature-card reveal">
                <div class="feature-icon"><i data-lucide="bar-chart-3"></i></div>
                <h3 data-i18n="feat5_title">Analytics & Reportes</h3>
                <p data-i18n="feat5_desc">Dashboard con métricas clave: tiempos, costos, rendimiento por zona y satisfacción.</p>
            </div>
            <div class="feature-card reveal">
                <div class="feature-icon"><i data-lucide="headphones"></i></div>
                <h3 data-i18n="feat6_title">Soporte Dedicado</h3>
                <p data-i18n="feat6_desc">Equipo bilingüe en Slack, WhatsApp o email. Respuesta en menos de 15 minutos.</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════ HOW IT WORKS ═══════════ -->
<section class="section" id="how">
    <div class="section-inner">
        <div class="section-header reveal">
            <span class="section-tag" data-i18n="how_tag">Cómo funciona</span>
            <h2 data-i18n="how_title">De la solicitud al go-live en días</h2>
            <p data-i18n="how_sub">Un proceso de onboarding guiado para que empieces a entregar rápido.</p>
        </div>
        <div class="steps-grid">
            <div class="step-item reveal">
                <div class="step-num">1</div>
                <h4 data-i18n="step1_title">Formulario</h4>
                <p data-i18n="step1_desc">Completa tu información de negocio en nuestro portal</p>
            </div>
            <div class="step-item reveal">
                <div class="step-num">2</div>
                <h4 data-i18n="step2_title">Discovery</h4>
                <p data-i18n="step2_desc">Definimos tu modelo operativo ideal juntos</p>
            </div>
            <div class="step-item reveal">
                <div class="step-num">3</div>
                <h4 data-i18n="step3_title">Configuración</h4>
                <p data-i18n="step3_desc">Integramos canales, configuramos tu cuenta y hacemos QA</p>
            </div>
            <div class="step-item reveal">
                <div class="step-num">4</div>
                <h4 data-i18n="step4_title">Go-Live</h4>
                <p data-i18n="step4_desc">Lanzamiento con monitoreo activo la primera semana</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════ BANNER STRIP (dark bg — Motoclick branding) ═══════════ -->
<section class="banner-strip reveal">
    <div class="banner-strip-inner">
        <img src="{{ asset('images/banner.png') }}" alt="Motoclick">
        <p class="banner-tagline" data-i18n="banner_tag">Delivery inteligente para tu negocio</p>
    </div>
</section>

<!-- ═══════════ CTA ═══════════ -->
<section class="cta-section">
    <div class="cta-inner reveal">
        <h2 data-i18n="cta_title">¿Listo para transformar tus entregas?</h2>
        <p data-i18n="cta_sub">Únete a los comercios que ya confían en Motoclick para su logística. El onboarding toma solo minutos.</p>
        <a href="/onboarding" class="btn-cta" data-i18n="cta_btn">
            <i data-lucide="arrow-right" style="width:18px;height:18px"></i>
            Iniciar mi Onboarding
        </a>
    </div>
</section>

<!-- ═══════════ FOOTER ═══════════ -->
<footer class="footer">
    <div class="footer-inner">
        <a href="/" class="footer-brand"><img src="{{ asset('images/icon.png') }}" alt="Motoclick"></a>
        <p><span data-i18n="footer_copy">&copy; 2026 Motoclick. Todos los derechos reservados.</span></p>
        <ul class="footer-links">
            <li><a href="/onboarding" data-i18n="footer_onboard">Onboarding</a></li>
            <li><a href="#features" data-i18n="footer_services">Servicios</a></li>
            <li><a href="#how" data-i18n="footer_how">Cómo funciona</a></li>
        </ul>
    </div>
</footer>

<script>
    // Lucide icons
    lucide.createIcons();

    // Navbar scroll
    var nav = document.getElementById('nav');
    window.addEventListener('scroll', function() {
        nav.classList.toggle('scrolled', window.scrollY > 40);
    });

    // Scroll reveal
    var reveals = document.querySelectorAll('.reveal');
    var revealObs = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            if (e.isIntersecting) { e.target.classList.add('visible'); revealObs.unobserve(e.target); }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(function(el) { revealObs.observe(el); });

    // ═══════════ PARTICLE SYSTEM ═══════════
    var canvas = document.getElementById('particle-canvas');
    var ctx = canvas ? canvas.getContext('2d') : null;
    var particles = [];
    var particlesActive = false;

    function resizeCanvas() {
        if (!canvas) return;
        var rect = canvas.parentElement.getBoundingClientRect();
        canvas.width = rect.width;
        canvas.height = rect.height;
    }

    function Particle(x, y) {
        this.x = x + (Math.random() - .5) * 200;
        this.y = y + (Math.random() - .5) * 150;
        this.size = Math.random() * 4 + 1.5;
        this.speedX = (Math.random() - .5) * 1.2;
        this.speedY = (Math.random() - .7) * 1;
        this.opacity = Math.random() * .6 + .2;
        this.fadeSpeed = Math.random() * .008 + .003;
        this.hue = Math.random() * 30 + 20; // orange-amber range
        this.life = 1;
    }

    function spawnParticles(cx, cy, count) {
        for (var i = 0; i < count; i++) {
            particles.push(new Particle(cx, cy));
        }
    }

    function updateParticles() {
        if (!ctx || !canvas) return;
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for (var i = particles.length - 1; i >= 0; i--) {
            var p = particles[i];
            p.x += p.speedX;
            p.y += p.speedY;
            p.life -= p.fadeSpeed;

            if (p.life <= 0) {
                particles.splice(i, 1);
                continue;
            }

            var alpha = p.life * p.opacity;
            ctx.save();
            ctx.globalAlpha = alpha;
            ctx.fillStyle = 'hsl(' + p.hue + ', 95%, 55%)';
            ctx.shadowColor = 'hsl(' + p.hue + ', 100%, 60%)';
            ctx.shadowBlur = 8;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size * p.life, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }

        // Continuously spawn subtle particles when parked
        if (particlesActive && particles.length < 30) {
            var cx = canvas.width / 2;
            var cy = canvas.height / 2;
            if (Math.random() > .85) spawnParticles(cx, cy, 1);
        }

        requestAnimationFrame(updateParticles);
    }

    if (canvas) {
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);
    }

    // ═══════════ MOTORCYCLE ANIMATION ON SCROLL ═══════════
    var motoTriggered = false;
    var motoRider = document.getElementById('moto-rider');
    var speedLines = document.getElementById('speed-lines');
    var motoGlow = document.getElementById('moto-glow');
    var motoShowcase = document.getElementById('moto-showcase');
    if (motoShowcase) {
        var motoObs = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting && !motoTriggered) {
                    motoTriggered = true;
                    motoRider.classList.add('animate');
                    speedLines.classList.add('animate');
                    motoGlow.classList.add('visible');

                    // Burst of particles on ride-in
                    if (canvas) {
                        resizeCanvas();
                        var cx = canvas.width / 2;
                        var cy = canvas.height / 2;
                        spawnParticles(cx, cy, 40);
                        updateParticles();
                    }

                    // After ride-in animation, switch to floating + continuous particles
                    setTimeout(function() {
                        motoRider.classList.remove('animate');
                        motoRider.classList.add('parked');
                        particlesActive = true;
                    }, 1500);
                    motoObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.2 });
        motoObs.observe(motoShowcase);
    }
</script>

<script>
    // ═══════════ I18N TRANSLATION ENGINE ═══════════
    var currentLang = localStorage.getItem('motoclick_lang') || 'en';
    
    var I18N = {
        es: {
            // Nav
            nav_video: 'Video',
            nav_services: 'Servicios',
            nav_how: 'Cómo funciona',
            nav_onboarding: 'Comenzar Onboarding',
            
            // Hero
            hero_badge: '<span class="hero-badge-dot"></span>Plataforma de delivery en New York',
            hero_title: 'Tu delivery, <span class="highlight">menos comisiones,</span> más control.',
            hero_highlight: 'menos comisiones,',
            hero_sub: 'Integra tus apps, despacha con tu propia flota y ofrece tracking SMS a tus clientes. Todo desde un solo dashboard.',
            hero_btn_primary: '<i data-lucide="rocket" style="width:18px;height:18px"></i>Comenzar Onboarding',
            hero_btn_outline: '<i data-lucide="play" style="width:16px;height:16px"></i>Ver video',
            
            // Video
            video_title: 'Mira cómo funciona Motoclick',
            video_sub: 'En 2 minutos descubre cómo simplificamos la logística de última milla para tu negocio.',
            video_play: 'Click para reproducir el video',
            
            // Features
            feat_tag: 'Servicios',
            feat_title: 'Todo lo que tu negocio necesita',
            feat_sub: 'Desde integración hasta tracking en tiempo real, cubrimos toda la cadena de delivery.',
            feat1_title: 'Flota Dedicada',
            feat1_desc: 'Conductores exclusivos para tu negocio, uniformados y capacitados para tus horarios pico.',
            feat2_title: 'Integración Rápida',
            feat2_desc: 'Conecta Uber Eats, DoorDash, Grubhub y tu POS en minutos. API robusta o panel manual.',
            feat3_title: 'Tracking en Tiempo Real',
            feat3_desc: 'SMS tracking para tus clientes con ETA real y mapa en vivo. Más transparencia, más recompras.',
            feat4_title: 'Cobertura Garantizada',
            feat4_desc: 'Nunca te quedes sin conductor. Flota propia + red de respaldo para cubrir cada orden.',
            feat5_title: 'Analytics & Reportes',
            feat5_desc: 'Dashboard con métricas clave: tiempos, costos, rendimiento por zona y satisfacción.',
            feat6_title: 'Soporte Dedicado',
            feat6_desc: 'Equipo bilingüe en Slack, WhatsApp o email. Respuesta en menos de 15 minutos.',
            
            // How it works
            how_tag: 'Cómo funciona',
            how_title: 'De la solicitud al go-live en días',
            how_sub: 'Un proceso de onboarding guiado para que empieces a entregar rápido.',
            step1_title: 'Formulario',
            step1_desc: 'Completa tu información de negocio en nuestro portal',
            step2_title: 'Discovery',
            step2_desc: 'Definimos tu modelo operativo ideal juntos',
            step3_title: 'Configuración',
            step3_desc: 'Integramos canales, configuramos tu cuenta y hacemos QA',
            step4_title: 'Go-Live',
            step4_desc: 'Lanzamiento con monitoreo activo la primera semana',
            
            // Banner & CTA
            banner_tag: 'Delivery inteligente para tu negocio',
            cta_title: '¿Listo para transformar tus entregas?',
            cta_sub: 'Únete a los comercios que ya confían en Motoclick para su logística. El onboarding toma solo minutos.',
            cta_btn: '<i data-lucide="arrow-right" style="width:18px;height:18px"></i>Iniciar mi Onboarding',
            
            // Footer
            footer_copy: '&copy; 2026 Motoclick. Todos los derechos reservados.',
            footer_onboard: 'Onboarding',
            footer_services: 'Servicios',
            footer_how: 'Cómo funciona'
        },
        en: {
            // Nav
            nav_video: 'Video',
            nav_services: 'Services',
            nav_how: 'How it Works',
            nav_onboarding: 'Start Onboarding',
            
            // Hero
            hero_badge: '<span class="hero-badge-dot"></span>Delivery platform in New York',
            hero_title: 'Your delivery, <span class="highlight">fewer commissions,</span> more control.',
            hero_highlight: 'fewer commissions,',
            hero_sub: 'Integrate your apps, dispatch your own fleet and offer SMS tracking to your clients. Everything from a single dashboard.',
            hero_btn_primary: '<i data-lucide="rocket" style="width:18px;height:18px"></i>Start Onboarding',
            hero_btn_outline: '<i data-lucide="play" style="width:16px;height:16px"></i>Watch video',
            
            // Video
            video_title: 'See how Motoclick works',
            video_sub: 'In 2 minutes discover how we simplify last-mile logistics for your business.',
            video_play: 'Click to play the video',
            
            // Features
            feat_tag: 'Services',
            feat_title: 'Everything your business needs',
            feat_sub: 'From integration to real-time tracking, we cover the entire delivery chain.',
            feat1_title: 'Dedicated Fleet',
            feat1_desc: 'Exclusive drivers for your business, uniformed and trained for your peak hours.',
            feat2_title: 'Fast Integration',
            feat2_desc: 'Connect Uber Eats, DoorDash, Grubhub and your POS in minutes. Robust API or manual panel.',
            feat3_title: 'Real-Time Tracking',
            feat3_desc: 'SMS tracking for your clients with a real ETA and live map. More transparency, more repurchases.',
            feat4_title: 'Guaranteed Coverage',
            feat4_desc: 'Never run out of a driver. Own fleet + backup network to cover every order.',
            feat5_title: 'Analytics & Reports',
            feat5_desc: 'Dashboard with key metrics: times, costs, performance by area and satisfaction.',
            feat6_title: 'Dedicated Support',
            feat6_desc: 'Bilingual team on Slack, WhatsApp or email. Response in less than 15 minutes.',
            
            // How it works
            how_tag: 'How it works',
            how_title: 'From application to go-live in days',
            how_sub: 'A guided onboarding process so you can start delivering quickly.',
            step1_title: 'Form',
            step1_desc: 'Complete your business information in our portal',
            step2_title: 'Discovery',
            step2_desc: 'We define your ideal operating model together',
            step3_title: 'Configuration',
            step3_desc: 'We integrate channels, configure your account and do QA',
            step4_title: 'Go-Live',
            step4_desc: 'Launch with active monitoring the first week',
            
            // Banner & CTA
            banner_tag: 'Smart delivery for your business',
            cta_title: 'Ready to transform your deliveries?',
            cta_sub: 'Join the businesses that already trust Motoclick for their logistics. The onboarding takes just minutes.',
            cta_btn: '<i data-lucide="arrow-right" style="width:18px;height:18px"></i>Start my Onboarding',
            
            // Footer
            footer_copy: '&copy; 2026 Motoclick. All rights reserved.',
            footer_onboard: 'Onboarding',
            footer_services: 'Services',
            footer_how: 'How it works'
        }
    };

    function switchLang(lang) {
        currentLang = lang;
        localStorage.setItem('motoclick_lang', lang);
        document.documentElement.lang = lang;

        // Update toggle buttons
        document.querySelectorAll('.lang-btn').forEach(function(btn) {
            btn.classList.toggle('active', btn.dataset.lang === lang);
        });

        // Apply translations
        document.querySelectorAll('[data-i18n]').forEach(function(el) {
            var key = el.getAttribute('data-i18n');
            if (lang === 'es' && I18N.es[key]) {
                el.innerHTML = I18N.es[key];
            } else if (lang === 'en' && I18N.en[key]) {
                el.innerHTML = I18N.en[key];
            }
        });
        
        // Ensure Lucide icons are recreated
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }

    // Apply saved language on load
    if (currentLang !== 'es') {
        switchLang(currentLang);
    } else {
        // Enforce default ES to ensure toggle state matches
        switchLang('es');
    }
</script>

</body>
</html>
