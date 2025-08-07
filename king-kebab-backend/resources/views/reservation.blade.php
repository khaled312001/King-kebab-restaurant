@extends('layouts.app')

@section('title', 'Réservation - King Kebab')
@section('description', 'Réservez votre table chez King Kebab. Contactez-nous au ' . $settings['contact_phone'] . ' ou utilisez notre formulaire en ligne')

@section('content')
<article>
    <!-- Hero Section for Reservation -->
    <section class="reservation-hero text-center" aria-label="reservation hero">
        <div class="hero-bg">
            <img src="{{ asset('assets/images/hero-slider-1.jpg') }}" alt="Réservation King Kebab" class="img-cover">
            <div class="hero-overlay"></div>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <span>Réservation en ligne</span>
                </div>
                <h1 class="display-1 hero-title hero-reveal">Réservez votre table</h1>
                <p class="body-2 hero-text hero-reveal">
                    Une expérience culinaire unique vous attend chez King Kebab
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Années d'expérience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Clients satisfaits</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Service disponible</span>
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
            <span>Faites défiler pour réserver</span>
        </div>
    </section>

    <!-- Reservation Section -->
    <section class="reservation-section">
        <div class="container">
            <div class="reservation-wrapper">
                <!-- Form Section -->
                <div class="form-section">
                    <div class="form-container">
                        <div class="form-header">
                            <div class="form-icon">
                                <ion-icon name="calendar-outline"></ion-icon>
                            </div>
                            <h2 class="form-title">Réservation en ligne</h2>
                            <p class="form-subtitle">
                                Ou appelez-nous directement au 
                                <a href="tel:{{ $settings['contact_phone'] }}" class="contact-link">{{ $settings['contact_phone'] }}</a>
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

                        <form action="{{ route('reservation.store') }}" method="POST" class="reservation-form">
                            @csrf
                            
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-wrapper">
                                        <ion-icon name="person-outline" class="input-icon"></ion-icon>
                                        <input type="text" name="name" placeholder="Votre nom complet" autocomplete="off" class="input-field" value="{{ old('name') }}" required>
                                        <div class="input-focus-border"></div>
                                    </div>
                                    
                                    <div class="input-wrapper">
                                        <ion-icon name="call-outline" class="input-icon"></ion-icon>
                                        <input type="tel" name="phone" placeholder="Numéro de téléphone" autocomplete="off" class="input-field" value="{{ old('phone') }}" required>
                                        <div class="input-focus-border"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-wrapper">
                                        <ion-icon name="people-outline" class="input-icon"></ion-icon>
                                        <select name="person" class="input-field select-field" required>
                                            <option value="">Nombre de personnes</option>
                                            <option value="1" {{ old('person') == '1' ? 'selected' : '' }}>1 personne</option>
                                            <option value="2" {{ old('person') == '2' ? 'selected' : '' }}>2 personnes</option>
                                            <option value="3" {{ old('person') == '3' ? 'selected' : '' }}>3 personnes</option>
                                            <option value="4" {{ old('person') == '4' ? 'selected' : '' }}>4 personnes</option>
                                            <option value="5" {{ old('person') == '5' ? 'selected' : '' }}>5 personnes</option>
                                            <option value="6" {{ old('person') == '6' ? 'selected' : '' }}>6 personnes</option>
                                            <option value="7" {{ old('person') == '7' ? 'selected' : '' }}>7 personnes</option>
                                        </select>
                                        <ion-icon name="chevron-down" class="select-arrow"></ion-icon>
                                        <div class="input-focus-border"></div>
                                    </div>

                                    <div class="input-wrapper">
                                        <ion-icon name="calendar-clear-outline" class="input-icon"></ion-icon>
                                        <input type="date" name="reservation_date" class="input-field" value="{{ old('reservation_date') }}" required>
                                        <div class="input-focus-border"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-wrapper">
                                    <ion-icon name="time-outline" class="input-icon"></ion-icon>
                                    <select name="reservation_time" class="input-field select-field" required>
                                        <option value="">Heure de réservation</option>
                                        <option value="11:00" {{ old('reservation_time') == '11:00' ? 'selected' : '' }}>11:00</option>
                                        <option value="12:00" {{ old('reservation_time') == '12:00' ? 'selected' : '' }}>12:00</option>
                                        <option value="13:00" {{ old('reservation_time') == '13:00' ? 'selected' : '' }}>13:00</option>
                                        <option value="14:00" {{ old('reservation_time') == '14:00' ? 'selected' : '' }}>14:00</option>
                                        <option value="15:00" {{ old('reservation_time') == '15:00' ? 'selected' : '' }}>15:00</option>
                                        <option value="16:00" {{ old('reservation_time') == '16:00' ? 'selected' : '' }}>16:00</option>
                                        <option value="17:00" {{ old('reservation_time') == '17:00' ? 'selected' : '' }}>17:00</option>
                                        <option value="18:00" {{ old('reservation_time') == '18:00' ? 'selected' : '' }}>18:00</option>
                                        <option value="19:00" {{ old('reservation_time') == '19:00' ? 'selected' : '' }}>19:00</option>
                                        <option value="20:00" {{ old('reservation_time') == '20:00' ? 'selected' : '' }}>20:00</option>
                                        <option value="21:00" {{ old('reservation_time') == '21:00' ? 'selected' : '' }}>21:00</option>
                                        <option value="22:00" {{ old('reservation_time') == '22:00' ? 'selected' : '' }}>22:00</option>
                                    </select>
                                    <ion-icon name="chevron-down" class="select-arrow"></ion-icon>
                                    <div class="input-focus-border"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-wrapper">
                                    <ion-icon name="chatbubble-outline" class="input-icon"></ion-icon>
                                    <textarea name="message" placeholder="Message spécial (optionnel) - Allergies, demandes particulières..." autocomplete="off" class="input-field textarea-field">{{ old('message') }}</textarea>
                                    <div class="input-focus-border"></div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary submit-btn">
                                <div class="btn-content">
                                    <ion-icon name="calendar-outline" class="btn-icon"></ion-icon>
                                    <span class="text text-1">Confirmer la réservation</span>
                                    <span class="text text-2" aria-hidden="true">Confirmer la réservation</span>
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
                            <h3 class="info-title">Informations importantes</h3>
                        </div>

                        <div class="info-content">
                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="call-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Réservation par téléphone</h4>
                                    <a href="tel:{{ $settings['contact_phone'] }}" class="contact-link">{{ $settings['contact_phone'] }}</a>
                                </div>
                            </div>

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
                                    <ion-icon name="time-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Horaires d'ouverture</h4>
                                    <p>{{ $settings['opening_hours'] }}</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Moyens de paiement</h4>
                                    <p>Espèces, Carte bancaire, Chèque</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="people-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Groupes</h4>
                                    <p>Réservation recommandée pour les groupes de plus de 6 personnes</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon-small">
                                    <ion-icon name="close-circle-outline"></ion-icon>
                                </div>
                                <div class="info-text">
                                    <h4>Annulation</h4>
                                    <p>Annulation possible jusqu'à 2h avant la réservation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-section text-center" aria-label="contact">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle label-2">Autres moyens de nous contacter</p>
                <h2 class="headline-1 section-title">Nous sommes là pour vous</h2>
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
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="card-title">Email</h3>
                    <p class="card-text">
                        <a href="mailto:{{ $settings['contact_email'] }}" class="contact-link">{{ $settings['contact_email'] }}</a>
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="card-title">Adresse</h3>
                    <p class="card-text">
                        {{ $settings['contact_address'] }}
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="card-title">Horaires</h3>
                    <p class="card-text">
                        {{ $settings['opening_hours'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</article>
@endsection 