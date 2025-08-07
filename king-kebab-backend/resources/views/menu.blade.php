@extends('layouts.app')

@section('title', 'Menu - King Kebab')
@section('description', 'Découvrez notre menu varié de kebab, grillades, sandwichs et boissons chez King Kebab')

@section('content')
<article>
    <!-- Hero Section du Menu -->
    <section class="menu-hero">
        <div class="menu-hero-bg">
            <div class="overlay"></div>
            <img src="{{ asset('assets/images/special-dish-banner.jpg') }}" alt="Menu King Kebab" class="hero-bg-img">
        </div>
        
        <div class="container">
            <div class="menu-hero-content">
                <div class="menu-badge">
                    <img src="{{ asset('assets/images/badge-1.png') }}" alt="badge" class="badge-icon">
                    <span class="badge-text">Notre Carte</span>
                </div>
                
                <h1 class="menu-hero-title">Menu délicieux</h1>
                <p class="menu-hero-description">
                    Découvrez notre sélection de plats préparés avec des ingrédients frais et de qualité
                </p>
                
                <div class="menu-stats">
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Plats</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">4.8</span>
                        <span class="stat-label">Note</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Frais</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Éléments décoratifs -->
        <div class="hero-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
    </section>

    <!-- Section du Menu -->
    <section class="menu-section" aria-label="menu-label" id="menu">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Sélection spéciale</p>
                <h2 class="section-title">Nos délicieux plats</h2>
                <p class="section-description">Une variété de saveurs pour tous les goûts</p>
            </div>

            <div class="menu-filters">
                <button class="filter-btn active" data-category="all">Tous</button>
                <button class="filter-btn" data-category="Kebabs">Kebabs</button>
                <button class="filter-btn" data-category="Grillades">Grillades</button>
                <button class="filter-btn" data-category="Sandwichs">Sandwichs</button>
                <button class="filter-btn" data-category="Boissons">Boissons</button>
            </div>

            <div class="menu-grid">
                @foreach($menus as $meal)
                <div class="menu-item" data-category="{{ $meal->category }}">
                    <div class="menu-item-image">
                        <img src="{{ asset('assets/images/menu-1.png') }}" alt="{{ $meal->name }}" class="menu-img">
                        <div class="menu-overlay">
                            <a href="{{ route('menu.show', $meal->id) }}" class="view-details">
                                <i class="fas fa-eye"></i>
                                <span>Voir détails</span>
                            </a>
                        </div>
                        @if($meal->category == 'Kebabs')
                        <div class="popular-badge">
                            <span>Populaire</span>
                        </div>
                        @endif
                    </div>
                    
                    <div class="menu-item-content">
                        <div class="menu-item-header">
                            <h3 class="menu-item-title">
                                <a href="{{ route('menu.show', $meal->id) }}">{{ $meal->name }}</a>
                            </h3>
                            <span class="menu-item-price">€{{ number_format($meal->price, 2) }}</span>
                        </div>
                        
                        <p class="menu-item-description">
                            {{ $meal->description }}
                        </p>
                        
                        <div class="menu-item-footer">
                            <div class="menu-item-category">
                                <span class="category-tag">{{ $meal->category }}</span>
                            </div>
                            
                            <a href="{{ route('menu.show', $meal->id) }}" class="btn btn-outline">
                                Commander
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="menu-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h4>Horaires d'ouverture</h4>
                        <p>Tous les jours de <span class="highlight">11h00</span> à <span class="highlight">23h00</span></p>
                    </div>
                </div>
                
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h4>Commande rapide</h4>
                        <p>Appelez-nous ou commandez en ligne</p>
                    </div>
                </div>
            </div>

            <div class="section-footer">
                <a href="{{ route('reservation') }}" class="btn btn-primary btn-large">
                    <span>Réserver maintenant</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Spécialités -->
    <section class="specialties-section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Nos spécialités</p>
                <h2 class="section-title">Plats signature</h2>
                <p class="section-description">Découvrez nos plats les plus appréciés</p>
            </div>

            <div class="specialties-grid">
                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="{{ asset('assets/images/menu-1.png') }}" alt="Kebab Royal">
                        <div class="specialty-badge">Signature</div>
                    </div>
                    <div class="specialty-content">
                        <h3>Kebab Royal</h3>
                        <p>Notre plat signature avec viande de bœuf, légumes frais et sauce spéciale</p>
                        <div class="specialty-price">€12.00</div>
                    </div>
                </div>

                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="{{ asset('assets/images/menu-2.png') }}" alt="Pizza Quatre Fromages">
                        <div class="specialty-badge">Premium</div>
                    </div>
                    <div class="specialty-content">
                        <h3>Pizza Quatre Fromages</h3>
                        <p>Pizza gourmet avec quatre variétés de fromages sélectionnés</p>
                        <div class="specialty-price">€16.00</div>
                    </div>
                </div>

                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="{{ asset('assets/images/menu-3.png') }}" alt="Burger Royal">
                        <div class="specialty-badge">Populaire</div>
                    </div>
                    <div class="specialty-content">
                        <h3>Burger Royal</h3>
                        <p>Burger premium avec double steak, bacon et fromage</p>
                        <div class="specialty-price">€14.50</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Call to Action -->
    <section class="menu-cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h2>Prêt à déguster ?</h2>
                    <p>Commandez maintenant et profitez de nos délicieux plats</p>
                </div>
                <div class="cta-buttons">
                    <a href="{{ route('reservation') }}" class="btn btn-primary">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Réserver une table</span>
                    </a>
                    <a href="tel:{{ $settings['contact_phone'] }}" class="btn btn-outline">
                        <i class="fas fa-phone"></i>
                        <span>Appeler maintenant</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</article>

<script>
// Script pour les filtres du menu
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const menuItems = document.querySelectorAll('.menu-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Mise à jour des boutons actifs
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filtrage des éléments
            menuItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                
                if (category === 'all' || itemCategory === category) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });

    // Animation au scroll pour les éléments du menu
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observer les éléments du menu
    document.querySelectorAll('.menu-item').forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'all 0.6s ease-out';
        observer.observe(item);
    });
});
</script>
@endsection 