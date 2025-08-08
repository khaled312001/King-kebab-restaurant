@extends('layouts.app')

@section('title', $meal->name . ' - King Kebab')
@section('description', $meal->description)

@section('content')
<div class="meal-details-container">
    <!-- Hero Section -->
    <section class="meal-hero">
        <div class="container">
            <div class="meal-hero-content">
                <!-- Breadcrumb -->
                <nav class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-link">
                        <i class="fas fa-home"></i>
                        <span>Accueil</span>
                    </a>
                    <span class="breadcrumb-separator">/</span>
                    <a href="{{ route('menu') }}" class="breadcrumb-link">
                        <i class="fas fa-utensils"></i>
                        <span>Menu</span>
                    </a>
                    <span class="breadcrumb-separator">/</span>
                    <span class="breadcrumb-current">{{ $meal->name }}</span>
                </nav>

                <div class="meal-hero-grid">
                    <!-- Image Section -->
                    <div class="meal-image-section">
                        <div class="meal-image-wrapper">
                            <img src="{{ $meal->image ? asset($meal->image) : asset('assets/images/menu-1.png') }}" 
                                 alt="{{ $meal->name }}" 
                                 class="meal-image">
                            <div class="image-overlay">
                                <div class="category-badge">
                                    <i class="fas fa-tag"></i>
                                    <span>{{ $meal->category }}</span>
                                </div>
                                @if($meal->category == 'Kebabs')
                                <div class="popular-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>Populaire</span>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="meal-content-section">
                        <div class="meal-header">
                            <div class="meal-category">
                                <span class="category-tag">{{ $meal->category }}</span>
                                <div class="meal-status">
                                    <span class="status-dot"></span>
                                    <span>Disponible</span>
                                </div>
                            </div>
                            
                            <h1 class="meal-title">{{ $meal->name }}</h1>
                            
                            <div class="meal-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.8/5 ({{ rand(50, 200) }} avis)</span>
                            </div>
                        </div>

                        <div class="meal-description">
                            <p>{{ $meal->description }}</p>
                        </div>

                        <div class="meal-info-grid">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Ingrédients</h4>
                                    <p>Viande fraîche, légumes de saison, sauce maison</p>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Préparation</h4>
                                    <p>{{ rand(8, 15) }}-{{ rand(15, 25) }} minutes</p>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-fire"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Calories</h4>
                                    <p>{{ rand(300, 600) }} kcal</p>
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
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['contact_phone'] ?? '0426423743') }}?text={{ urlencode('Bonjour! Je voudrais commander: ' . $meal->name . ' - ' . number_format($meal->price, 2) . '€') }}" 
                               class="btn btn-order" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                <span>Commander maintenant</span>
                            </a>
                            
                            <a href="tel:{{ $settings['contact_phone'] ?? '0426423743' }}" class="btn btn-call">
                                <i class="fas fa-phone"></i>
                                <span>Appeler</span>
                            </a>
                            
                            <a href="{{ route('menu') }}" class="btn btn-back">
                                <i class="fas fa-arrow-left"></i>
                                <span>Retour au menu</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Meals Section -->
    @if($relatedMeals->count() > 0)
    <section class="related-meals">
        <div class="container">
            <div class="section-header">
                <h2>Plats recommandés</h2>
                <p>D'autres délicieuses options qui pourraient vous plaire</p>
            </div>

            <div class="related-meals-grid">
                @foreach($relatedMeals as $relatedMeal)
                <div class="related-meal-card">
                    <div class="meal-card-image">
                        <img src="{{ $relatedMeal->image ? asset($relatedMeal->image) : asset('assets/images/menu-1.png') }}" 
                             alt="{{ $relatedMeal->name }}">
                        <div class="card-overlay">
                            <a href="{{ route('menu.show', $relatedMeal->id) }}" class="view-btn">
                                <i class="fas fa-eye"></i>
                                <span>Voir détails</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="meal-card-content">
                        <div class="card-header">
                            <span class="card-category">{{ $relatedMeal->category }}</span>
                            <span class="card-price">€{{ number_format($relatedMeal->price, 2) }}</span>
                        </div>
                        
                        <h3 class="card-title">
                            <a href="{{ route('menu.show', $relatedMeal->id) }}">{{ $relatedMeal->name }}</a>
                        </h3>
                        
                        <p class="card-description">
                            {{ Str::limit($relatedMeal->description, 80) }}
                        </p>
                        
                        <div class="card-actions">
                            <a href="{{ route('menu.show', $relatedMeal->id) }}" class="btn btn-details">
                                <i class="fas fa-info-circle"></i>
                                <span>Détails</span>
                            </a>
                            <button class="btn btn-quick-order" onclick="quickOrder('{{ $relatedMeal->name }}', {{ $relatedMeal->price }})">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Commander</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="section-footer">
                <a href="{{ route('menu') }}" class="btn btn-view-all">
                    <i class="fas fa-utensils"></i>
                    <span>Voir tout le menu</span>
                </a>
            </div>
        </div>
    </section>
    @endif
</div>

<style>
/* Simple and Beautiful Meal Details Styles */
.meal-details-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

/* Hero Section */
.meal-hero {
    padding: 3rem 0;
    position: relative;
}

.meal-hero-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

/* Breadcrumb */
.breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 2rem;
    font-size: 0.9rem;
}

.breadcrumb-link {
    display: flex;
    align-items: center;
    gap: 0.3rem;
    color: #6c757d;
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb-link:hover {
    color: #ff6b6b;
}

.breadcrumb-separator {
    color: #6c757d;
}

.breadcrumb-current {
    color: #2c3e50;
    font-weight: 600;
}

/* Hero Grid */
.meal-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

/* Image Section */
.meal-image-section {
    position: relative;
}

.meal-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    background: white;
    padding: 1rem;
}

.meal-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 15px;
    transition: transform 0.3s ease;
}

.meal-image-wrapper:hover .meal-image {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 1rem;
    left: 1rem;
    right: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.category-badge {
    background: rgba(255, 255, 255, 0.95);
    color: #2c3e50;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.3rem;
    backdrop-filter: blur(10px);
}

.popular-badge {
    background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

/* Content Section */
.meal-content-section {
    padding: 2rem;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.meal-header {
    margin-bottom: 2rem;
}

.meal-category {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.category-tag {
    background: linear-gradient(45deg, #4ecdc4, #44a08d);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
}

.meal-status {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
    color: #6c757d;
}

.status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #28a745;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.meal-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.meal-rating {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.stars {
    display: flex;
    gap: 0.2rem;
}

.stars i {
    color: #ffc107;
    font-size: 1.1rem;
}

.rating-text {
    color: #6c757d;
    font-size: 0.9rem;
}

.meal-description {
    margin-bottom: 2rem;
}

.meal-description p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #6c757d;
}

/* Info Grid */
.meal-info-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.info-item {
    text-align: center;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 15px;
    transition: transform 0.3s ease;
}

.info-item:hover {
    transform: translateY(-5px);
}

.info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: white;
    font-size: 1.2rem;
}

.info-content h4 {
    font-size: 1rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.info-content p {
    color: #6c757d;
    font-size: 0.9rem;
}

/* Price Section */
.meal-price-section {
    text-align: center;
    margin-bottom: 2rem;
    padding: 2rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 20px;
    color: white;
}

.price-display {
    display: flex;
    align-items: baseline;
    justify-content: center;
    gap: 0.5rem;
}

.currency {
    font-size: 1.5rem;
    font-weight: 600;
}

.amount {
    font-size: 3rem;
    font-weight: 700;
}

.price-note {
    font-size: 0.9rem;
    opacity: 0.8;
}

/* Action Buttons */
.meal-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.btn {
    padding: 1rem 2rem;
    border: none;
    border-radius: 15px;
    font-size: 1rem;
    font-weight: 600;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    cursor: pointer;
    flex: 1;
    min-width: 150px;
}

.btn-order {
    background: linear-gradient(45deg, #25d366, #128c7e);
    color: white;
}

.btn-call {
    background: linear-gradient(45deg, #007bff, #0056b3);
    color: white;
}

.btn-back {
    background: #f8f9fa;
    color: #495057;
    border: 2px solid #e9ecef;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

/* Related Meals Section */
.related-meals {
    padding: 4rem 0;
    background: white;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
}

.section-header p {
    color: #6c757d;
    font-size: 1.1rem;
}

.related-meals-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.related-meal-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.related-meal-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.meal-card-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.meal-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.related-meal-card:hover .meal-card-image img {
    transform: scale(1.1);
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.related-meal-card:hover .card-overlay {
    opacity: 1;
}

.view-btn {
    background: white;
    color: #2c3e50;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.view-btn:hover {
    background: #ff6b6b;
    color: white;
    transform: scale(1.05);
}

.meal-card-content {
    padding: 1.5rem;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.card-category {
    background: #f8f9fa;
    color: #495057;
    padding: 0.3rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.card-price {
    font-size: 1.2rem;
    font-weight: 700;
    color: #ff6b6b;
}

.card-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.card-title a {
    color: inherit;
    text-decoration: none;
}

.card-description {
    color: #6c757d;
    line-height: 1.5;
    margin-bottom: 1rem;
}

.card-actions {
    display: flex;
    gap: 0.5rem;
}

.btn-details {
    background: #f8f9fa;
    color: #495057;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.3rem;
    transition: all 0.3s ease;
    flex: 1;
}

.btn-quick-order {
    background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 0.3rem;
    transition: all 0.3s ease;
    flex: 1;
}

.btn-details:hover {
    background: #e9ecef;
    transform: translateY(-2px);
}

.btn-quick-order:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(255,107,107,0.3);
}

.section-footer {
    text-align: center;
}

.btn-view-all {
    background: linear-gradient(45deg, #4ecdc4, #44a08d);
    color: white;
    padding: 1rem 2rem;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.btn-view-all:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(78,205,196,0.3);
}

/* Responsive Design */
@media (max-width: 768px) {
    .meal-hero-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .meal-title {
        font-size: 2rem;
    }
    
    .meal-info-grid {
        grid-template-columns: 1fr;
    }
    
    .meal-actions {
        flex-direction: column;
    }
    
    .related-meals-grid {
        grid-template-columns: 1fr;
    }
    
    .card-actions {
        flex-direction: column;
    }
}

/* Animation Classes */
.meal-details-container {
    animation: fadeIn 0.6s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.related-meal-card {
    animation: slideInUp 0.6s ease-out;
}

@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<script>
// Simple and clean JavaScript for meal details page
document.addEventListener('DOMContentLoaded', function() {
    // Add loading animation
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.6s ease';
    
    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);
    
    // Animate elements on scroll
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

    // Observe all cards
    document.querySelectorAll('.related-meal-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease';
        card.style.transitionDelay = `${index * 0.1}s`;
        observer.observe(card);
    });
});

// Quick order function
function quickOrder(mealName, price) {
    const message = `Bonjour! Je voudrais commander: ${mealName} - ${price.toFixed(2)}€`;
    const phoneNumber = '{{ $settings["contact_phone"] ?? "0426423743" }}';
    const whatsappUrl = `https://wa.me/${phoneNumber.replace(/[^0-9]/g, '')}?text=${encodeURIComponent(message)}`;
    
    window.open(whatsappUrl, '_blank');
    
    // Show success message
    showNotification('Ouverture de WhatsApp...', 'success');
}

// Simple notification function
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i>
            <span>${message}</span>
        </div>
    `;
    
    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        padding: 1rem 1.5rem;
        z-index: 10000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
        max-width: 300px;
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}
</script>
@endsection 