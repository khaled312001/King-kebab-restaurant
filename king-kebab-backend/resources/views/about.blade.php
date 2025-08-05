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
                    {{ $settings['site_name'] }} est né de la passion pour la cuisine traditionnelle et le désir de partager 
                    les saveurs authentiques du Moyen-Orient avec notre communauté. Depuis notre ouverture, 
                    nous nous efforçons de créer une expérience culinaire unique qui combine tradition et modernité.
                </p>

                <div class="contact-label">Réservez par téléphone</div>
                <a href="tel:{{ $settings['contact_phone'] }}" class="body-1 contact-number hover-underline">{{ $settings['contact_phone'] }}</a>

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

    <!-- Features Section -->
    <section class="section features text-center" aria-label="features">
        <div class="container">
            <p class="section-subtitle label-2">Pourquoi nous choisir</p>
            <h2 class="headline-1 section-title">Nos valeurs</h2>

            <ul class="grid-list">
                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-1.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Qualité exceptionnelle</h3>
                        <p class="label-1 card-text">Nous sélectionnons uniquement les meilleurs ingrédients frais pour garantir une qualité exceptionnelle dans chaque plat.</p>
                    </div>
                </li>

                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-2.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Tradition respectée</h3>
                        <p class="label-1 card-text">Nos recettes sont transmises de génération en génération, préservant l'authenticité des saveurs traditionnelles.</p>
                    </div>
                </li>

                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-3.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Service personnalisé</h3>
                        <p class="label-1 card-text">Notre équipe s'engage à offrir un service chaleureux et personnalisé pour rendre votre expérience mémorable.</p>
                    </div>
                </li>

                <li class="feature-item">
                    <div class="feature-card">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/features-icon-4.png') }}" width="100" height="80" loading="lazy" alt="icon">
                        </div>
                        <h3 class="title-2 card-title">Ambiance conviviale</h3>
                        <p class="label-1 card-text">Créez des moments inoubliables dans notre restaurant où chaque détail est pensé pour votre confort.</p>
                    </div>
                </li>
            </ul>

            <img src="{{ asset('assets/images/shape-7.png') }}" width="208" height="178" loading="lazy" alt="shape" class="shape shape-1">
            <img src="{{ asset('assets/images/shape-8.png') }}" width="120" height="115" loading="lazy" alt="shape" class="shape shape-2">
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

                <p class="section-subtitle label-2">Notre spécialité</p>
                <h2 class="headline-1 section-title">Kebab Royal</h2>
                <p class="section-text">
                    Notre plat signature, le Kebab Royal, représente l'excellence de notre cuisine. 
                    Préparé avec des ingrédients frais et des épices sélectionnées avec soin, 
                    chaque bouchée vous transportera dans un voyage culinaire unique.
                </p>

                <div class="wrapper">
                    <span class="span body-1">€10.00</span>
                </div>

                <a href="{{ route('menu') }}" class="btn btn-primary">
                    <span class="text text-1">Découvrir notre menu</span>
                    <span class="text text-2" aria-hidden="true">Découvrir notre menu</span>
                </a>
            </div>
        </div>

        <img src="{{ asset('assets/images/shape-4.png') }}" width="179" height="359" loading="lazy" alt="" class="shape shape-1">
        <img src="{{ asset('assets/images/shape-9.png') }}" width="351" height="462" loading="lazy" alt="" class="shape shape-2">
    </section>

    <!-- Contact Section -->
    <section class="section contact text-center" aria-label="contact">
        <div class="container">
            <p class="section-subtitle label-2">Venez nous rendre visite</p>
            <h2 class="headline-1 section-title">Informations pratiques</h2>

            <div class="contact-info grid-list">
                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Adresse</h3>
                    <p class="body-4 card-text">
                        {{ $settings['contact_address'] }}
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Téléphone</h3>
                    <p class="body-4 card-text">
                        <a href="tel:{{ $settings['contact_phone'] }}" class="contact-link">{{ $settings['contact_phone'] }}</a>
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Horaires</h3>
                    <p class="body-4 card-text">
                        {{ $settings['opening_hours'] }}
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Email</h3>
                    <p class="body-4 card-text">
                        <a href="mailto:{{ $settings['contact_email'] }}" class="contact-link">{{ $settings['contact_email'] }}</a>
                    </p>
                </div>
            </div>

            <a href="{{ route('reservation') }}" class="btn btn-primary">
                <span class="text text-1">Réserver une table</span>
                <span class="text text-2" aria-hidden="true">Réserver une table</span>
            </a>
        </div>
    </section>
</article>
@endsection 