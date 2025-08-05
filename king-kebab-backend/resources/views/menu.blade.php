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
                @foreach($menus as $meal)
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('assets/images/menu-1.png') }}" width="100" height="100" loading="lazy" alt="{{ $meal->name }}" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="{{ route('menu.show', $meal->id) }}" class="card-title">{{ $meal->name }}</a>
                                </h3>
                                @if($meal->category == 'Kebabs')
                                <span class="badge label-1">Populaire</span>
                                @endif
                                <span class="span title-2">€{{ number_format($meal->price, 2) }}</span>
                            </div>
                            <p class="card-text label-1">
                                {{ $meal->description }}
                            </p>
                        </div>
                    </div>
                </li>
                @endforeach
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