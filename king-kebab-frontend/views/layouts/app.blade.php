<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'King Kebab - Le vrai goût du kebab')</title>
    <meta name="description" content="@yield('description', 'Bienvenue chez King Kebab, le spécialiste du kebab à 20, avenue Marcel Nicolas. Goûtez nos grillades et sandwichs savoureux !')">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/alerts.css') }}">
    
    @stack('styles')
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
                <span class="span">20, avenue Marcel Nicolas</span>
            </address>

            <div class="separator"></div>

            <div class="topbar-item item-2">
                <div class="icon">
                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                </div>
                <span class="span">Ouvert : 11h00 - 23h00</span>
            </div>

            <div class="topbar-item">
                <div class="icon">
                    <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>
                <a href="tel:0426423743" class="span">0426423743</a>
            </div>

            <div class="separator"></div>

            <a href="mailto:contact@kingkebab.com" class="topbar-item link">
                <div class="icon">
                    <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>
                <span class="span">contact@kingkebab.com</span>
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
                <button class="close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>

                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/images/logo.svg') }}" width="160" height="50" alt="King Kebab">
                </a>

                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="{{ route('home') }}" class="navbar-link hover-underline {{ request()->routeIs('home') ? 'active' : '' }}">
                            <div class="separator"></div>
                            <span class="span">Accueil</span>
                        </a>
                    </li>

                    <li class="navbar-item">
                        <a href="{{ route('menu') }}" class="navbar-link hover-underline {{ request()->routeIs('menu') ? 'active' : '' }}">
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
                        <a href="{{ route('contact') }}" class="navbar-link hover-underline {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <div class="separator"></div>
                            <span class="span">Contact</span>
                        </a>
                    </li>
                </ul>

                <div class="text-center">
                    <p class="headline-1 navbar-title">Bienvenue chez King Kebab</p>
                    <address class="body-4">20, avenue Marcel Nicolas</address>
                    <p class="body-4 navbar-text">Ouvert : 11h00 - 23h00</p>
                    <a href="mailto:contact@kingkebab.com" class="body-4 sidebar-link">contact@kingkebab.com</a>
                    <div class="separator"></div>
                    <p class="contact-label">Réservation</p>
                    <a href="tel:0426423743" class="body-1 contact-number hover-underline">0426423743</a>
                </div>
            </nav>

            <a href="{{ route('reservation') }}" class="btn btn-secondary">
                <span class="text text-1">Réserver une table</span>
                <span class="text text-2" aria-hidden="true">Réserver une table</span>
            </a>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
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

                    <address class="body-4">20, avenue Marcel Nicolas</address>
                    <a href="mailto:contact@kingkebab.com" class="body-4 contact-link">contact@kingkebab.com</a>
                    <a href="tel:0426423743" class="body-4 contact-link">Réservation : 0426423743</a>
                    <p class="body-4">Ouvert : 11h00 - 23h00</p>

                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>

                    <p class="title-1">Newsletter</p>
                    <p class="label-1">Abonnez-vous et obtenez <span class="span">25% de réduction.</span></p>

                    <form action="" class="input-wrapper">
                        <div class="icon-wrapper">
                            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                            <input type="email" name="email_address" placeholder="Votre email" autocomplete="off" class="input-field">
                        </div>
                        <button type="submit" class="btn btn-secondary">
                            <span class="text text-1">S'abonner</span>
                            <span class="text text-2" aria-hidden="true">S'abonner</span>
                        </button>
                    </form>
                </div>

                <ul class="footer-list">
                    <li><a href="{{ route('home') }}" class="label-2 footer-link hover-underline">Accueil</a></li>
                    <li><a href="{{ route('menu') }}" class="label-2 footer-link hover-underline">Menu</a></li>
                    <li><a href="{{ route('about') }}" class="label-2 footer-link hover-underline">À propos</a></li>
                    <li><a href="{{ route('contact') }}" class="label-2 footer-link hover-underline">Contact</a></li>
                </ul>

                <ul class="footer-list">
                    <li><a href="#" class="label-2 footer-link hover-underline">Facebook</a></li>
                    <li><a href="#" class="label-2 footer-link hover-underline">Instagram</a></li>
                    <li><a href="#" class="label-2 footer-link hover-underline">Twitter</a></li>
                    <li><a href="#" class="label-2 footer-link hover-underline">Youtube</a></li>
                </ul>
            </div>

            <div class="footer-bottom">
                <p class="copyright">
                    &copy; {{ date('Y') }} King Kebab. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    @stack('scripts')
</body>
</html> 