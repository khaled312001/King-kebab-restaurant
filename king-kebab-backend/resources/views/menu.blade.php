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
                                <i class="eye-icon">👁</i>
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
                    <div class="info-icon">🕒</div>
                    <div class="info-content">
                        <h4>Horaires d'ouverture</h4>
                        <p>Tous les jours de <span class="highlight">11h00</span> à <span class="highlight">23h00</span></p>
                    </div>
                </div>
                
                <div class="info-card">
                    <div class="info-icon">📞</div>
                    <div class="info-content">
                        <h4>Commande rapide</h4>
                        <p>Appelez-nous ou commandez en ligne</p>
                    </div>
                </div>
            </div>

            <div class="section-footer">
                <a href="{{ route('reservation') }}" class="btn btn-primary btn-large">
                    <span>Réserver maintenant</span>
                    <i class="arrow-icon">→</i>
                </a>
            </div>
        </div>
    </section>
</article>

<style>
/* Styles modernes pour la page du menu */
.menu-hero {
    position: relative;
    min-height: 80vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.menu-hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.menu-hero-bg .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(200,0,0,0.3) 100%);
    z-index: 1;
}

.hero-bg-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(2px);
}

.menu-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}

.menu-badge {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(15px);
    padding: 15px 30px;
    border-radius: 50px;
    margin-bottom: 2rem;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

.badge-icon {
    width: 28px;
    height: 28px;
}

.badge-text {
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: white;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.menu-hero-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.2;
    text-shadow: 3px 3px 6px rgba(0,0,0,0.6);
    color: white;
}

.menu-hero-description {
    font-size: 1.3rem;
    line-height: 1.7;
    margin-bottom: 3rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    opacity: 0.95;
    color: white;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    font-weight: 500;
}

.menu-stats {
    display: flex;
    justify-content: center;
    gap: 3rem;
    flex-wrap: wrap;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary-color);
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.stat-label {
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: 0.9;
    color: white;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.hero-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    animation: float 6s ease-in-out infinite;
}

.shape-1 {
    width: 100px;
    height: 100px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.shape-2 {
    width: 150px;
    height: 150px;
    top: 60%;
    right: 10%;
    animation-delay: 2s;
}

.shape-3 {
    width: 80px;
    height: 80px;
    bottom: 20%;
    left: 20%;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Section du menu */
.menu-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.section-header {
    text-align: center;
    margin-bottom: 4rem;
}

.section-subtitle {
    color: var(--primary-color);
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 1rem;
}

.section-title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    color: var(--text-color);
    margin-bottom: 1rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.section-description {
    font-size: 1.2rem;
    color: #6c757d;
    max-width: 600px;
    margin: 0 auto;
    font-weight: 500;
    line-height: 1.6;
}

.menu-filters {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 3rem;
    flex-wrap: wrap;
}

/* Nouveau design des boutons de filtres */
.filter-btn {
    padding: 15px 30px;
    border: 3px solid var(--primary-color);
    background: transparent;
    color: var(--primary-color);
    border-radius: 50px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(200,0,0,0.1);
}

.filter-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(200,0,0,0.1), transparent);
    transition: left 0.5s;
}

.filter-btn:hover::before {
    left: 100%;
}

.filter-btn.active,
.filter-btn:hover {
    background: linear-gradient(135deg, #c80000 0%, #e60000 100%);
    color: white;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 8px 25px rgba(200,0,0,0.4);
    border-color: transparent;
}

.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
}

.menu-item {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    border: 1px solid rgba(0,0,0,0.05);
}

.menu-item:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
}

.menu-item-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.menu-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.menu-item:hover .menu-img {
    transform: scale(1.15);
}

.menu-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(200,0,0,0.9) 0%, rgba(150,0,0,0.8) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.menu-item:hover .menu-overlay {
    opacity: 1;
}

.view-details {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 700;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.popular-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #c80000 0%, #e60000 100%);
    color: white;
    padding: 8px 16px;
    border-radius: 25px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 4px 15px rgba(200,0,0,0.3);
}

.menu-item-content {
    padding: 2rem;
}

.menu-item-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1.5rem;
}

.menu-item-title {
    font-size: 1.4rem;
    font-weight: 700;
    margin: 0;
    flex: 1;
}

.menu-item-title a {
    color: var(--text-color);
    text-decoration: none;
    transition: color 0.3s ease;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.menu-item-title a:hover {
    color: var(--primary-color);
}

.menu-item-price {
    font-size: 1.3rem;
    font-weight: 800;
    color: var(--primary-color);
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.menu-item-description {
    color: #6c757d;
    line-height: 1.7;
    margin-bottom: 2rem;
    font-weight: 500;
    font-size: 15px;
}

.menu-item-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.category-tag {
    background: #f8f9fa;
    color: #6c757d;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Nouveau design des boutons outline */
.btn-outline {
    background: transparent;
    color: var(--primary-color);
    border: 3px solid var(--primary-color);
    padding: 12px 28px;
    border-radius: 30px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
}

.btn-outline::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(200,0,0,0.1), transparent);
    transition: left 0.5s;
}

.btn-outline:hover::before {
    left: 100%;
}

.btn-outline:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 8px 25px rgba(200,0,0,0.3);
}

.menu-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.info-card {
    background: white;
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 1.5rem;
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(0,0,0,0.05);
}

.info-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
}

.info-icon {
    font-size: 2.5rem;
    background: linear-gradient(135deg, #c80000 0%, #e60000 100%);
    color: white;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 8px 25px rgba(200,0,0,0.3);
}

.info-content h4 {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 0.8rem;
    color: var(--text-color);
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.info-content p {
    color: #6c757d;
    margin: 0;
    font-weight: 500;
    line-height: 1.6;
    font-size: 15px;
}

.highlight {
    color: var(--primary-color);
    font-weight: 700;
}

.section-footer {
    text-align: center;
}

/* Nouveau design du bouton principal */
.btn-primary {
    background: linear-gradient(135deg, #c80000 0%, #e60000 100%);
    color: white;
    padding: 20px 45px;
    border-radius: 50px;
    font-weight: 800;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    box-shadow: 0 8px 25px rgba(200,0,0,0.4);
    border: 2px solid rgba(255,255,255,0.2);
    position: relative;
    overflow: hidden;
}

.btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.btn-primary:hover::before {
    left: 100%;
}

.btn-primary:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 12px 35px rgba(200,0,0,0.5);
    background: linear-gradient(135deg, #e60000 0%, #ff0000 100%);
}

.arrow-icon {
    font-size: 20px;
    font-weight: bold;
}

/* Responsive */
@media (max-width: 768px) {
    .menu-stats {
        gap: 2rem;
    }
    
    .menu-filters {
        gap: 0.8rem;
    }
    
    .filter-btn {
        padding: 12px 24px;
        font-size: 14px;
    }
    
    .menu-grid {
        grid-template-columns: 1fr;
    }
    
    .menu-info {
        grid-template-columns: 1fr;
    }
    
    .menu-hero-content {
        padding: 1rem;
    }
    
    .info-card {
        padding: 2rem;
    }
}

@media (max-width: 480px) {
    .menu-hero-title {
        font-size: 2rem;
    }
    
    .menu-hero-description {
        font-size: 1.1rem;
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .info-card {
        padding: 1.5rem;
        flex-direction: column;
        text-align: center;
    }
    
    .filter-btn {
        padding: 10px 20px;
        font-size: 13px;
    }
    
    .btn-primary {
        padding: 16px 32px;
        font-size: 16px;
    }
}

/* Animation pour les filtres */
.menu-item {
    opacity: 1;
    transform: scale(1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.menu-item.hidden {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
}
</style>

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
});
</script>
@endsection 