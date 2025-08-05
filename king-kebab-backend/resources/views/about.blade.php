@extends('layouts.app')

@section('title', 'À propos - King Kebab')
@section('description', 'Découvrez l\'histoire de King Kebab et notre passion pour la cuisine traditionnelle')

@section('content')
<article>
    <!-- About Section -->
    <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">
            <div class="about-content">
                <p class="label-2 section-subtitle" id="about-label">Notre histoire</p>
                <h2 class="headline-1 section-title">Chaque saveur raconte une histoire</h2>
                <p class="section-text">
                    Fondé avec passion et dévouement, King Kebab est né de l'amour de la cuisine traditionnelle 
                    et du désir de partager les saveurs authentiques du Moyen-Orient avec notre communauté.
                </p>
                <p class="section-text">
                    Situé au cœur de la ville au 20, avenue Marcel Nicolas, notre restaurant vous accueille 
                    dans une ambiance chaleureuse et conviviale, où chaque plat est préparé avec soin et 
                    des ingrédients frais de qualité.
                </p>
                <p class="section-text">
                    Notre équipe de chefs expérimentés combine tradition et innovation pour créer des plats 
                    uniques qui racontent une histoire de saveurs, d'épices et de passion culinaire.
                </p>

                <div class="contact-label">Réservez par téléphone</div>
                <a href="tel:0426423743" class="body-1 contact-number hover-underline">0426423743</a>

                <a href="{{ route('menu') }}" class="btn btn-primary">
                    <span class="text text-1">Voir notre menu</span>
                    <span class="text text-2" aria-hidden="true">Voir notre menu</span>
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
                        <p class="label-1 card-text">Nous respectons les plus hauts standards d'hygiène et de sécurité alimentaire.</p>
                    </div>
                </li>

                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-2.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Environnement frais</h3>
                        <p class="label-1 card-text">Un cadre agréable et propre pour votre confort et votre bien-être.</p>
                    </div>
                </li>

                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-3.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Chefs qualifiés</h3>
                        <p class="label-1 card-text">Nos chefs expérimentés préparent chaque plat avec passion et expertise.</p>
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