@extends('layouts.app')

@section('title', $article->title . ' - King Kebab')
@section('description', $article->excerpt)

@section('content')
<article>
    <!-- Article Detail Section -->
    <section class="section about text-center" aria-labelledby="article-label" id="article">
        <div class="container">
            <div class="about-content">
                <p class="label-2 section-subtitle" id="article-label">Article</p>
                <h1 class="headline-1 section-title">{{ $article->title }}</h1>
                
                <div class="article-meta" style="margin: 20px 0; color: var(--quick-silver);">
                    <span style="margin-right: 20px;">
                        <ion-icon name="time-outline" style="margin-right: 5px;"></ion-icon>
                        {{ $article->formatted_date }}
                    </span>
                    <span>
                        <ion-icon name="person-outline" style="margin-right: 5px;"></ion-icon>
                        {{ $article->author }}
                    </span>
                </div>

                <div class="article-content" style="text-align: left; max-width: 800px; margin: 0 auto; line-height: 1.8;">
                    {!! nl2br(e($article->content)) !!}
                </div>

                <a href="{{ route('articles.index') }}" class="btn btn-primary" style="margin-top: 30px;">
                    <span class="text text-1">Retour aux articles</span>
                    <span class="text text-2" aria-hidden="true">Retour aux articles</span>
                </a>
            </div>

            <figure class="about-banner">
                <img src="{{ asset('assets/images/about-banner.jpg') }}" width="570" height="570" loading="lazy" alt="article banner" class="w-100" data-parallax-item data-parallax-speed="1">
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

    @if($relatedArticles->count() > 0)
    <!-- Related Articles Section -->
    <section class="section event text-center" aria-label="related-articles">
        <div class="container">
            <p class="section-subtitle label-2">Articles similaires</p>
            <h2 class="headline-1 section-title">Autres articles</h2>

            <ul class="grid-list">
                @foreach($relatedArticles as $relatedArticle)
                <li>
                    <div class="event-card">
                        <figure class="card-banner">
                            <img src="{{ asset('assets/images/event-1.jpg') }}" width="300" height="300" loading="lazy" alt="{{ $relatedArticle->title }}" class="img-cover">
                        </figure>

                        <div class="card-content">
                            <div class="publish-date">
                                <span class="month">{{ $relatedArticle->formatted_date }}</span>
                            </div>

                            <h3 class="card-title">
                                <a href="{{ route('articles.show', $relatedArticle->id) }}">{{ $relatedArticle->title }}</a>
                            </h3>

                            <p class="card-text">
                                {{ $relatedArticle->excerpt }}
                            </p>

                            <div class="card-meta">
                                <div class="publish-date">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime="{{ $relatedArticle->published_at }}">{{ $relatedArticle->formatted_date }}</time>
                                </div>

                                <div class="author">
                                    <ion-icon name="person-outline"></ion-icon>
                                    <span>{{ $relatedArticle->author }}</span>
                                </div>
                            </div>

                            <a href="{{ route('articles.show', $relatedArticle->id) }}" class="btn-text hover-underline label-2">
                                Lire la suite
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            <a href="{{ route('articles.index') }}" class="btn btn-primary">
                <span class="text text-1">Voir tous les articles</span>
                <span class="text text-2" aria-hidden="true">Voir tous les articles</span>
            </a>
        </div>
    </section>
    @endif

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
                    Après avoir lu nos articles, venez déguster notre plat signature 
                    et découvrir les saveurs authentiques de King Kebab.
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