@extends('layouts.app')

@section('title', $meal->name . ' - King Kebab')
@section('description', $meal->description)

@section('content')
<article>
    <!-- Special Dish Section -->
    <section class="special-dish text-center" aria-labelledby="dish-label">
        <div class="special-dish-banner">
            <img src="{{ asset('assets/images/special-dish-banner.jpg') }}" width="940" height="900" loading="lazy" alt="{{ $meal->name }}" class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
            <div class="container">
                <img src="{{ asset('assets/images/badge-1.png') }}" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

                <p class="section-subtitle label-2">{{ $meal->category }}</p>
                <h2 class="headline-1 section-title">{{ $meal->name }}</h2>
                <p class="section-text">
                    {{ $meal->description }}
                </p>

                <div class="wrapper">
                    <span class="span body-1">€{{ number_format($meal->price, 2) }}</span>
                </div>

                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['contact_phone']) }}?text={{ urlencode('Bonjour! Je voudrais commander: ' . $meal->name . ' - ' . number_format($meal->price, 2) . '€') }}" 
                   class="btn btn-primary" target="_blank">
                    <span class="text text-1">Commander sur WhatsApp</span>
                    <span class="text text-2" aria-hidden="true">Commander sur WhatsApp</span>
                </a>

                <a href="{{ route('menu') }}" class="btn btn-secondary" style="margin-top: 20px;">
                    <span class="text text-1">Retour au menu</span>
                    <span class="text text-2" aria-hidden="true">Retour au menu</span>
                </a>
            </div>
        </div>

        <img src="{{ asset('assets/images/shape-4.png') }}" width="179" height="359" loading="lazy" alt="" class="shape shape-1">
        <img src="{{ asset('assets/images/shape-9.png') }}" width="351" height="462" loading="lazy" alt="" class="shape shape-2">
    </section>

    @if($relatedMeals->count() > 0)
    <!-- Related Meals Section -->
    <section class="section menu" aria-label="related-menu" id="related-menu">
        <div class="container">
            <p class="section-subtitle text-center label-2">Autres plats similaires</p>
            <h2 class="headline-1 section-title text-center">Plats recommandés</h2>

            <ul class="grid-list">
                @foreach($relatedMeals as $relatedMeal)
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('assets/images/menu-1.png') }}" width="100" height="100" loading="lazy" alt="{{ $relatedMeal->name }}" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="{{ route('menu.show', $relatedMeal->id) }}" class="card-title">{{ $relatedMeal->name }}</a>
                                </h3>
                                <span class="span title-2">€{{ number_format($relatedMeal->price, 2) }}</span>
                            </div>
                            <p class="card-text label-1">
                                {{ $relatedMeal->description }}
                            </p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            <a href="{{ route('menu') }}" class="btn btn-primary">
                <span class="text text-1">Voir tout le menu</span>
                <span class="text text-2" aria-hidden="true">Voir tout le menu</span>
            </a>
        </div>
    </section>
    @endif
</article>
@endsection 