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
                <p class="label-2 section-subtitle hero-reveal">Réservez votre table</p>
                <h1 class="display-1 hero-title hero-reveal">Une expérience culinaire unique</h1>
                <p class="body-2 hero-text hero-reveal">
                    Réservez votre table chez King Kebab et préparez-vous à vivre une expérience gastronomique exceptionnelle
                </p>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="floating-elements">
            <div class="floating-icon" style="--delay: 0s;">
                <ion-icon name="restaurant-outline"></ion-icon>
            </div>
            <div class="floating-icon" style="--delay: 2s;">
                <ion-icon name="wine-outline"></ion-icon>
            </div>
            <div class="floating-icon" style="--delay: 4s;">
                <ion-icon name="heart-outline"></ion-icon>
            </div>
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
                                Demande de réservation <a href="tel:{{ $settings['contact_phone'] }}" class="contact-link">{{ $settings['contact_phone'] }}</a>
                                ou remplissez le formulaire ci-dessous
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
                                    </div>
                                    
                                    <div class="input-wrapper">
                                        <ion-icon name="call-outline" class="input-icon"></ion-icon>
                                        <input type="tel" name="phone" placeholder="Numéro de téléphone" autocomplete="off" class="input-field" value="{{ old('phone') }}" required>
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
                                    </div>

                                    <div class="input-wrapper">
                                        <ion-icon name="calendar-clear-outline" class="input-icon"></ion-icon>
                                        <input type="date" name="reservation_date" class="input-field" value="{{ old('reservation_date') }}" required>
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
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-wrapper">
                                    <ion-icon name="chatbubble-outline" class="input-icon"></ion-icon>
                                    <textarea name="message" placeholder="Message spécial (optionnel) - Allergies, demandes particulières..." autocomplete="off" class="input-field textarea-field">{{ old('message') }}</textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary submit-btn">
                                <ion-icon name="calendar-outline" class="btn-icon"></ion-icon>
                                <span class="text text-1">Confirmer la réservation</span>
                                <span class="text text-2" aria-hidden="true">Confirmer la réservation</span>
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

<!-- Custom Styles for Reservation Page -->
<style>
    /* Hero Section */
    .reservation-hero {
        position: relative;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
    }

    .hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(200,0,0,0.4) 100%);
        z-index: 2;
    }

    .hero-content {
        position: relative;
        z-index: 3;
        color: var(--white);
    }

    .hero-title {
        color: var(--white);
        margin-bottom: 20px;
        text-shadow: 0 4px 8px rgba(0,0,0,0.5);
    }

    .hero-text {
        color: rgba(255,255,255,0.9);
        max-width: 600px;
        margin: 0 auto;
    }

    /* Floating Elements */
    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        pointer-events: none;
    }

    .floating-icon {
        position: absolute;
        color: rgba(255,255,255,0.3);
        font-size: 24px;
        animation: float 6s ease-in-out infinite;
        animation-delay: var(--delay);
    }

    .floating-icon:nth-child(1) { top: 20%; left: 10%; }
    .floating-icon:nth-child(2) { top: 60%; right: 15%; }
    .floating-icon:nth-child(3) { bottom: 30%; left: 20%; }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(10deg); }
    }

    /* Reservation Section */
    .reservation-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .reservation-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Form Section */
    .form-section {
        background: var(--white);
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        overflow: hidden;
        position: relative;
    }

    .form-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gold-crayola), #a00000);
    }

    .form-container {
        padding: 40px;
    }

    .form-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .form-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--gold-crayola), #a00000);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: var(--white);
        font-size: 32px;
        box-shadow: 0 10px 20px rgba(200,0,0,0.3);
    }

    .form-title {
        font-size: 2.5rem;
        color: var(--rich-black-fogra-29);
        margin-bottom: 10px;
    }

    .form-subtitle {
        color: var(--davys-gray);
        font-size: 1.1rem;
    }

    .contact-link {
        color: var(--gold-crayola);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .contact-link:hover {
        color: #a00000;
    }

    /* Alerts */
    .alert {
        padding: 20px;
        border-radius: 12px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 500;
    }

    .alert-success {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
        border-left: 4px solid #28a745;
    }

    .alert-error {
        background: linear-gradient(135deg, #f8d7da, #f5c6cb);
        color: #721c24;
        border-left: 4px solid #dc3545;
    }

    .alert ion-icon {
        font-size: 24px;
        flex-shrink: 0;
    }

    /* Form Groups */
    .form-group {
        margin-bottom: 25px;
    }

    .input-group {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        color: var(--davys-gray);
        font-size: 20px;
        z-index: 2;
    }

    .input-field {
        width: 100%;
        padding: 15px 15px 15px 50px;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: var(--white);
    }

    .input-field:focus {
        outline: none;
        border-color: var(--gold-crayola);
        box-shadow: 0 0 0 3px rgba(200,0,0,0.1);
        transform: translateY(-2px);
    }

    .select-field {
        appearance: none;
        cursor: pointer;
    }

    .select-arrow {
        position: absolute;
        right: 15px;
        color: var(--davys-gray);
        font-size: 18px;
        pointer-events: none;
        transition: transform 0.3s ease;
    }

    .input-wrapper:focus-within .select-arrow {
        transform: rotate(180deg);
    }

    .textarea-field {
        min-height: 120px;
        resize: vertical;
        padding-top: 15px;
    }

    /* Submit Button */
    .submit-btn {
        width: 100%;
        padding: 18px 30px;
        background: linear-gradient(135deg, var(--gold-crayola), #a00000);
        border: none;
        border-radius: 12px;
        color: var(--white);
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 8px 20px rgba(200,0,0,0.3);
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(200,0,0,0.4);
    }

    .btn-icon {
        font-size: 20px;
    }

    /* Info Section */
    .info-section {
        background: linear-gradient(135deg, var(--rich-black-fogra-29), #1a1a1a);
        border-radius: 20px;
        color: var(--white);
        overflow: hidden;
        position: relative;
    }

    .info-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="0.8" fill="rgba(255,255,255,0.08)"/><circle cx="40" cy="80" r="1.2" fill="rgba(255,255,255,0.12)"/></svg>');
        background-size: 50px 50px;
        animation: floatingDots 20s linear infinite;
        pointer-events: none;
    }

    @keyframes floatingDots {
        0% { transform: translateY(0px); }
        100% { transform: translateY(-50px); }
    }

    .info-container {
        padding: 40px;
        position: relative;
        z-index: 2;
    }

    .info-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .info-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--gold-crayola), #a00000);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: var(--white);
        font-size: 32px;
        box-shadow: 0 10px 20px rgba(200,0,0,0.3);
    }

    .info-title {
        font-size: 2rem;
        color: var(--white);
        margin-bottom: 10px;
    }

    .info-content {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 20px;
        background: rgba(255,255,255,0.05);
        border-radius: 12px;
        border-left: 4px solid var(--gold-crayola);
        transition: all 0.3s ease;
    }

    .info-item:hover {
        background: rgba(255,255,255,0.1);
        transform: translateX(5px);
    }

    .info-icon-small {
        width: 40px;
        height: 40px;
        background: var(--gold-crayola);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 18px;
        flex-shrink: 0;
    }

    .info-text h4 {
        color: var(--gold-crayola);
        font-size: 1.1rem;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .info-text p {
        color: rgba(255,255,255,0.8);
        font-size: 0.95rem;
        line-height: 1.5;
    }

    /* Contact Section */
    .contact-section {
        padding: 80px 0;
        background: var(--white);
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-subtitle {
        color: var(--gold-crayola);
        font-weight: 600;
        margin-bottom: 10px;
    }

    .section-title {
        color: var(--rich-black-fogra-29);
        margin-bottom: 20px;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .contact-card {
        background: var(--white);
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .card-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--gold-crayola), #a00000);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: var(--white);
        font-size: 24px;
    }

    .card-title {
        color: var(--rich-black-fogra-29);
        font-size: 1.3rem;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .card-text {
        color: var(--davys-gray);
        font-size: 1rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .reservation-wrapper {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .input-group {
            grid-template-columns: 1fr;
        }

        .reservation-hero {
            height: 50vh;
        }

        .form-container,
        .info-container {
            padding: 30px 20px;
        }

        .contact-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Animations */
    .hero-reveal {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .hero-reveal:nth-child(2) {
        animation-delay: 0.2s;
    }

    .hero-reveal:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection 