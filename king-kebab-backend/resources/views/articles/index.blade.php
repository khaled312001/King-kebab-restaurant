@extends('layouts.app')

@section('title', 'Articles - King Kebab')
@section('description', 'Découvrez nos articles sur la gastronomie, les recettes et l\'histoire de King Kebab')

@section('content')
<article>
    <!-- Articles Section -->
    <section class="section event text-center" aria-label="event">
        <div class="container">
            <p class="section-subtitle label-2">Nos articles</p>
            <h2 class="headline-1 section-title">Dernières actualités</h2>
            <p class="section-text">
                Découvrez nos articles sur la gastronomie, les recettes traditionnelles et l'histoire de King Kebab
            </p>

            @if($articles->count() > 0)
            <ul class="grid-list">
                @foreach($articles as $article)
                <li>
                    <div class="event-card">
                        <figure class="card-banner">
                            <img src="{{ asset('assets/images/event-1.jpg') }}" width="300" height="300" loading="lazy" alt="{{ $article->title }}" class="img-cover">
                        </figure>

                        <div class="card-content">
                            <div class="publish-date">
                                <span class="month">{{ $article->formatted_date }}</span>
                            </div>

                            <h3 class="card-title">
                                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                            </h3>

                            <p class="card-text">
                                {{ $article->excerpt }}
                            </p>

                            <div class="card-meta">
                                <div class="publish-date">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime="{{ $article->published_at }}">{{ $article->formatted_date }}</time>
                                </div>

                                <div class="author">
                                    <ion-icon name="person-outline"></ion-icon>
                                    <span>{{ $article->author }}</span>
                                </div>
                            </div>

                            <a href="{{ route('articles.show', $article->id) }}" class="btn-text hover-underline label-2">
                                Lire la suite
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            @if($articles->hasPages())
            <div class="pagination-wrapper">
                {{ $articles->links() }}
            </div>
            @endif

            @else
            <div class="no-articles text-center">
                <img src="{{ asset('assets/images/features-icon-1.png') }}" width="100" height="80" loading="lazy" alt="no articles" style="margin-bottom: 20px;">
                <h3 class="title-2">Aucun article pour le moment</h3>
                <p class="body-4">Nous préparons de nouveaux articles passionnants pour vous !</p>
            </div>
            @endif

            <a href="{{ route('menu') }}" class="btn btn-primary">
                <span class="text text-1">Voir notre menu</span>
                <span class="text text-2" aria-hidden="true">Voir notre menu</span>
            </a>
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
                    Découvrez l'histoire de notre plat signature et les secrets de sa préparation 
                    dans nos articles dédiés à la gastronomie traditionnelle.
                </p>

                <div class="wrapper">
                    <span class="span body-1">€10.00</span>
                </div>

                <a href="{{ route('menu') }}" class="btn btn-primary">
                    <span class="text text-1">Commander maintenant</span>
                    <span class="text text-2" aria-hidden="true">Commander maintenant</span>
                </a>
            </div>
        </div>

        <img src="{{ asset('assets/images/shape-4.png') }}" width="179" height="359" loading="lazy" alt="" class="shape shape-1">
        <img src="{{ asset('assets/images/shape-9.png') }}" width="351" height="462" loading="lazy" alt="" class="shape shape-2">
    </section>
</article>
@endsection 