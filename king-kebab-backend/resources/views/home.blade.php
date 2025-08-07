@extends('layouts.app')

@section('title', 'King Kebab - Le vrai goût du kebab')
@section('description', 'Bienvenue chez King Kebab, le spécialiste du kebab à ' . $settings['contact_address'] . '. Goûtez nos grillades et sandwichs savoureux !')

@section('content')
<article>
    <!-- Hero Section -->
    <section class="hero text-center" aria-label="home" id="home">
        <ul class="hero-slider" data-hero-slider>
            <li class="slider-item active" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/hero-slider-1.jpg') }}" alt="Kebab maison" class="img-cover" style="object-fit:cover;width:100%;height:100%;"/>
                </div>
                <p class="label-2 section-subtitle slider-reveal">Tradition & Hygiène</p>
                <h1 class="display-1 hero-title slider-reveal">Le vrai goût du kebab</h1>
                <p class="body-2 hero-text slider-reveal">
                    Savourez nos grillades, sandwichs et assiettes généreuses dans une ambiance conviviale !
                </p>
                <a href="{{ route('menu') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Voir le menu</span>
                    <span class="text text-2" aria-hidden="true">Voir le menu</span>
                </a>
            </li>

            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/hero-slider-2.JPEG') }}" width="1880" height="950" alt="Saveurs inspirées par les saisons" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Expérience délicieuse</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Saveurs inspirées par <br>les saisons
                </h1>
                <p class="body-2 hero-text slider-reveal">
                    Venez en famille et ressentez la joie d'une nourriture savoureuse
                </p>
                <a href="{{ route('menu') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Voir notre menu</span>
                    <span class="text text-2" aria-hidden="true">Voir notre menu</span>
                </a>
            </li>

            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/hero-slider-3.jpg') }}" width="1880" height="950" alt="Kebab traditionnel" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Incroyable & délicieux</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Où chaque saveur <br>raconte une histoire
                </h1>
                <p class="body-2 hero-text slider-reveal">
                    Venez en famille et ressentez la joie d'une nourriture savoureuse
                </p>
                <a href="{{ route('menu') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Voir notre menu</span>
                    <span class="text text-2" aria-hidden="true">Voir notre menu</span>
                </a>
            </li>
        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
            <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
            <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="{{ route('reservation') }}" class="hero-btn has-after">
            <img src="{{ asset('assets/images/hero-icon.png') }}" width="48" height="48" alt="booking icon">
            <span class="label-2 text-center span">Réserver une table</span>
        </a>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Années d'expérience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1000+</div>
                    <div class="stat-label">Clients satisfaits</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Plats au menu</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Service disponible</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">
            <p class="section-subtitle label-2">Saveurs pour les gourmets</p>
            <h2 class="headline-1 section-title">Nos spécialités</h2>
            <p class="section-text">
                Kebab, grillades, sandwichs, assiettes, frites maison et plus encore !
            </p>

            <ul class="grid-list">
                <li>
                    <div class="service-card">
                        <a href="{{ route('menu') }}" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                <img src="{{ asset('assets/images/service-1.jpg') }}" width="285" height="336" loading="lazy" alt="Kebab" class="img-cover">
                            </figure>
                        </a>
                        <div class="card-content">
                            <h3 class="title-4 card-title">
                                <a href="{{ route('menu') }}">Kebab</a>
                            </h3>
                            <a href="{{ route('menu') }}" class="btn-text hover-underline label-2">Voir le menu</a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="service-card">
                        <a href="{{ route('menu') }}" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                <img src="{{ asset('assets/images/service-2.jpg') }}" width="285" height="336" loading="lazy" alt="Grillades" class="img-cover">
                            </figure>
                        </a>
                        <div class="card-content">
                            <h3 class="title-4 card-title">
                                <a href="{{ route('menu') }}">Grillades</a>
                            </h3>
                            <a href="{{ route('menu') }}" class="btn-text hover-underline label-2">Voir le menu</a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="service-card">
                        <a href="{{ route('menu') }}" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                <img src="{{ asset('assets/images/service-3.jpg') }}" width="285" height="336" loading="lazy" alt="Boissons" class="img-cover">
                            </figure>
                        </a>
                        <div class="card-content">
                            <h3 class="title-4 card-title">
                                <a href="{{ route('menu') }}">Boissons</a>
                            </h3>
                            <a href="{{ route('menu') }}" class="btn-text hover-underline label-2">Voir le menu</a>
                        </div>
                    </div>
                </li>
            </ul>

            <img src="{{ asset('assets/images/shape-1.png') }}" width="246" height="412" loading="lazy" alt="shape" class="shape shape-1 move-anim">
            <img src="{{ asset('assets/images/shape-2.png') }}" width="343" height="345" loading="lazy" alt="shape" class="shape shape-2 move-anim">
        </div>
    </section>

    <!-- About Section -->
    <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">
            <div class="about-content">
                <p class="label-2 section-subtitle" id="about-label">Notre histoire</p>
                <h2 class="headline-1 section-title">Chaque saveur raconte une histoire</h2>
                <p class="section-text">
                    Situé au {{ $settings['contact_address'] }}, {{ $settings['site_name'] }} vous accueille tous les jours de {{ $settings['opening_hours'] }}.<br>
                    Téléphone : <a href="tel:{{ $settings['contact_phone'] }}">{{ $settings['contact_phone'] }}</a><br>
                    Venez découvrir nos spécialités dans une ambiance chaleureuse !
                </p>

                <div class="contact-label">Réservez par téléphone</div>
                <a href="tel:{{ $settings['contact_phone'] }}" class="body-1 contact-number hover-underline">{{ $settings['contact_phone'] }}</a>

                <a href="{{ route('about') }}" class="btn btn-primary">
                    <span class="text text-1">En savoir plus</span>
                    <span class="text text-2" aria-hidden="true">En savoir plus</span>
                </a>
            </div>

            <figure class="about-banner">
                <img src="{{ asset('assets/images/about-banner.jpg') }}" width="570" height="570" loading="lazy" alt="about banner" class="w-100" data-parallax-item data-parallax-speed="1">
                <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
                    <img src="{{ asset('assets/images/about-abs-image.jpg') }}" width="285" height="285" loading="lazy" alt="" class="w-100">
                </div>
                <div class="abs-img abs-img-2 has-before">
                    <img src="{{ asset('assets/images/badge-2.png') }}" width="133" height="134" loading="lazy" alt="">
                </div>
            </figure>

            <img src="{{ asset('assets/images/shape-3.png') }}" width="197" height="194" loading="lazy" alt="" class="shape">
        </div>
    </section>

    <!-- Special Dish Section -->
    <section class="special-dish text-center" aria-labelledby="dish-label">
        <div class="special-dish-banner">
            <img src="{{ asset('assets/images/special-dish-banner.jpg') }}" width="940" height="900" loading="lazy" alt="special dish" class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
            <div class="container">
                <img src="{{ asset('assets/images/badge-1.png') }}" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

                <p class="section-subtitle label-2">Plat Spécial</p>
                <h2 class="headline-1 section-title">Kebab Royal</h2>
                <p class="section-text">
                    Notre plat signature, le Kebab Royal, est préparé avec des ingrédients frais et 
                    des épices sélectionnées avec soin. Une expérience culinaire unique qui vous 
                    transportera directement au cœur du Moyen-Orient.
                </p>

                <div class="wrapper">
                    <del class="del body-3">€12.00</del>
                    <span class="span body-1">€10.00</span>
                </div>

                <a href="{{ route('menu') }}" class="btn btn-primary">
                    <span class="text text-1">Voir tout le menu</span>
                    <span class="text text-2" aria-hidden="true">Voir tout le menu</span>
                </a>
            </div>
        </div>

        <img src="{{ asset('assets/images/shape-4.png') }}" width="179" height="359" loading="lazy" alt="" class="shape shape-1">
        <img src="{{ asset('assets/images/shape-9.png') }}" width="351" height="462" loading="lazy" alt="" class="shape shape-2">
    </section>

    <!-- Features Section -->
    <section class="section features text-center" aria-label="features">
        <div class="container">
            <p class="section-subtitle label-2">Pourquoi nous choisir</p>
            <h2 class="headline-1 section-title">Nos forces</h2>

            <ul class="grid-list">
                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-1.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Nourriture hygiénique</h3>
                        <p class="label-1 card-text">Nous respectons les plus hauts standards d'hygiène.</p>
                    </div>
                </li>

                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-2.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Environnement frais</h3>
                        <p class="label-1 card-text">Un cadre agréable et propre pour votre confort.</p>
                    </div>
                </li>

                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-3.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Chefs qualifiés</h3>
                        <p class="label-1 card-text">Nos chefs expérimentés préparent chaque plat avec passion.</p>
                    </div>
                </li>

                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-4.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Événements & Fêtes</h3>
                        <p class="label-1 card-text">Organisez vos événements spéciaux et fêtes dans notre restaurant.</p>
                    </div>
                </li>
            </ul>

            <img src="{{ asset('assets/images/shape-7.png') }}" width="208" height="178" loading="lazy" alt="shape" class="shape shape-1">
            <img src="{{ asset('assets/images/shape-8.png') }}" width="120" height="115" loading="lazy" alt="shape" class="shape shape-2">
        </div>
    </section>

    <!-- Menu Preview Section -->
    <section class="menu-preview-section">
        <div class="container">
            <div class="section-header text-center">
                <p class="section-subtitle label-2">Découvrez nos plats</p>
                <h2 class="headline-1 section-title">Menu du jour</h2>
                <p class="section-text">Nos plats les plus populaires préparés avec des ingrédients frais</p>
            </div>

            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-image">
                        <img src="{{ asset('assets/images/menu-1.png') }}" alt="Kebab Classique" loading="lazy">
                        <div class="menu-overlay">
                            <div class="menu-badge">Populaire</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <div class="menu-header">
                            <h3 class="menu-title">Kebab Classique</h3>
                            <div class="menu-price">€8.50</div>
                        </div>
                        <p class="menu-description">Viande grillée, salade fraîche, sauce maison</p>
                        <div class="menu-ingredients">
                            <span class="ingredient-tag">Viande</span>
                            <span class="ingredient-tag">Salade</span>
                            <span class="ingredient-tag">Sauce</span>
                        </div>
                        <div class="menu-actions">
                            <a href="{{ route('menu.show', 1) }}" class="menu-btn menu-btn-details">
                                <i class="fas fa-info-circle"></i>
                                Détails
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-image">
                        <img src="{{ asset('assets/images/menu-2.png') }}" alt="Kebab Royal" loading="lazy">
                        <div class="menu-overlay">
                            <div class="menu-badge menu-badge-premium">Premium</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <div class="menu-header">
                            <h3 class="menu-title">Kebab Royal</h3>
                            <div class="menu-price">€12.00</div>
                        </div>
                        <p class="menu-description">Viande premium, fromage, légumes grillés</p>
                        <div class="menu-ingredients">
                            <span class="ingredient-tag">Viande Premium</span>
                            <span class="ingredient-tag">Fromage</span>
                            <span class="ingredient-tag">Légumes</span>
                        </div>
                        <div class="menu-actions">
                            <a href="{{ route('menu.show', 2) }}" class="menu-btn menu-btn-details">
                                <i class="fas fa-info-circle"></i>
                                Détails
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-image">
                        <img src="{{ asset('assets/images/menu-3.png') }}" alt="Assiette Mixte" loading="lazy">
                        <div class="menu-overlay">
                            <div class="menu-badge menu-badge-special">Spécial</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <div class="menu-header">
                            <h3 class="menu-title">Assiette Mixte</h3>
                            <div class="menu-price">€15.00</div>
                        </div>
                        <p class="menu-description">Viande, riz, salade, frites maison</p>
                        <div class="menu-ingredients">
                            <span class="ingredient-tag">Viande</span>
                            <span class="ingredient-tag">Riz</span>
                            <span class="ingredient-tag">Frites</span>
                        </div>
                        <div class="menu-actions">
                            <a href="{{ route('menu.show', 3) }}" class="menu-btn menu-btn-details">
                                <i class="fas fa-info-circle"></i>
                                Détails
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-image">
                        <img src="{{ asset('assets/images/menu-4.png') }}" alt="Sandwich Spécial" loading="lazy">
                        <div class="menu-overlay">
                            <div class="menu-badge menu-badge-new">Nouveau</div>
                        </div>
                    </div>
                    <div class="menu-content">
                        <div class="menu-header">
                            <h3 class="menu-title">Sandwich Spécial</h3>
                            <div class="menu-price">€7.50</div>
                        </div>
                        <p class="menu-description">Pain frais, viande, légumes, sauces</p>
                        <div class="menu-ingredients">
                            <span class="ingredient-tag">Pain Frais</span>
                            <span class="ingredient-tag">Viande</span>
                            <span class="ingredient-tag">Légumes</span>
                        </div>
                        <div class="menu-actions">
                            <a href="{{ route('menu.show', 4) }}" class="menu-btn menu-btn-details">
                                <i class="fas fa-info-circle"></i>
                                Détails
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-cta-section">
                <div class="menu-cta-content">
                    <div class="cta-text">
                        <h3>Découvrez notre menu complet</h3>
                        <p>Plus de 50 plats authentiques à découvrir</p>
                    </div>
                    <a href="{{ route('menu') }}" class="btn btn-primary btn-enhanced">
                        <span class="btn-icon">
                            <i class="fas fa-utensils"></i>
                        </span>
                        <span class="btn-text">
                            <span class="text text-1">Voir tout le menu</span>
                            <span class="text text-2" aria-hidden="true">Voir tout le menu</span>
                        </span>
                        <span class="btn-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header text-center">
                <p class="section-subtitle label-2">Avis clients</p>
                <h2 class="headline-1 section-title">Ce que disent nos clients</h2>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Le meilleur kebab que j'ai jamais mangé ! Les ingrédients sont frais et le service est excellent."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Client" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name">Marie Dubois</h4>
                            <p class="author-location">Cliente régulière</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Ambiance chaleureuse et plats délicieux. Je recommande vivement !"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Client" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name">Pierre Martin</h4>
                            <p class="author-location">Client fidèle</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Service rapide et personnel très sympathique. Les prix sont raisonnables pour la qualité."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Client" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name">Sophie Bernard</h4>
                            <p class="author-location">Nouvelle cliente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="section-header text-center">
                <p class="section-subtitle label-2">Notre restaurant</p>
                <h2 class="headline-1 section-title">Découvrez notre ambiance</h2>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/event-1.jpg') }}" alt="Ambiance restaurant" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/event-2.jpg') }}" alt="Plats préparés" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/event-3.jpg') }}" alt="Équipe en cuisine" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/service-1.jpg') }}" alt="Service client" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-left">
                    <div class="cta-text-content">
                        <h2 class="headline-1">Prêt à déguster ?</h2>
                        <p class="section-text">Réservez votre table ou commandez en ligne</p>
                        
                        <div class="cta-buttons">
                            <a href="{{ route('reservation') }}" class="btn btn-primary btn-enhanced btn-reservation">
                                <div class="btn-content">
                                    <span class="btn-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <span class="btn-text">
                                        <span class="text text-1">Réserver une table</span>
                                        <span class="text text-2" aria-hidden="true">Réserver une table</span>
                                    </span>
                                </div>
                                <span class="btn-arrow">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <div class="btn-glow"></div>
                            </a>
                            <a href="tel:{{ $settings['contact_phone'] }}" class="btn btn-secondary btn-enhanced btn-call">
                                <div class="btn-content">
                                    <span class="btn-icon">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <span class="btn-text">
                                        <span class="text text-1">Appeler maintenant</span>
                                        <span class="text text-2" aria-hidden="true">Appeler maintenant</span>
                                    </span>
                                </div>
                                <span class="btn-arrow">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <div class="btn-pulse"></div>
                            </a>
                        </div>

                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Téléphone</h4>
                                    <span>{{ $settings['contact_phone'] }}</span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Horaires</h4>
                                    <span>{{ $settings['opening_hours'] }}</span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Adresse</h4>
                                    <span>{{ $settings['contact_address'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cta-right">
                    <div class="contact-form-container">
                        <div class="form-header">
                            <h3>Contactez-nous</h3>
                            <p>Envoyez-nous un message et nous vous répondrons rapidement</p>
                        </div>
                        
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" name="name" placeholder="Votre nom" class="form-input" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input type="email" name="email" placeholder="Votre email" class="form-input" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-phone input-icon"></i>
                                    <input type="tel" name="phone" placeholder="Votre téléphone" class="form-input">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-tag input-icon"></i>
                                    <select name="subject" class="form-input" required>
                                        <option value="">Sélectionnez un sujet</option>
                                        <option value="reservation">Réservation</option>
                                        <option value="commande">Commande</option>
                                        <option value="information">Information</option>
                                        <option value="reclamation">Réclamation</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-comment input-icon"></i>
                                    <textarea name="message" placeholder="Votre message" class="form-input form-textarea" rows="4" required></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-submit">
                                    <span class="btn-icon">
                                        <i class="fas fa-paper-plane"></i>
                                    </span>
                                    <span class="btn-text">
                                        <span class="text text-1">Envoyer le message</span>
                                        <span class="text text-2" aria-hidden="true">Envoyer le message</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
@endsection 