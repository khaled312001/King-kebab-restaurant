@extends('layouts.app')

@section('title', 'King Kebab - Le vrai goût du kebab')
@section('description', 'Bienvenue chez King Kebab, le spécialiste du kebab à 20, avenue Marcel Nicolas. Goûtez nos grillades et sandwichs savoureux !')

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
                    <img src="{{ asset('assets/images/hero-slider-2.jpg') }}" width="1880" height="950" alt="" class="img-cover">
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
                    <img src="{{ asset('assets/images/hero-slider-3.jpg') }}" width="1880" height="950" alt="" class="img-cover">
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
                    Situé au 20, avenue Marcel Nicolas, King Kebab vous accueille tous les jours de 11h00 à 23h00.<br>
                    Téléphone : <a href="tel:0426423743">0426423743</a><br>
                    Venez découvrir nos spécialités dans une ambiance chaleureuse !
                </p>

                <div class="contact-label">Réservez par téléphone</div>
                <a href="tel:0426423743" class="body-1 contact-number hover-underline">0426423743</a>

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
                        <p class="label-1 card-text">Organisez vos événements spéciaux chez nous.</p>
                    </div>
                </li>
            </ul>

            <img src="{{ asset('assets/images/shape-7.png') }}" width="208" height="178" loading="lazy" alt="shape" class="shape shape-1">
            <img src="{{ asset('assets/images/shape-8.png') }}" width="120" height="115" loading="lazy" alt="shape" class="shape shape-2">
        </div>
    </section>
</article>
@endsection 