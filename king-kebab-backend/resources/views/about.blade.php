@extends('layouts.app')

@section('title', 'À propos - King Kebab')
@section('description', 'Découvrez l\'histoire de King Kebab et notre passion pour la cuisine traditionnelle')

@section('content')
<div class="about-container">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Notre Histoire</h1>
                    <p class="hero-subtitle">Plus de 20 ans de passion pour la cuisine traditionnelle</p>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('assets/images/about-banner.jpg') }}" alt="King Kebab Restaurant">
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="container">
            <div class="story-grid">
                <div class="story-content">
                    <h2>L'Histoire de King Kebab</h2>
                    <p class="story-text">
                        Fondé en 2003 par la famille Hassan, King Kebab est né d'une passion pour la cuisine traditionnelle du Moyen-Orient. 
                        Notre restaurant a commencé comme un petit établissement familial et s'est transformé en destination culinaire reconnue.
                    </p>
                    <p class="story-text">
                        Chaque jour, nous perpétuons les traditions culinaires transmises de génération en génération, 
                        en utilisant des recettes authentiques et des ingrédients de qualité supérieure.
                    </p>
                    <div class="story-stats">
                        <div class="stat-item">
                            <span class="stat-number">20+</span>
                            <span class="stat-label">Années d'expérience</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Plats authentiques</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Clients satisfaits</span>
                        </div>
                    </div>
                </div>
                <div class="story-image">
                    <img src="{{ asset('assets/images/about-abs-image.jpg') }}" alt="Notre cuisine">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <h2>Nos Valeurs</h2>
                <p>Ce qui fait de King Kebab un restaurant unique</p>
            </div>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Qualité Premium</h3>
                    <p>Nous sélectionnons uniquement les meilleurs ingrédients frais et de qualité pour garantir une expérience culinaire exceptionnelle.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Passion Culinaire</h3>
                    <p>Chaque plat est préparé avec amour et attention aux détails, en respectant les traditions culinaires ancestrales.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Service Familial</h3>
                    <p>Nous accueillons chaque client comme un membre de notre famille, avec chaleur et hospitalité traditionnelle.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>Nous nous engageons à maintenir les plus hauts standards de qualité dans chaque aspect de notre service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <h2>Notre Équipe</h2>
                <p>Des passionnés dédiés à votre satisfaction</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Chef Ahmed">
                    </div>
                    <div class="member-info">
                        <h3>Chef Ahmed</h3>
                        <p class="member-role">Chef Principal</p>
                        <p class="member-desc">Avec plus de 15 ans d'expérience, Chef Ahmed maîtrise l'art de la cuisine traditionnelle du Moyen-Orient.</p>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Fatima">
                    </div>
                    <div class="member-info">
                        <h3>Fatima</h3>
                        <p class="member-role">Gérante</p>
                        <p class="member-desc">Fatima s'assure que chaque client reçoit un service exceptionnel et une expérience mémorable.</p>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Hassan">
                    </div>
                    <div class="member-info">
                        <h3>Hassan</h3>
                        <p class="member-role">Service Client</p>
                        <p class="member-desc">Hassan veille à ce que chaque visite soit une expérience agréable et personnalisée.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>Avis de nos Clients</h2>
                <p>Ce que disent nos clients satisfaits</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Le meilleur kebab que j'ai jamais mangé ! Les ingrédients sont frais et le service est excellent."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Marie Dubois">
                        <div class="author-info">
                            <h4>Marie Dubois</h4>
                            <p>Cliente régulière</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Ambiance chaleureuse et plats délicieux. Je recommande vivement !"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Pierre Martin">
                        <div class="author-info">
                            <h4>Pierre Martin</h4>
                            <p>Client fidèle</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Service rapide et personnel très sympathique. Les prix sont raisonnables pour la qualité."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/images/testi-avatar.jpg') }}" alt="Sophie Bernard">
                        <div class="author-info">
                            <h4>Sophie Bernard</h4>
                            <p>Nouvelle cliente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Venez nous rendre visite</h2>
                <p>Découvrez par vous-même pourquoi King Kebab est le choix préféré de nos clients</p>
                <div class="cta-buttons">
                    <a href="{{ route('menu') }}" class="btn btn-primary">
                        <i class="fas fa-utensils"></i>
                        <span>Voir notre menu</span>
                    </a>
                    <a href="{{ route('reservation') }}" class="btn btn-secondary">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Réserver une table</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Simple and Beautiful About Page Styles */
.about-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

/* Hero Section */
.about-hero {
    padding: 4rem 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.about-hero::before {
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

/* Story Section */
.story-section {
    padding: 5rem 0;
    background: white;
}

.story-grid {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.story-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 2rem;
}

.story-text {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #6c757d;
    margin-bottom: 1.5rem;
}

.story-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.stat-item {
    text-align: center;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 15px;
    transition: transform 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    color: #ff6b6b;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.9rem;
    color: #6c757d;
    font-weight: 600;
}

.story-image {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.story-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

/* Values Section */
.values-section {
    padding: 5rem 0;
    background: #f8f9fa;
}

.section-header {
    text-align: center;
    margin-bottom: 4rem;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
}

.section-header p {
    font-size: 1.1rem;
    color: #6c757d;
}

.values-grid {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.value-card {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.value-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.value-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2rem;
}

.value-card h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
}

.value-card p {
    color: #6c757d;
    line-height: 1.6;
}

/* Team Section */
.team-section {
    padding: 5rem 0;
    background: white;
}

.team-grid {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.team-member {
    background: #f8f9fa;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.team-member:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.member-image {
    height: 250px;
    overflow: hidden;
}

.member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.team-member:hover .member-image img {
    transform: scale(1.1);
}

.member-info {
    padding: 2rem;
    text-align: center;
}

.member-info h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.member-role {
    color: #ff6b6b;
    font-weight: 600;
    margin-bottom: 1rem;
}

.member-desc {
    color: #6c757d;
    line-height: 1.6;
}

/* Testimonials Section */
.testimonials-section {
    padding: 5rem 0;
    background: #f8f9fa;
}

.testimonials-grid {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.testimonial-card {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.testimonial-content {
    margin-bottom: 1.5rem;
}

.testimonial-content p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #6c757d;
    font-style: italic;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.testimonial-author img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
}

.author-info h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 0.2rem;
}

.author-info p {
    color: #6c757d;
    font-size: 0.9rem;
}

/* Contact CTA Section */
.contact-cta {
    padding: 5rem 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-align: center;
}

.cta-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 1rem;
}

.cta-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.cta-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
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
}

.btn-primary {
    background: white;
    color: #667eea;
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
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
    
    .story-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .story-stats {
        grid-template-columns: 1fr;
    }
    
    .values-grid {
        grid-template-columns: 1fr;
    }
    
    .team-grid {
        grid-template-columns: 1fr;
    }
    
    .testimonials-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 300px;
    }
}

/* Animation Classes */
.about-container {
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

.value-card,
.team-member,
.testimonial-card {
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
// Simple and clean JavaScript for about page
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
    document.querySelectorAll('.value-card, .team-member, .testimonial-card').forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'all 0.6s ease';
        element.style.transitionDelay = `${index * 0.1}s`;
        observer.observe(element);
    });
});
</script>
@endsection 