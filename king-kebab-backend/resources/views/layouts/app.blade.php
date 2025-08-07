<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary meta tags -->
    <title>@yield('title', 'King Kebab - Le vrai goût du kebab')</title>
  <meta name="title" content="@yield('title', 'King Kebab - Le vrai goût du kebab')">
  <meta name="description" content="@yield('description', 'Découvrez les meilleurs kebabs traditionnels et la cuisine du Moyen-Orient')">
    
    <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/logo.svg') }}" type="image/svg+xml">
    
  <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
    
  <!-- Custom css link -->
                    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}?v={{ time() }}">
                <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}?v={{ time() }}">
                <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}?v={{ time() }}">
                <link rel="stylesheet" href="{{ asset('assets/css/reservation.css') }}?v={{ time() }}">
                <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}?v={{ time() }}">
                <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}?v={{ time() }}">
                <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}?v={{ time() }}">

  <!-- Ionicons for icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- Preload images -->
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-1.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-2.JPEG') }}">
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-3.jpg') }}">

  <!-- Custom Footer Styles -->
  <style>
    /* Fixed Header and Footer */
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
      padding-top: 80px; /* Exact header height */
      padding-bottom: 400px; /* Adjust based on footer height */
      min-height: 100vh;
      margin: 0;
    }

    /* Main content wrapper */
    .main-content {
      min-height: calc(100vh - 560px); /* Adjust based on header + topbar + footer height */
      position: relative;
      z-index: 1;
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

    /* Scroll Progress Indicator */
    .scroll-progress {
      position: fixed;
      top: 0;
      left: 0;
      width: 0%;
      height: 3px;
      background: linear-gradient(90deg, #c80000, #ffd700);
      z-index: 1002;
      transition: width 0.1s ease;
    }


  </style>
</head>

<body id="top">

    <!-- Preloader -->
    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">King Kebab</p>
    </div>

    <!-- Scroll Progress Indicator -->
    <div class="scroll-progress"></div>

    <!-- Top Bar -->
  

    <!-- Header Component -->
    @include('components.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

    <!-- Custom js link -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</body>

</html> 