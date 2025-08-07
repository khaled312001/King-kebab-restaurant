<!-- Header Component -->
<header class="header" data-header>
    <div class="container">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="King Kebab">
        </a>

        <!-- Desktop Navigation -->
        <nav class="navbar desktop-navbar" data-navbar>
            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        <span class="span">Accueil</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('menu') }}" class="navbar-link {{ request()->routeIs('menu*') ? 'active' : '' }}">
                        <span class="span">Menu</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('about') }}" class="navbar-link {{ request()->routeIs('about') ? 'active' : '' }}">
                        <span class="span">À propos</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('articles.index') }}" class="navbar-link {{ request()->routeIs('articles*') ? 'active' : '' }}">
                        <span class="span">Articles</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('contact') }}" class="navbar-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <span class="span">Contact</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- CTA Button -->
        <a href="{{ route('reservation') }}" class="btn btn-primary">
            <span class="text text-1">Réserver</span>
            <span class="text text-2" aria-hidden="true">Réserver</span>
        </a>

        <!-- Enhanced Mobile Menu Button -->
        <button class="mobile-menu-btn" aria-label="Open menu" data-nav-toggler>
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </button>

        <!-- Enhanced Mobile Navigation Panel -->
        <div class="mobile-sidebar" data-navbar>
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="King Kebab">
                    <div class="logo-text">
                        <h3>King Kebab</h3>
                        <p>Le vrai goût du kebab</p>
                    </div>
                </div>
                <button class="sidebar-close-btn" aria-label="Close menu" data-nav-toggler>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <!-- Navigation Menu -->
            <nav class="sidebar-nav">
                <ul class="sidebar-menu">
                    <li class="sidebar-item">
                        <a href="{{ route('home') }}" class="sidebar-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            <ion-icon name="home-outline"></ion-icon>
                            <span>Accueil</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('menu') }}" class="sidebar-link {{ request()->routeIs('menu*') ? 'active' : '' }}">
                            <ion-icon name="restaurant-outline"></ion-icon>
                            <span>Menu</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('about') }}" class="sidebar-link {{ request()->routeIs('about') ? 'active' : '' }}">
                            <ion-icon name="information-circle-outline"></ion-icon>
                            <span>À propos</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('articles.index') }}" class="sidebar-link {{ request()->routeIs('articles*') ? 'active' : '' }}">
                            <ion-icon name="newspaper-outline"></ion-icon>
                            <span>Articles</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('contact') }}" class="sidebar-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <ion-icon name="call-outline"></ion-icon>
                            <span>Contact</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('reservation') }}" class="sidebar-link {{ request()->routeIs('reservation') ? 'active' : '' }}">
                            <ion-icon name="calendar-outline"></ion-icon>
                            <span>Réservation</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Contact Section -->
            <div class="sidebar-contact">
                <div class="contact-header">
                    <ion-icon name="location-outline"></ion-icon>
                    <h4>Nous contacter</h4>
                </div>
                <div class="contact-info">
                    <div class="contact-item">
                        <ion-icon name="call-outline"></ion-icon>
                        <a href="tel:{{ $settings['contact_phone'] }}">{{ $settings['contact_phone'] }}</a>
                    </div>
                    <div class="contact-item">
                        <ion-icon name="time-outline"></ion-icon>
                        <span>{{ $settings['opening_hours'] }}</span>
                    </div>
                    <div class="contact-item">
                        <ion-icon name="location-outline"></ion-icon>
                        <span>{{ $settings['contact_address'] }}</span>
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div class="sidebar-social">
                <h4>Suivez-nous</h4>
                <div class="social-links">
                    @if(isset($settings['facebook_url']))
                    <a href="{{ $settings['facebook_url'] }}" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    @endif
                    @if(isset($settings['instagram_url']))
                    <a href="{{ $settings['instagram_url'] }}" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    @endif
                    @if(isset($settings['twitter_url']))
                    <a href="{{ $settings['twitter_url'] }}" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    @endif
                </div>
            </div>
        </div>

        <!-- Enhanced Overlay -->
        <div class="mobile-overlay" data-nav-toggler data-overlay></div>
    </div>
</header> 