@extends('layouts.app')

@section('title', $meal->name . ' - King Kebab')
@section('description', $meal->description)

@section('content')
<article>
    <!-- Hero Section Moderne -->
    <section class="meal-hero-modern" aria-labelledby="dish-label">
        <div class="container">
            <div class="meal-hero-grid">
                <!-- Image Section -->
                <div class="meal-image-section">
                    <div class="meal-image-container">
                        <img src="{{ asset('assets/images/special-dish-banner.jpg') }}" alt="{{ $meal->name }}" class="meal-hero-image">
                        <div class="image-overlay">
                            <div class="image-badge">
                                <img src="{{ asset('assets/images/badge-1.png') }}" alt="badge" class="badge-icon">
                                <span>{{ $meal->category }}</span>
                            </div>
                        </div>
                        <div class="image-shapes">
                            <div class="shape shape-1"></div>
                            <div class="shape shape-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="meal-content-section">
                    <div class="meal-content-wrapper">
                        <div class="meal-header">
                            <div class="category-badge">
                                <span class="badge-text">{{ $meal->category }}</span>
                            </div>
                            <h1 class="meal-title">{{ $meal->name }}</h1>
                            <div class="meal-rating-section">
                                <div class="stars">
                                    <i class="star-icon">★</i>
                                    <i class="star-icon">★</i>
                                    <i class="star-icon">★</i>
                                    <i class="star-icon">★</i>
                                    <i class="star-icon">★</i>
                                </div>
                                <span class="rating-text">4.8/5 (120 avis)</span>
                            </div>
                        </div>

                        <div class="meal-description-section">
                            <p class="meal-description">
                                {{ $meal->description }}
                            </p>
                        </div>

                        <div class="meal-details">
                            <div class="detail-item">
                                <div class="detail-icon">🍽️</div>
                                <div class="detail-content">
                                    <h4>Ingrédients</h4>
                                    <p>Viande fraîche, légumes de saison, sauce maison</p>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-icon">⏱️</div>
                                <div class="detail-content">
                                    <h4>Temps de préparation</h4>
                                    <p>10-15 minutes</p>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-icon">🔥</div>
                                <div class="detail-content">
                                    <h4>Calories</h4>
                                    <p>450 kcal</p>
                                </div>
                            </div>
                        </div>

                        <div class="meal-price-section">
                            <div class="price-display">
                                <span class="currency">€</span>
                                <span class="amount">{{ number_format($meal->price, 2) }}</span>
                                <span class="price-note">Prix TTC</span>
                            </div>
                        </div>

                        <div class="meal-actions">
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['contact_phone']) }}?text={{ urlencode('Bonjour! Je voudrais commander: ' . $meal->name . ' - ' . number_format($meal->price, 2) . '€') }}" 
                               class="btn btn-commander" target="_blank">
                                <div class="btn-content">
                                    <i class="fab fa-whatsapp whatsapp-icon"></i>
                                    <span class="btn-text">Commander maintenant</span>
                                </div>
                                <div class="btn-shine"></div>
                            </a>

                            <a href="{{ route('menu') }}" class="btn btn-secondary btn-back">
                                <i class="arrow-icon">←</i>
                                <span>Retour au menu</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($relatedMeals->count() > 0)
    <!-- Section des plats recommandés -->
    <section class="related-meals" aria-label="related-menu" id="related-menu">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Découvrez aussi</p>
                <h2 class="section-title">Plats recommandés</h2>
                <p class="section-description">D'autres délicieuses options qui pourraient vous plaire</p>
            </div>

            <div class="meals-grid">
                @foreach($relatedMeals as $relatedMeal)
                <div class="meal-card">
                    <div class="meal-card-image">
                        <img src="{{ asset('assets/images/menu-1.png') }}" alt="{{ $relatedMeal->name }}" class="meal-img">
                        <div class="meal-overlay">
                            <a href="{{ route('menu.show', $relatedMeal->id) }}" class="view-details">
                                <i class="eye-icon">👁</i>
                                <span>Voir détails</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="meal-card-content">
                        <div class="meal-card-header">
                            <h3 class="meal-card-title">
                                <a href="{{ route('menu.show', $relatedMeal->id) }}">{{ $relatedMeal->name }}</a>
                            </h3>
                            <span class="meal-card-price">€{{ number_format($relatedMeal->price, 2) }}</span>
                        </div>
                        
                        <p class="meal-card-description">
                            {{ $relatedMeal->description }}
                        </p>
                        
                        <div class="meal-card-footer">
                            <a href="{{ route('menu.show', $relatedMeal->id) }}" class="btn btn-outline">
                                Commander
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="section-footer">
                <a href="{{ route('menu') }}" class="btn btn-primary btn-large">
                    <span>Voir tout le menu</span>
                    <i class="arrow-icon">→</i>
                </a>
            </div>
        </div>
    </section>
    @endif
</article>

<style>
/* Design moderne pour la page de détails des repas */
.meal-hero-modern {
    padding: 4rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
}

.meal-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

/* Section Image */
.meal-image-section {
    position: relative;
}

.meal-image-container {
    position: relative;
    border-radius: 30px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
    background: white;
    padding: 20px;
}

.meal-hero-image {
    width: 100%;
    height: 500px;
    object-fit: cover;
    border-radius: 20px;
    transition: transform 0.4s ease;
}

.meal-image-container:hover .meal-hero-image {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 2;
}

.image-badge {
    background: linear-gradient(135deg, #c80000 0%, #e60000 100%);
    color: white;
    padding: 12px 20px;
    border-radius: 25px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 700;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 8px 25px rgba(200,0,0,0.3);
}

.badge-icon {
    width: 20px;
    height: 20px;
}

.image-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.shape {
    position: absolute;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(200,0,0,0.1) 0%, rgba(200,0,0,0.05) 100%);
    animation: float 6s ease-in-out infinite;
}

.shape-1 {
    width: 80px;
    height: 80px;
    top: 10%;
    right: 10%;
    animation-delay: 0s;
}

.shape-2 {
    width: 120px;
    height: 120px;
    bottom: 10%;
    left: 10%;
    animation-delay: 2s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

/* Section Contenu */
.meal-content-section {
    padding: 2rem;
}

.meal-content-wrapper {
    max-width: 500px;
}

.meal-header {
    margin-bottom: 2rem;
}

.category-badge {
    margin-bottom: 1rem;
}

.badge-text {
    background: linear-gradient(135deg, #c80000 0%, #e60000 100%);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: inline-block;
    box-shadow: 0 4px 15px rgba(200,0,0,0.3);
}

.meal-title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    color: var(--text-color);
    margin-bottom: 1rem;
    line-height: 1.2;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.meal-rating-section {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.stars {
    display: flex;
    gap: 2px;
}

.star-icon {
    color: #FFD700;
    font-size: 1.2rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.rating-text {
    font-size: 14px;
    color: #6c757d;
    font-weight: 600;
}

.meal-description-section {
    margin-bottom: 2rem;
}

.meal-description {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #6c757d;
    font-weight: 500;
}

.meal-details {
    margin-bottom: 2rem;
}

.detail-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.detail-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

.detail-icon {
    font-size: 1.5rem;
    background: linear-gradient(135deg, #c80000 0%, #e60000 100%);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 4px 15px rgba(200,0,0,0.3);
}

.detail-content h4 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--text-color);
    margin-bottom: 0.3rem;
}

.detail-content p {
    font-size: 14px;
    color: #6c757d;
    margin: 0;
    font-weight: 500;
}

.meal-price-section {
    margin-bottom: 2rem;
}

.price-display {
    display: flex;
    align-items: baseline;
    gap: 5px;
    background: linear-gradient(135deg, #c80000 0%, #e60000 100%);
    padding: 20px 30px;
    border-radius: 20px;
    color: white;
    box-shadow: 0 8px 25px rgba(200,0,0,0.3);
    position: relative;
    overflow: hidden;
}

.price-display::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.price-display:hover::before {
    left: 100%;
}

.currency {
    font-size: 1.5rem;
    font-weight: 700;
}

.amount {
    font-size: 3rem;
    font-weight: 800;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.price-note {
    font-size: 12px;
    opacity: 0.8;
    margin-left: auto;
}

.meal-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

/* Boutons modernisés */
.btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 18px 36px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: none;
    cursor: pointer;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.btn:hover::before {
    left: 100%;
}

/* Nouveau design du bouton Commander */
.btn-commander {
    background: linear-gradient(135deg, #25d366 0%, #128c7e 50%, #075e54 100%);
    color: white;
    box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
    border: 2px solid rgba(255,255,255,0.2);
    position: relative;
    overflow: hidden;
    min-width: 220px;
    justify-content: center;
}

.btn-commander .btn-content {
    display: flex;
    align-items: center;
    gap: 12px;
    position: relative;
    z-index: 2;
}

.btn-commander .btn-text {
    font-size: 16px;
    font-weight: 800;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    letter-spacing: 1.5px;
}

.btn-commander .whatsapp-icon {
    font-size: 20px;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));
}

.btn-commander .btn-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s ease;
}

.btn-commander:hover {
    transform: translateY(-4px) scale(1.05);
    box-shadow: 0 15px 40px rgba(37, 211, 102, 0.6);
    background: linear-gradient(135deg, #128c7e 0%, #25d366 50%, #128c7e 100%);
    border-color: rgba(255,255,255,0.4);
}

.btn-commander:hover .btn-shine {
    left: 100%;
}

.btn-commander:hover .btn-text {
    text-shadow: 0 2px 6px rgba(0,0,0,0.4);
}

.btn-commander:hover .whatsapp-icon {
    transform: scale(1.1);
    filter: drop-shadow(0 3px 6px rgba(0,0,0,0.4));
}

.btn-commander:active {
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 10px 30px rgba(37, 211, 102, 0.5);
}

.btn-primary {
    background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
    color: white;
    box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
}

.btn-primary:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 12px 35px rgba(37, 211, 102, 0.5);
    background: linear-gradient(135deg, #128c7e 0%, #25d366 100%);
}

.btn-secondary {
    background: rgba(255,255,255,0.95);
    color: var(--text-color);
    border: 2px solid #e9ecef;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    font-weight: 700;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.btn-secondary:hover {
    background: white;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 12px 35px rgba(0,0,0,0.15);
    border-color: #d1d5db;
    color: var(--text-color);
}

.btn-secondary .btn-text {
    font-weight: 700;
    color: var(--text-color);
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.btn-secondary:hover .btn-text {
    color: var(--text-color);
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.btn-secondary .arrow-icon {
    color: var(--text-color);
    font-weight: bold;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.btn-secondary:hover .arrow-icon {
    color: var(--text-color);
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.whatsapp-icon {
    font-size: 18px;
}

.arrow-icon {
    font-size: 18px;
    font-weight: bold;
}

/* Section des plats recommandés */
.related-meals {
    padding: 5rem 0;
    background: white;
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

.meals-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.meal-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    border: 1px solid rgba(0,0,0,0.05);
}

.meal-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
}

.meal-card-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.meal-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.meal-card:hover .meal-img {
    transform: scale(1.15);
}

.meal-overlay {
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

.meal-card:hover .meal-overlay {
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

.meal-card-content {
    padding: 2rem;
}

.meal-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1.5rem;
}

.meal-card-title {
    font-size: 1.4rem;
    font-weight: 700;
    margin: 0;
    flex: 1;
}

.meal-card-title a {
    color: var(--text-color);
    text-decoration: none;
    transition: color 0.3s ease;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.meal-card-title a:hover {
    color: var(--primary-color);
}

.meal-card-price {
    font-size: 1.3rem;
    font-weight: 800;
    color: var(--primary-color);
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.meal-card-description {
    color: #6c757d;
    line-height: 1.7;
    margin-bottom: 2rem;
    font-weight: 500;
    font-size: 15px;
}

.meal-card-footer {
    text-align: center;
}

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

.section-footer {
    text-align: center;
}

.btn-large {
    padding: 20px 45px;
    font-size: 18px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

/* Responsive */
@media (max-width: 992px) {
    .meal-hero-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .meal-content-wrapper {
        max-width: 100%;
    }
    
    .meal-image-container {
        max-width: 500px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .meal-hero-modern {
        padding: 2rem 0;
    }
    
    .meal-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .meals-grid {
        grid-template-columns: 1fr;
    }
    
    .detail-item {
        flex-direction: column;
        text-align: center;
    }
    
    .price-display {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }
    
    .amount {
        font-size: 2.5rem;
    }
}

@media (max-width: 480px) {
    .meal-title {
        font-size: 2rem;
    }
    
    .meal-description {
        font-size: 1rem;
    }
    
    .btn {
        padding: 16px 32px;
        font-size: 15px;
    }
    
    .detail-icon {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
    }
}
</style>
@endsection 