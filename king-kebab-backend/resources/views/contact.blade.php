@extends('layouts.app')

@section('title', 'Contact - King Kebab')
@section('description', 'Contactez King Kebab pour vos réservations et questions. Nous sommes situés au ' . $settings['contact_address'])

@section('content')
<article>
    <!-- Hero Section for Contact -->
    <section class="contact-hero text-center" aria-label="contact hero">
        <div class="hero-bg">
            <img src="{{ asset('assets/images/hero-slider-3.jpg') }}" alt="Contact King Kebab" class="img-cover">
            <div class="hero-overlay"></div>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <ion-icon name="chatbubble-outline"></ion-icon>
                    <span>Contactez-nous</span>
                </div>
                <h1 class="display-1 hero-title hero-reveal">Nous sommes là pour vous</h1>
                <p class="body-2 hero-text hero-reveal">
                    Contactez-nous pour vos réservations, questions ou suggestions. Notre équipe est là pour vous accueillir !
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Service client</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Années d'expérience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Animated Background Elements -->
        <div class="animated-bg">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
            <div class="floating-shape shape-4"></div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-line"></div>
            <span>Faites défiler pour nous contacter</span>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="section-header text-center">
                <p class="section-subtitle label-2">Nos coordonnées</p>
                <h2 class="headline-1 section-title">Comment nous joindre</h2>
                <p class="section-text">
                    Plusieurs façons de nous contacter pour vos réservations et questions
                </p>
            </div>

            <div class="contact-grid">
                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="card-title">Téléphone</h3>
                    <p class="card-text">
                        <a href="tel:{{ $settings['contact_phone'] }}" class="contact-link">{{ $settings['contact_phone'] }}</a>
                    </p>
                    <div class="card-hover-effect"></div>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="card-title">Email</h3>
                    <p class="card-text">
                        <a href="mailto:{{ $settings['contact_email'] }}" class="contact-link">{{ $settings['contact_email'] }}</a>
                    </p>
                    <div class="card-hover-effect"></div>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="card-title">Adresse</h3>
                    <p class="card-text">
                        {{ $settings['contact_address'] }}
                    </p>
                    <div class="card-hover-effect"></div>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="card-title">Horaires</h3>
                    <p class="card-text">
                        {{ $settings['opening_hours'] }}
                    </p>
                    <div class="card-hover-effect"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-wrapper">
                <!-- Form Section -->
                <div class="form-section">
                    <div class="form-container">
                        <div class="form-header">
                            <div class="form-icon">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <h2 class="form-title">Envoyez-nous un message</h2>
                            <p class="form-subtitle">
                                Contactez-nous pour toute question ou demande spéciale
                            </p>
                        </div>

                        @if(session('success'))
                        <div class="alert alert-success">
                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                            <span>{{ session('success') }}</span>
                        </div>
                        @endif

                        @if($errors && $errors->any())
                        <div class="alert alert-error">
                            <ion-icon name="close-circle-outline"></ion-icon>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                            @csrf
                            
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-wrapper">
                                        <ion-icon name="person-outline" class="input-icon"></ion-icon>
                                        <input type="text" name="name" placeholder="Votre nom complet" autocomplete="off" class="input-field" value="{{ old('name') }}" required>
                                        <div class="input-focus-border"></div>
                                    </div>
                                    
                                    <div class="input-wrapper">
                                        <ion-icon name="mail-outline" class="input-icon"></ion-icon>
                                        <input type="email" name="email" placeholder="Votre email" autocomplete="off" class="input-field" value="{{ old('email') }}" required>
                                        <div class="input-focus-border"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-wrapper">
                                    <ion-icon name="chatbubble-outline" class="input-icon"></ion-icon>
                                    <input type="text" name="subject" placeholder="Sujet de votre message" autocomplete="off" class="input-field" value="{{ old('subject') }}" required>
                                    <div class="input-focus-border"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-wrapper">
                                    <ion-icon name="document-text-outline" class="input-icon"></ion-icon>
                                    <textarea name="message" placeholder="Votre message..." autocomplete="off" class="input-field textarea-field" rows="6" required>{{ old('message') }}</textarea>
                                    <div class="input-focus-border"></div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary submit-btn">
                                <div class="btn-content">
                                    <ion-icon name="paper-plane-outline" class="btn-icon"></ion-icon>
                                    <span class="text text-1">Envoyer le message</span>
                                    <span class="text text-2" aria-hidden="true">Envoyer le message</span>
                                </div>
                                <div class="btn-glow"></div>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Info Section -->
                <div class="info-section">
                    <div class="info-container">
                        <div class="info-header">
                            <div class="info-icon">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                            <h3 class="info-title">Informations de contact</h3>
                        </div>

                        <div class="info-content">
                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="location-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Adresse</h4>
                                    <p>{{ $settings['contact_address'] }}</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="call-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Téléphone</h4>
                                    <a href="tel:{{ $settings['contact_phone'] }}" class="contact-link">{{ $settings['contact_phone'] }}</a>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Email</h4>
                                    <a href="mailto:{{ $settings['contact_email'] }}" class="contact-link">{{ $settings['contact_email'] }}</a>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="time-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Horaires d'ouverture</h4>
                                    <p>{{ $settings['opening_hours'] }}</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="restaurant-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Réservations</h4>
                                    <p>Réservation recommandée pour les groupes</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Paiement</h4>
                                    <p>Espèces, Carte bancaire, Chèque</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-header text-center">
                <p class="section-subtitle label-2">Notre localisation</p>
                <h2 class="headline-1 section-title">Trouvez-nous facilement</h2>
            </div>
            
            <div class="map-container">
                <div class="map-placeholder">
                    <div class="map-icon">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>
                    <h3>Carte interactive</h3>
                    <p>Localisez-nous sur la carte pour venir nous rendre visite</p>
                    <div class="map-actions">
                        <a href="#" class="btn btn-secondary">
                            <ion-icon name="navigate-outline"></ion-icon>
                            <span>Itinéraire</span>
                        </a>
                        <a href="#" class="btn btn-primary">
                            <ion-icon name="map-outline"></ion-icon>
                            <span>Voir la carte</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
@endsection 