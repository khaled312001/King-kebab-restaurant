@extends('layouts.app')

@section('title', 'Menu - King Kebab')
@section('description', 'Découvrez notre menu varié de kebab, grillades, sandwichs et boissons chez King Kebab')

@section('content')
<article>
    <!-- Menu Section -->
    <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">
            <p class="section-subtitle text-center label-2">Sélection spéciale</p>
            <h2 class="headline-1 section-title text-center">Menu délicieux</h2>

            <ul class="grid-list">
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('assets/images/menu-1.png') }}" width="100" height="100" loading="lazy" alt="Kebab Classique" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Kebab Classique</a>
                                </h3>
                                <span class="badge label-1">Populaire</span>
                                <span class="span title-2">€8.50</span>
                            </div>
                            <p class="card-text label-1">
                                Viande de poulet ou agneau, salade fraîche, tomates, oignons et sauce spéciale.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('assets/images/menu-2.png') }}" width="100" height="100" loading="lazy" alt="Kebab Royal" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Kebab Royal</a>
                                </h3>
                                <span class="span title-2">€10.00</span>
                            </div>
                            <p class="card-text label-1">
                                Viande mixte, fromage, salade, tomates, oignons et sauce au choix.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('assets/images/menu-3.png') }}" width="100" height="100" loading="lazy" alt="Assiette Kebab" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Assiette Kebab</a>
                                </h3>
                                <span class="span title-2">€12.00</span>
                            </div>
                            <p class="card-text label-1">
                                Viande grillée, frites maison, salade et sauce au choix.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('assets/images/menu-4.png') }}" width="100" height="100" loading="lazy" alt="Grillades" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Grillades</a>
                                </h3>
                                <span class="badge label-1">Nouveau</span>
                                <span class="span title-2">€15.00</span>
                            </div>
                            <p class="card-text label-1">
                                Brochettes de poulet, agneau ou mixte avec riz et salade.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('assets/images/menu-5.png') }}" width="100" height="100" loading="lazy" alt="Falafel" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Falafel</a>
                                </h3>
                                <span class="span title-2">€7.50</span>
                            </div>
                            <p class="card-text label-1">
                                Boulettes de pois chiches, salade fraîche et sauce tahini.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('assets/images/menu-6.png') }}" width="100" height="100" loading="lazy" alt="Boissons" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Boissons</a>
                                </h3>
                                <span class="span title-2">€2.50</span>
                            </div>
                            <p class="card-text label-1">
                                Sodas, jus de fruits, eau minérale et boissons chaudes.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>

            <p class="menu-text text-center">
                Ouvert tous les jours de <span class="span">11h00</span> à <span class="span">23h00</span>
            </p>

            <a href="{{ route('reservation') }}" class="btn btn-primary">
                <span class="text text-1">Réserver maintenant</span>
                <span class="text text-2" aria-hidden="true">Réserver maintenant</span>
            </a>

            <img src="{{ asset('assets/images/shape-5.png') }}" width="921" height="1036" loading="lazy" alt="shape" class="shape shape-2 move-anim">
            <img src="{{ asset('assets/images/shape-6.png') }}" width="343" height="345" loading="lazy" alt="shape" class="shape shape-3 move-anim">
        </div>
    </section>
</article>
@endsection 