<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary meta tags -->
    <title>@yield('title', 'King Kebab - Le vrai goût du kebab')</title>
  <meta name="title" content="@yield('title', 'King Kebab - Le vrai goût du kebab')">
  <meta name="description" content="@yield('description', 'Bienvenue chez King Kebab, le spécialiste du kebab. Goûtez nos grillades et sandwichs savoureux !')">
    
    <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/svg+xml">
    
  <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
    
  <!-- Custom css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- Preload images -->
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-1.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-2.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-3.jpg') }}">

  <!-- Custom Footer Styles -->
  <style>
    /* Fixed Header and Footer */
    .header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      backdrop-filter: blur(20px);
      background: rgba(255,255,255,0.95);
      border-bottom: 1px solid rgba(255,255,255,0.2);
      transition: all 0.3s ease;
    }

    /* Topbar should be above header */
    .topbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1001;
      background: linear-gradient(135deg, var(--gold-crayola) 0%, #a00000 50%, #800000 100%);
      position: relative;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(200,0,0,0.3);
    }

    /* Main header should be below topbar */
    .header .container {
      position: relative;
      z-index: 1000;
    }

    .footer {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      position: relative;
      overflow: hidden;
    }

    /* Add padding to body to prevent content overlap */
    body {
      padding-top: 160px; /* Increased to account for both topbar and header */
      padding-bottom: 400px; /* Adjust based on footer height */
      min-height: 100vh;
    }

    /* Main content wrapper */
    .main-content {
      min-height: calc(100vh - 560px); /* Adjust based on header + topbar + footer height */
      position: relative;
      z-index: 1;
    }

    /* Enhanced Header Design */
    .header {
      background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.98) 100%);
      box-shadow: 0 8px 32px rgba(0,0,0,0.1);
      border-bottom: 2px solid rgba(200,0,0,0.1);
    }

    .header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        radial-gradient(circle at 20% 50%, rgba(200,0,0,0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255,165,0,0.05) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(200,0,0,0.03) 0%, transparent 50%);
      pointer-events: none;
      animation: headerGlow 8s ease-in-out infinite;
    }

    @keyframes headerGlow {
      0%, 100% { opacity: 0.5; }
      50% { opacity: 1; }
    }

    /* Animated Background Elements */
    .header::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: 
        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(200,0,0,0.1)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,165,0,0.1)"/><circle cx="40" cy="80" r="1" fill="rgba(200,0,0,0.08)"/></svg>');
      background-size: 100px 100px;
      animation: floatingFood 20s linear infinite;
      pointer-events: none;
    }

    @keyframes floatingFood {
      0% { transform: translateX(-100px) translateY(0px); }
      25% { transform: translateX(100px) translateY(-20px); }
      50% { transform: translateX(200px) translateY(0px); }
      75% { transform: translateX(100px) translateY(20px); }
      100% { transform: translateX(-100px) translateY(0px); }
    }

    /* Enhanced Logo */
    .logo {
      transition: all 0.4s ease;
      position: relative;
      filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
    }

    .logo:hover {
      transform: scale(1.08) rotate(2deg);
      filter: drop-shadow(0 8px 16px rgba(200,0,0,0.2));
    }

    .logo::before {
      content: '';
      position: absolute;
      top: -10px;
      left: -10px;
      right: -10px;
      bottom: -10px;
      background: radial-gradient(circle, rgba(200,0,0,0.1) 0%, transparent 70%);
      border-radius: 50%;
      opacity: 0;
      transition: opacity 0.3s ease;
      z-index: -1;
    }

    .logo:hover::before {
      opacity: 1;
    }

    /* Enhanced Navbar */
    .navbar {
      backdrop-filter: blur(25px);
      background: rgba(255,255,255,0.9);
      border-right: 2px solid rgba(200,0,0,0.1);
      box-shadow: 5px 0 15px rgba(0,0,0,0.1);
    }

    .navbar-link {
      position: relative;
      overflow: hidden;
      transition: all 0.4s ease;
      border-radius: 8px;
      margin: 5px 0;
    }

    .navbar-link::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(200,0,0,0.15), transparent);
      transition: left 0.6s ease;
    }

    .navbar-link:hover::before {
      left: 100%;
    }

    .navbar-link .span {
      position: relative;
      z-index: 2;
      transition: all 0.3s ease;
    }

    .navbar-link:hover .span {
      color: var(--gold-crayola);
      transform: translateX(8px) scale(1.05);
      font-weight: 600;
    }

    .navbar-link.active .span {
      color: var(--gold-crayola);
      font-weight: 700;
      text-shadow: 0 2px 4px rgba(200,0,0,0.2);
    }

    .navbar-link.active::after {
      background: linear-gradient(90deg, var(--gold-crayola), #a00000);
      width: 100%;
      box-shadow: 0 2px 8px rgba(200,0,0,0.3);
    }

    /* Enhanced Buttons */
    .btn {
      position: relative;
      overflow: hidden;
      transition: all 0.4s ease;
      border-radius: 25px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: left 0.6s ease;
    }

    .btn:hover::before {
      left: 100%;
    }

    .btn:hover {
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 12px 25px rgba(200,0,0,0.4);
    }

    /* Fixed Booking Button */
    .hero-btn {
      position: relative;
      overflow: hidden;
      transition: all 0.4s ease;
      background: linear-gradient(135deg, var(--gold-crayola) 0%, #a00000 100%);
      border-radius: 50px;
      box-shadow: 0 6px 20px rgba(200,0,0,0.3);
    }

    .hero-btn:hover {
      transform: translateY(-5px) scale(1.1);
      box-shadow: 0 15px 35px rgba(200,0,0,0.5);
    }

    .hero-btn .span {
      color: var(--white) !important;
      font-weight: 600;
      text-shadow: 0 2px 4px rgba(0,0,0,0.3);
      transition: all 0.3s ease;
    }

    .hero-btn:hover .span {
      color: var(--white) !important;
      transform: scale(1.1);
    }

    .hero-btn img {
      transition: all 0.3s ease;
    }

    .hero-btn:hover img {
      transform: rotate(360deg) scale(1.2);
    }

    /* Enhanced Topbar */
    .topbar {
      background: linear-gradient(135deg, var(--gold-crayola) 0%, #a00000 50%, #800000 100%);
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(200,0,0,0.3);
    }

    .topbar::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      animation: shimmer 4s infinite;
    }

    @keyframes shimmer {
      0% { left: -100%; }
      100% { left: 100%; }
    }

    .topbar::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: 
        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="10" cy="20" r="1" fill="rgba(255,255,255,0.3)"/><circle cx="90" cy="40" r="0.8" fill="rgba(255,255,255,0.2)"/><circle cx="30" cy="80" r="1.2" fill="rgba(255,255,255,0.25)"/></svg>');
      background-size: 50px 50px;
      animation: floatingDots 15s linear infinite;
      pointer-events: none;
    }

    @keyframes floatingDots {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }

    .topbar-item {
      transition: all 0.4s ease;
      position: relative;
      z-index: 2;
    }

    .topbar-item:hover {
      transform: translateY(-3px);
      color: var(--white);
    }

    .topbar-item .icon {
      transition: all 0.4s ease;
    }

    .topbar-item:hover .icon {
      transform: scale(1.3) rotate(10deg);
      filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
    }

    .topbar .link {
      transition: all 0.4s ease;
      position: relative;
    }

    .topbar .link:hover {
      color: var(--white);
      transform: translateY(-2px);
    }

    .topbar .link::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--white);
      transition: width 0.3s ease;
    }

    .topbar .link:hover::after {
      width: 100%;
    }

    /* Enhanced Navigation Buttons */
    .nav-open-btn {
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(10px);
    }

    .nav-open-btn:hover {
      transform: scale(1.15) rotate(5deg);
      background: rgba(200,0,0,0.1);
    }

    .nav-open-btn .line {
      transition: all 0.4s ease;
    }

    .nav-open-btn:hover .line {
      background: var(--gold-crayola);
      transform: scale(1.2);
    }

    .nav-close-btn {
      transition: all 0.4s ease;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(10px);
    }

    .nav-close-btn:hover {
      color: var(--gold-crayola);
      transform: rotate(90deg) scale(1.1);
      background: rgba(200,0,0,0.1);
    }

    /* Header Animation on Scroll */
    .header {
      animation: slideDown 0.6s ease-out;
    }

    @keyframes slideDown {
      from {
        transform: translateY(-100%);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    /* Logo Animation */
    .logo {
      animation: fadeInScale 0.8s ease-out;
    }

    @keyframes fadeInScale {
      from {
        opacity: 0;
        transform: scale(0.7);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    /* Navbar Items Animation */
    .navbar-item {
      animation: slideInRight 0.8s ease-out;
      animation-fill-mode: both;
    }

    .navbar-item:nth-child(1) { animation-delay: 0.1s; }
    .navbar-item:nth-child(2) { animation-delay: 0.2s; }
    .navbar-item:nth-child(3) { animation-delay: 0.3s; }
    .navbar-item:nth-child(4) { animation-delay: 0.4s; }
    .navbar-item:nth-child(5) { animation-delay: 0.5s; }

    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(40px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Button Pulse Animation */
    .btn {
      animation: pulse 3s infinite;
    }

    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(200,0,0,0.4);
      }
      70% {
        box-shadow: 0 0 0 10px rgba(200,0,0,0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(200,0,0,0);
      }
    }

    /* Responsive Header */
    @media (max-width: 768px) {
      .header {
        padding: 10px 0;
      }
      
      .logo img {
        width: 120px;
        height: auto;
      }
      
      .navbar {
        padding: 20px;
      }

      body {
        padding-top: 100px;
        padding-bottom: 350px;
      }
    }

    /* Footer Styles (existing) */
    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.6) 100%);
      z-index: 1;
    }

    .footer .container {
      position: relative;
      z-index: 2;
    }

    .footer-top {
      animation: fadeInUp 1s ease-out;
    }

    .footer-brand {
      animation: slideInLeft 1s ease-out 0.2s both;
    }

    .footer-list {
      animation: slideInUp 1s ease-out 0.4s both;
    }

    .footer-list:nth-child(3) {
      animation-delay: 0.6s;
    }

    .footer-list:nth-child(4) {
      animation-delay: 0.8s;
    }

    .social-list {
      display: flex;
      gap: 15px;
      justify-content: center;
      margin-top: 20px;
    }

    .social-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 45px;
      height: 45px;
      background: rgba(255,255,255,0.1);
      border-radius: 50%;
      color: var(--white);
      text-decoration: none;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.2);
    }

    .social-link:hover {
      background: var(--gold-crayola);
      transform: translateY(-3px) scale(1.1);
      box-shadow: 0 10px 20px rgba(200,0,0,0.3);
    }

    .social-link ion-icon {
      font-size: 20px;
      transition: transform 0.3s ease;
    }

    .social-link:hover ion-icon {
      transform: rotate(360deg);
    }

    .footer-list-title {
      color: var(--gold-crayola);
      font-weight: 600;
      margin-bottom: 20px;
      position: relative;
    }

    .footer-list-title::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 30px;
      height: 2px;
      background: var(--gold-crayola);
      transition: width 0.3s ease;
    }

    .footer-list:hover .footer-list-title::after {
      width: 50px;
    }

    .footer-link {
      display: flex;
      align-items: center;
      padding: 8px 0;
      transition: all 0.3s ease;
      position: relative;
    }

    .footer-link:hover {
      color: var(--gold-crayola);
      transform: translateX(10px);
    }

    .footer-link ion-icon {
      transition: transform 0.3s ease;
    }

    .footer-link:hover ion-icon {
      transform: scale(1.2);
    }

    .footer-list-text {
      color: rgba(255,255,255,0.8);
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .input-wrapper {
      position: relative;
      margin-bottom: 15px;
    }

    .input-field {
      width: 100%;
      padding: 12px 15px;
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 25px;
      color: var(--white);
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
    }

    .input-field::placeholder {
      color: rgba(255,255,255,0.7);
    }

    .input-field:focus {
      outline: none;
      border-color: var(--gold-crayola);
      background: rgba(255,255,255,0.15);
      transform: scale(1.02);
    }

    .copyright {
      margin-top: 50px;
      padding-top: 30px;
      border-top: 1px solid rgba(255,255,255,0.1);
      animation: fadeIn 1s ease-out 1s both;
    }

    .copyright-text {
      color: rgba(255,255,255,0.8);
      font-size: 14px;
    }

    .copyright-text .link {
      color: var(--gold-crayola);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .copyright-text .link:hover {
      color: var(--white);
    }

    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    /* Floating animation for social icons */
    .social-link {
      animation: float 3s ease-in-out infinite;
    }

    .social-link:nth-child(2) {
      animation-delay: 0.5s;
    }

    .social-link:nth-child(3) {
      animation-delay: 1s;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-5px);
      }
    }

    /* WhatsApp Floating Button */
    .whatsapp-btn {
      position: fixed;
      bottom: 20px;
      left: 20px;
      width: 60px;
      height: 60px;
      background: #25D366;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
      box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
      transition: all 0.3s ease;
      z-index: 1000;
      animation: whatsappPulse 2s infinite;
    }

    .whatsapp-btn:hover {
      transform: scale(1.1);
      box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
      background: #128C7E;
    }

    .whatsapp-btn ion-icon {
      font-size: 30px;
      transition: transform 0.3s ease;
    }

    .whatsapp-btn:hover ion-icon {
      transform: scale(1.2);
    }

    @keyframes whatsappPulse {
      0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
      }
      70% {
        box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
      }
    }

    /* Responsive improvements */
    @media (max-width: 768px) {
      .footer-top {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .social-list {
        justify-content: center;
      }

      .footer-link {
        justify-content: center;
      }

      .whatsapp-btn {
        width: 50px;
        height: 50px;
        bottom: 15px;
        left: 15px;
      }

      .whatsapp-btn ion-icon {
        font-size: 25px;
      }
    }

    /* Hover effects for grid items */
    .footer-list {
      transition: transform 0.3s ease;
    }

    .footer-list:hover {
      transform: translateY(-5px);
    }

    /* Glow effect for newsletter button */
    .btn-primary {
      position: relative;
      overflow: hidden;
    }

    .btn-primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s ease;
    }

    .btn-primary:hover::before {
      left: 100%;
    }
  </style>
</head>

<body id="top">

    <!-- Preloader -->
    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">King Kebab</p>
    </div>

    <!-- Top Bar -->
    <div class="topbar">
        <div class="container">

            <address class="topbar-item">
                <div class="icon">
                    <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                </div>
        <span class="span">
          {{ $settings['contact_address'] }}
        </span>
            </address>

            <div class="separator"></div>

            <div class="topbar-item item-2">
                <div class="icon">
                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                </div>
        <span class="span">Ouvert : {{ $settings['opening_hours'] }}</span>
            </div>

            <div class="topbar-item">
                <div class="icon">
                    <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>
        <a href="tel:{{ $settings['contact_phone'] }}" class="span">{{ $settings['contact_phone'] }}</a>
            </div>

            <div class="separator"></div>

      <a href="mailto:{{ $settings['contact_email'] }}" class="topbar-item link">
                <div class="icon">
                    <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>
        <span class="span">{{ $settings['contact_email'] }}</span>
            </a>

        </div>
    </div>

    <!-- Header -->
    <header class="header" data-header>
        <div class="container">

            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/images/logo.svg') }}" width="160" height="50" alt="King Kebab">
            </a>

            <nav class="navbar" data-navbar>
        <div class="navbar-top">

          <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>

                <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/images/logo.svg') }}" width="140" height="45" alt="King Kebab">
                </a>

        </div>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="{{ route('home') }}" class="navbar-link hover-underline {{ request()->routeIs('home') ? 'active' : '' }}">
                            <div class="separator"></div>
                            <span class="span">Accueil</span>
                        </a>
                    </li>

                    <li class="navbar-item">
            <a href="{{ route('menu') }}" class="navbar-link hover-underline {{ request()->routeIs('menu*') ? 'active' : '' }}">
                            <div class="separator"></div>
                            <span class="span">Menu</span>
                        </a>
                    </li>

                    <li class="navbar-item">
                        <a href="{{ route('about') }}" class="navbar-link hover-underline {{ request()->routeIs('about') ? 'active' : '' }}">
                            <div class="separator"></div>
                            <span class="span">À propos</span>
                        </a>
                    </li>

          <li class="navbar-item">
            <a href="{{ route('articles.index') }}" class="navbar-link hover-underline {{ request()->routeIs('articles*') ? 'active' : '' }}">
              <div class="separator"></div>
              <span class="span">Articles</span>
                        </a>
                    </li>

                    <li class="navbar-item">
                        <a href="{{ route('contact') }}" class="navbar-link hover-underline {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <div class="separator"></div>
                            <span class="span">Contact</span>
                        </a>
                    </li>

          <li class="navbar-item">
            <a href="{{ route('reservation') }}" class="navbar-link hover-underline {{ request()->routeIs('reservation') ? 'active' : '' }}">
              <div class="separator"></div>
              <span class="span">Réservation</span>
            </a>
          </li>

                </ul>

        <div class="navbar-bottom">
          <div class="navbar-bottom-title">Contact</div>
          <div class="navbar-bottom-text">
            <p class="body-4">Réservez par téléphone</p>
            <a href="tel:{{ $settings['contact_phone'] }}" class="contact-number">{{ $settings['contact_phone'] }}</a>
          </div>
                </div>

            </nav>

      <a href="{{ route('reservation') }}" class="btn btn-primary">
        <span class="text text-1">Réserver</span>
        <span class="text text-2" aria-hidden="true">Réserver</span>
      </a>

      <button class="nav-open-btn" aria-label="Open menu" data-nav-toggler>
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </button>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer section has-bg-image text-center" style="background-image: url('{{ asset('assets/images/footer-bg.jpg') }}')">
        <div class="container">

            <div class="footer-top grid-list">

                <div class="footer-brand has-before has-after">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('assets/images/logo.svg') }}" width="160" height="50" loading="lazy" alt="King Kebab">
                    </a>

          <p class="section-text">
            {{ $settings['site_description'] }}
          </p>

                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>

          <ul class="social-list">
            @if(isset($settings['facebook_url']))
            <li>
              <a href="{{ $settings['facebook_url'] }}" class="social-link" aria-label="Facebook">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            @endif
            @if(isset($settings['instagram_url']))
            <li>
              <a href="{{ $settings['instagram_url'] }}" class="social-link" aria-label="Instagram">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            @endif
            @if(isset($settings['twitter_url']))
            <li>
              <a href="{{ $settings['twitter_url'] }}" class="social-link" aria-label="Twitter">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            @endif
          </ul>

                </div>

        <div class="footer-list">
          <p class="footer-list-title label-2">Pages</p>
          <ul>
            <li><a href="{{ route('home') }}" class="footer-link hover-underline">Accueil</a></li>
            <li><a href="{{ route('menu') }}" class="footer-link hover-underline">Menu</a></li>
            <li><a href="{{ route('about') }}" class="footer-link hover-underline">À propos</a></li>
            <li><a href="{{ route('articles.index') }}" class="footer-link hover-underline">Articles</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link hover-underline">Contact</a></li>
            <li><a href="{{ route('reservation') }}" class="footer-link hover-underline">Réservation</a></li>
                </ul>
        </div>

        <div class="footer-list">
          <p class="footer-list-title label-2">Contact</p>
          <ul>
            <li>
              <a href="tel:{{ $settings['contact_phone'] }}" class="footer-link hover-underline">
                <ion-icon name="call-outline" style="margin-right: 8px;"></ion-icon>
                {{ $settings['contact_phone'] }}
              </a>
            </li>
            <li>
              <a href="mailto:{{ $settings['contact_email'] }}" class="footer-link hover-underline">
                <ion-icon name="mail-outline" style="margin-right: 8px;"></ion-icon>
                {{ $settings['contact_email'] }}
              </a>
            </li>
            <li class="address">
              <ion-icon name="location-outline" style="margin-right: 8px;"></ion-icon>
              {{ $settings['contact_address'] }}
            </li>
            <li>
              <ion-icon name="time-outline" style="margin-right: 8px;"></ion-icon>
              {{ $settings['opening_hours'] }}
            </li>
                </ul>
            </div>

        <div class="footer-list">
          <p class="footer-list-title label-2">Newsletter</p>
          <p class="footer-list-text">
            Inscrivez-vous à notre newsletter pour recevoir nos dernières offres
          </p>

          <form action="{{ route('newsletter.store') }}" method="POST" class="input-wrapper">
            @csrf
            <input type="email" name="email" placeholder="Votre email" autocomplete="off" class="input-field" required>
            <button type="submit" class="btn btn-primary">
              <span class="text text-1">S'inscrire</span>
              <span class="text text-2" aria-hidden="true">S'inscrire</span>
            </button>
          </form>

        </div>

      </div>

      <div class="copyright">
        <div class="container">
          <p class="copyright-text">
            &copy; {{ date('Y') }} <a href="{{ route('home') }}" class="link">King Kebab</a>. Tous droits réservés.
                </p>
            </div>
      </div>

        </div>
    </footer>

  <!-- Back to top button -->
  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/0426423743" target="_blank" class="whatsapp-btn" aria-label="Contact us on WhatsApp">
    <ion-icon name="logo-whatsapp" aria-hidden="true"></ion-icon>
  </a>

  <!-- Custom js link -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

  <!-- Ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
  <!-- Footer Enhancement Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Header enhancements
      const header = document.querySelector('.header');
      const navbarLinks = document.querySelectorAll('.navbar-link');
      const logo = document.querySelector('.logo');
      const navOpenBtn = document.querySelector('.nav-open-btn');
      const navCloseBtn = document.querySelector('.nav-close-btn');
      const navbar = document.querySelector('.navbar');
      const heroBtn = document.querySelector('.hero-btn');

      // Enhanced Logo hover effect
      if (logo) {
        logo.addEventListener('mouseenter', function() {
          this.style.transform = 'scale(1.08) rotate(2deg)';
          this.style.filter = 'drop-shadow(0 8px 16px rgba(200,0,0,0.2))';
        });
        
        logo.addEventListener('mouseleave', function() {
          this.style.transform = 'scale(1) rotate(0deg)';
          this.style.filter = 'drop-shadow(0 4px 8px rgba(0,0,0,0.1))';
        });
      }

      // Enhanced Navbar links hover effect
      navbarLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
          const span = this.querySelector('.span');
          if (span) {
            span.style.transform = 'translateX(8px) scale(1.05)';
            span.style.color = 'var(--gold-crayola)';
            span.style.fontWeight = '600';
          }
        });
        
        link.addEventListener('mouseleave', function() {
          const span = this.querySelector('.span');
          if (span) {
            span.style.transform = 'translateX(0) scale(1)';
            if (!this.classList.contains('active')) {
              span.style.color = '';
              span.style.fontWeight = '';
            }
          }
        });
      });

      // Enhanced Nav open button
      if (navOpenBtn) {
        navOpenBtn.addEventListener('mouseenter', function() {
          const lines = this.querySelectorAll('.line');
          lines.forEach(line => {
            line.style.background = 'var(--gold-crayola)';
            line.style.transform = 'scale(1.2)';
          });
          this.style.transform = 'scale(1.15) rotate(5deg)';
          this.style.background = 'rgba(200,0,0,0.1)';
        });
        
        navOpenBtn.addEventListener('mouseleave', function() {
          const lines = this.querySelectorAll('.line');
          lines.forEach(line => {
            line.style.background = '';
            line.style.transform = 'scale(1)';
          });
          this.style.transform = 'scale(1) rotate(0deg)';
          this.style.background = 'rgba(255,255,255,0.1)';
        });
      }

      // Enhanced Nav close button
      if (navCloseBtn) {
        navCloseBtn.addEventListener('mouseenter', function() {
          this.style.transform = 'rotate(90deg) scale(1.1)';
          this.style.color = 'var(--gold-crayola)';
          this.style.background = 'rgba(200,0,0,0.1)';
        });
        
        navCloseBtn.addEventListener('mouseleave', function() {
          this.style.transform = 'rotate(0deg) scale(1)';
          this.style.color = '';
          this.style.background = 'rgba(255,255,255,0.1)';
        });
      }

      // Enhanced Topbar items
      const topbarItems = document.querySelectorAll('.topbar-item');
      topbarItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-3px)';
          const icon = this.querySelector('.icon');
          if (icon) {
            icon.style.transform = 'scale(1.3) rotate(10deg)';
            icon.style.filter = 'drop-shadow(0 4px 8px rgba(0,0,0,0.3))';
          }
        });
        
        item.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
          const icon = this.querySelector('.icon');
          if (icon) {
            icon.style.transform = 'scale(1) rotate(0deg)';
            icon.style.filter = '';
          }
        });
      });

      // Enhanced Topbar links
      const topbarLinks = document.querySelectorAll('.topbar .link');
      topbarLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-2px)';
          this.style.color = 'var(--white)';
        });
        
        link.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
        });
      });

      // Enhanced Header buttons
      const headerButtons = document.querySelectorAll('.header .btn');
      headerButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-3px) scale(1.05)';
          this.style.boxShadow = '0 12px 25px rgba(200,0,0,0.4)';
        });
        
        button.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0) scale(1)';
          this.style.boxShadow = '0 4px 15px rgba(0,0,0,0.1)';
        });
      });

      // Enhanced Hero button (Booking button)
      if (heroBtn) {
        heroBtn.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-5px) scale(1.1)';
          this.style.boxShadow = '0 15px 35px rgba(200,0,0,0.5)';
          
          const span = this.querySelector('.span');
          if (span) {
            span.style.transform = 'scale(1.1)';
            span.style.color = 'var(--white)';
          }
          
          const img = this.querySelector('img');
          if (img) {
            img.style.transform = 'rotate(360deg) scale(1.2)';
          }
        });
        
        heroBtn.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0) scale(1)';
          this.style.boxShadow = '0 6px 20px rgba(200,0,0,0.3)';
          
          const span = this.querySelector('.span');
          if (span) {
            span.style.transform = 'scale(1)';
            span.style.color = 'var(--white)';
          }
          
          const img = this.querySelector('img');
          if (img) {
            img.style.transform = 'rotate(0deg) scale(1)';
          }
        });
      }

      // Navbar animation on open
      const navToggler = document.querySelector('[data-nav-toggler]');
      if (navToggler) {
        navToggler.addEventListener('click', function() {
          setTimeout(() => {
            const navbarItems = document.querySelectorAll('.navbar-item');
            navbarItems.forEach((item, index) => {
              item.style.animation = 'slideInRight 0.8s ease-out';
              item.style.animationDelay = `${index * 0.1}s`;
              item.style.animationFillMode = 'both';
            });
          }, 100);
        });
      }

      // Active link highlighting
      const currentPath = window.location.pathname;
      navbarLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPath || (currentPath.startsWith(href) && href !== '/')) {
          link.classList.add('active');
        }
      });

      // Social links hover effect
      const socialLinks = document.querySelectorAll('.social-link');
      socialLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-5px) scale(1.1)';
        });
        
        link.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0) scale(1)';
        });
      });

      // Footer links hover effect
      const footerLinks = document.querySelectorAll('.footer-link');
      footerLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
          const icon = this.querySelector('ion-icon');
          if (icon) {
            icon.style.transform = 'scale(1.2) rotate(5deg)';
          }
        });
        
        link.addEventListener('mouseleave', function() {
          const icon = this.querySelector('ion-icon');
          if (icon) {
            icon.style.transform = 'scale(1) rotate(0deg)';
          }
        });
      });

      // Newsletter form enhancement
      const newsletterForm = document.querySelector('.footer form');
      const emailInput = document.querySelector('.footer input[type="email"]');
      
      if (emailInput) {
        emailInput.addEventListener('focus', function() {
          this.parentElement.style.transform = 'scale(1.02)';
        });
        
        emailInput.addEventListener('blur', function() {
          this.parentElement.style.transform = 'scale(1)';
        });
      }

      // Smooth scroll for footer links
      const footerNavLinks = document.querySelectorAll('.footer-link[href^="#"]');
      footerNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);
          
          if (targetElement) {
            targetElement.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        });
      });

      // Newsletter form submission with animation
      if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
          const submitBtn = this.querySelector('button[type="submit"]');
          if (submitBtn) {
            submitBtn.innerHTML = '<ion-icon name="checkmark-outline"></ion-icon> Inscrit!';
            submitBtn.style.background = 'var(--gold-crayola)';
            
            setTimeout(() => {
              submitBtn.innerHTML = '<span class="text text-1">S\'inscrire</span><span class="text text-2" aria-hidden="true">S\'inscrire</span>';
              submitBtn.style.background = '';
            }, 3000);
          }
        });
      }

      // Add ripple effect to buttons
      const footerButtons = document.querySelectorAll('.footer .btn');
      footerButtons.forEach(button => {
        button.addEventListener('click', function(e) {
          const ripple = document.createElement('span');
          const rect = this.getBoundingClientRect();
          const size = Math.max(rect.width, rect.height);
          const x = e.clientX - rect.left - size / 2;
          const y = e.clientY - rect.top - size / 2;
          
          ripple.style.width = ripple.style.height = size + 'px';
          ripple.style.left = x + 'px';
          ripple.style.top = y + 'px';
          ripple.classList.add('ripple');
          
          this.appendChild(ripple);
          
          setTimeout(() => {
            ripple.remove();
          }, 600);
        });
      });

      // Add CSS for ripple effect
      const style = document.createElement('style');
      style.textContent = `
        .btn {
          position: relative;
          overflow: hidden;
        }
        
        .ripple {
          position: absolute;
          border-radius: 50%;
          background: rgba(255,255,255,0.3);
          transform: scale(0);
          animation: ripple-animation 0.6s linear;
          pointer-events: none;
        }
        
        @keyframes ripple-animation {
          to {
            transform: scale(4);
            opacity: 0;
          }
        }
      `;
      document.head.appendChild(style);

      // WhatsApp button enhancements
      const whatsappBtn = document.querySelector('.whatsapp-btn');
      if (whatsappBtn) {
        // Add click animation
        whatsappBtn.addEventListener('click', function(e) {
          // Create ripple effect
          const ripple = document.createElement('span');
          const rect = this.getBoundingClientRect();
          const size = Math.max(rect.width, rect.height);
          const x = e.clientX - rect.left - size / 2;
          const y = e.clientY - rect.top - size / 2;
          
          ripple.style.width = ripple.style.height = size + 'px';
          ripple.style.left = x + 'px';
          ripple.style.top = y + 'px';
          ripple.style.background = 'rgba(255,255,255,0.3)';
          ripple.style.borderRadius = '50%';
          ripple.style.position = 'absolute';
          ripple.style.transform = 'scale(0)';
          ripple.style.animation = 'ripple-animation 0.6s linear';
          ripple.style.pointerEvents = 'none';
          
          this.appendChild(ripple);
          
          setTimeout(() => {
            ripple.remove();
          }, 600);

          // Add bounce effect
          this.style.transform = 'scale(0.9)';
          setTimeout(() => {
            this.style.transform = 'scale(1.1)';
            setTimeout(() => {
              this.style.transform = 'scale(1)';
            }, 150);
          }, 100);
        });

        // Add hover sound effect (optional)
        whatsappBtn.addEventListener('mouseenter', function() {
          // You can add a subtle sound effect here if needed
          this.style.animation = 'whatsappPulse 1s infinite';
        });

        whatsappBtn.addEventListener('mouseleave', function() {
          this.style.animation = 'whatsappPulse 2s infinite';
        });

        // Add scroll-based visibility
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
          const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
          
          if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scrolling down - hide button slightly
            whatsappBtn.style.transform = 'translateY(10px)';
            whatsappBtn.style.opacity = '0.8';
          } else {
            // Scrolling up or at top - show button
            whatsappBtn.style.transform = 'translateY(0)';
            whatsappBtn.style.opacity = '1';
          }
          
          lastScrollTop = scrollTop;
        });
      }
    });
  </script>
</body>

</html> 