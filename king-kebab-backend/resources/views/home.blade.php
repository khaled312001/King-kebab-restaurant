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

            <!-- Nouvelle slide - Kebab Royal -->
            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/hero1.jpg') }}" width="1880" height="950" alt="Kebab Royal" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Notre Spécialité</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Kebab Royal <br>L'expérience ultime
                </h1>
                <p class="body-2 hero-text slider-reveal">
                    Découvrez notre Kebab Royal, préparé avec des ingrédients frais et des épices authentiques
                </p>
                <a href="{{ route('menu') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Commander maintenant</span>
                    <span class="text text-2" aria-hidden="true">Commander maintenant</span>
                </a>
            </li>

            <!-- Nouvelle slide - Grillades -->
            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/hero2.jfif') }}" width="1880" height="950" alt="Grillades fraîches" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Grillades Fraîches</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Grillades parfaites <br>Chaque jour
                </h1>
                <p class="body-2 hero-text slider-reveal">
                    Nos grillades sont préparées quotidiennement avec des viandes fraîches et des légumes de saison
                </p>
                <a href="{{ route('menu') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Découvrir nos grillades</span>
                    <span class="text text-2" aria-hidden="true">Découvrir nos grillades</span>
                </a>
            </li>

            <!-- Nouvelle slide - Ambiance -->
            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/hero-slider-1') }}" width="1880" height="950" alt="Ambiance conviviale" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Ambiance Chaleureuse</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Une expérience <br>inoubliable
                </h1>
                <p class="body-2 hero-text slider-reveal">
                    Profitez d'une ambiance conviviale et d'un service exceptionnel dans notre restaurant
                </p>
                <a href="{{ route('reservation') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Réserver une table</span>
                    <span class="text text-2" aria-hidden="true">Réserver une table</span>
                </a>
            </li>

            <!-- Nouvelle slide - Événements -->
            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/event-1.jpg') }}" width="1880" height="950" alt="Événements spéciaux" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Événements & Fêtes</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Célébrez vos moments <br>spéciaux
                </h1>
                <p class="body-2 hero-text slider-reveal">
                    Organisez vos événements, anniversaires et fêtes dans notre restaurant avec un service personnalisé
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Réserver un événement</span>
                    <span class="text text-2" aria-hidden="true">Réserver un événement</span>
                </a>
            </li>

            <!-- Nouvelle slide - Qualité -->
            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/event-2.jpg') }}" width="1880" height="950" alt="Qualité exceptionnelle" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Qualité Exceptionnelle</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Ingrédients frais <br>et authentiques
                </h1>
                <p class="body-2 hero-text slider-reveal">
                    Nous sélectionnons uniquement les meilleurs ingrédients pour vous offrir une expérience culinaire unique
                </p>
                <a href="{{ route('about') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Découvrir notre histoire</span>
                    <span class="text text-2" aria-hidden="true">Découvrir notre histoire</span>
                </a>
            </li>

            <!-- Nouvelle slide - Service -->
            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('assets/images/event-3.jpg') }}" width="1880" height="950" alt="Service exceptionnel" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Service Exceptionnel</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Notre équipe <br>à votre service
                </h1>
                <p class="body-2 hero-text slider-reveal">
                    Une équipe dévouée et professionnelle pour vous offrir le meilleur service et la meilleure expérience
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Nous contacter</span>
                    <span class="text text-2" aria-hidden="true">Nous contacter</span>
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
</article>
@endsection 