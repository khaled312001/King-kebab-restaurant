@extends('layouts.app')

@section('title', 'Articles - King Kebab')
@section('description', 'Découvrez nos articles sur la gastronomie, les recettes et l\'histoire de King Kebab')

@section('content')
<div class="articles-container">
    <!-- Hero Section -->
    <section class="articles-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Nos Articles</h1>
                    <p class="hero-subtitle">Découvrez nos histoires, recettes et actualités culinaires</p>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('assets/images/hero-slider-1.jpg') }}" alt="Articles King Kebab">
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="articles-section">
        <div class="container">
            @if($articles->count() > 0)
            <div class="articles-grid">
                @foreach($articles as $article)
                <article class="article-card">
                    <div class="article-image">
                        <img src="{{ $article->image ? asset($article->image) : asset('assets/images/event-1.jpg') }}" 
                             alt="{{ $article->title }}">
                        <div class="article-overlay">
                            <div class="article-category">
                                <i class="fas fa-newspaper"></i>
                                <span>Article</span>
                            </div>
                            <div class="article-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span>{{ $article->formatted_date }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-author">
                                <i class="fas fa-user"></i>
                                {{ $article->author }}
                            </span>
                            <span class="article-time">
                                <i class="fas fa-clock"></i>
                                {{ $article->formatted_date }}
                            </span>
                        </div>
                        
                        <h2 class="article-title">
                            <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                        </h2>
                        
                        <p class="article-excerpt">
                            {{ $article->excerpt }}
                        </p>
                        
                        <div class="article-footer">
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-read-more">
                                <i class="fas fa-arrow-right"></i>
                                <span>Lire la suite</span>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            @if($articles->hasPages())
            <div class="pagination-wrapper">
                {{ $articles->links() }}
            </div>
            @endif

            @else
            <div class="no-articles">
                <div class="no-articles-content">
                    <div class="no-articles-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h2>Aucun article pour le moment</h2>
                    <p>Nous préparons de nouveaux articles passionnants pour vous !</p>
                    <div class="no-articles-actions">
                        <a href="{{ route('menu') }}" class="btn btn-primary">
                            <i class="fas fa-utensils"></i>
                            <span>Voir notre menu</span>
                        </a>
                        <a href="{{ route('home') }}" class="btn btn-secondary">
                            <i class="fas fa-home"></i>
                            <span>Retour à l'accueil</span>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>

    <!-- Featured Article Section -->
    <section class="featured-article">
        <div class="container">
            <div class="featured-content">
                <div class="featured-text">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i>
                        <span>Article à la une</span>
                    </div>
                    <h2>L'Histoire de King Kebab</h2>
                    <p>
                        Découvrez l'histoire passionnante de notre restaurant, de ses débuts modestes 
                        à sa transformation en destination culinaire reconnue. Une histoire de famille, 
                        de passion et de traditions culinaires transmises de génération en génération.
                    </p>
                    <div class="featured-stats">
                        <div class="stat-item">
                            <span class="stat-number">20+</span>
                            <span class="stat-label">Années d'histoire</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Clients satisfaits</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Recettes authentiques</span>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-featured">
                        <i class="fas fa-book-open"></i>
                        <span>Lire notre histoire</span>
                    </a>
                </div>
                <div class="featured-image">
                    <img src="{{ asset('assets/images/about-banner.jpg') }}" alt="Histoire King Kebab">
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Restez informé</h2>
                <p>Recevez nos derniers articles et actualités directement dans votre boîte mail</p>
                <form class="newsletter-form">
                    <div class="form-group">
                        <input type="email" placeholder="Votre adresse email" class="form-input">
                        <button type="submit" class="btn btn-newsletter">
                            <i class="fas fa-paper-plane"></i>
                            <span>S'abonner</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<style>
/* Simple and Beautiful Articles Page Styles */
.articles-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

/* Hero Section */
.articles-hero {
    padding: 4rem 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.articles-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('{{ asset("assets/images/hero-slider-1.jpg") }}') center/cover;
    opacity: 0.1;
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.hero-text {
    text-align: left;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.3rem;
    opacity: 0.9;
    line-height: 1.6;
}

.hero-image {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.hero-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

/* Articles Section */
.articles-section {
    padding: 5rem 0;
    background: white;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.articles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.article-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.article-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.article-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.article-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.article-card:hover .article-image img {
    transform: scale(1.1);
}

.article-overlay {
    position: absolute;
    top: 1rem;
    left: 1rem;
    right: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.article-category,
.article-date {
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

.article-content {
    padding: 2rem;
}

.article-meta {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: #6c757d;
}

.article-author,
.article-time {
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

.article-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
    line-height: 1.3;
}

.article-title a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s ease;
}

.article-title a:hover {
    color: #ff6b6b;
}

.article-excerpt {
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.article-footer {
    display: flex;
    justify-content: flex-end;
}

.btn-read-more {
    background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
    color: white;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.btn-read-more:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(255,107,107,0.3);
    color: white;
}

/* No Articles */
.no-articles {
    text-align: center;
    padding: 4rem 0;
}

.no-articles-content {
    max-width: 500px;
    margin: 0 auto;
}

.no-articles-icon {
    width: 100px;
    height: 100px;
    background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 2rem;
    color: white;
    font-size: 2.5rem;
}

.no-articles h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
}

.no-articles p {
    color: #6c757d;
    font-size: 1.1rem;
    margin-bottom: 2rem;
}

.no-articles-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Featured Article Section */
.featured-article {
    padding: 5rem 0;
    background: #f8f9fa;
}

.featured-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.featured-badge {
    background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    margin-bottom: 1rem;
}

.featured-text h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1.5rem;
}

.featured-text p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #6c757d;
    margin-bottom: 2rem;
}

.featured-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-item {
    text-align: center;
    padding: 1rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.stat-number {
    display: block;
    font-size: 1.8rem;
    font-weight: 700;
    color: #ff6b6b;
    margin-bottom: 0.3rem;
}

.stat-label {
    font-size: 0.8rem;
    color: #6c757d;
    font-weight: 600;
}

.btn-featured {
    background: linear-gradient(45deg, #667eea, #764ba2);
    color: white;
    padding: 1rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.btn-featured:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102,126,234,0.3);
    color: white;
}

.featured-image {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.featured-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

/* Newsletter Section */
.newsletter-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-align: center;
}

.newsletter-content {
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.newsletter-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.newsletter-form {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.form-group {
    display: flex;
    gap: 0.5rem;
    flex: 1;
    max-width: 400px;
}

.form-input {
    flex: 1;
    padding: 1rem 1.5rem;
    border: none;
    border-radius: 25px;
    font-size: 1rem;
    outline: none;
}

.btn-newsletter {
    background: white;
    color: #667eea;
    padding: 1rem 2rem;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-newsletter:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

/* Pagination */
.pagination-wrapper {
    text-align: center;
    margin-top: 3rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .articles-grid {
        grid-template-columns: 1fr;
    }
    
    .featured-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .featured-stats {
        grid-template-columns: 1fr;
    }
    
    .newsletter-form {
        flex-direction: column;
        align-items: center;
    }
    
    .form-group {
        width: 100%;
        max-width: 300px;
    }
    
    .no-articles-actions {
        flex-direction: column;
        align-items: center;
    }
}

/* Animation Classes */
.articles-container {
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

.article-card {
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
// Simple and clean JavaScript for articles page
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

    // Observe all animated elements
    document.querySelectorAll('.article-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease';
        card.style.transitionDelay = `${index * 0.1}s`;
        observer.observe(card);
    });
    
    // Newsletter form handling
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.form-input').value;
            if (email) {
                showNotification('Merci pour votre inscription !', 'success');
                this.querySelector('.form-input').value = '';
            }
        });
    }
});

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