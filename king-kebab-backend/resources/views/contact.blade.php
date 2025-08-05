@extends('layouts.app')

@section('title', 'Contact - King Kebab')
@section('description', 'Contactez King Kebab pour vos réservations et questions. Nous sommes situés au ' . $settings['contact_address'])

@section('content')
<article>
    <!-- Contact Section -->
    <section class="section contact text-center" aria-label="contact">
        <div class="container">
            <p class="section-subtitle label-2">Contactez-nous</p>
            <h2 class="headline-1 section-title">Nous sommes là pour vous</h2>
            <p class="section-text">
                N'hésitez pas à nous contacter pour vos réservations, questions ou suggestions.
                Notre équipe est là pour vous accueillir et vous offrir la meilleure expérience possible.
            </p>

            <div class="contact-info grid-list">
                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Téléphone</h3>
                    <p class="body-4 card-text">
                        <a href="tel:{{ $settings['contact_phone'] }}" class="contact-link">{{ $settings['contact_phone'] }}</a>
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Email</h3>
                    <p class="body-4 card-text">
                        <a href="mailto:{{ $settings['contact_email'] }}" class="contact-link">{{ $settings['contact_email'] }}</a>
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Adresse</h3>
                    <p class="body-4 card-text">
                        {{ $settings['contact_address'] }}
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Horaires</h3>
                    <p class="body-4 card-text">
                        {{ $settings['opening_hours'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section class="reservation">
        <div class="container">
            <div class="form reservation-form bg-black-10">
                <form action="{{ route('contact.store') }}" method="POST" class="form-left">
                    @csrf
                    <h2 class="headline-1 text-center">Envoyez-nous un message</h2>
                    <p class="form-text text-center">
                        Contactez-nous pour toute question ou demande spéciale
                    </p>

                    @if(session('success'))
                    <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if($errors && $errors->any())
                    <div class="alert alert-error" style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="input-wrapper">
                        <input type="text" name="name" placeholder="Votre nom" autocomplete="off" class="input-field" value="{{ old('name') }}" required>
                        <input type="email" name="email" placeholder="Votre email" autocomplete="off" class="input-field" value="{{ old('email') }}" required>
                    </div>

                    <div class="input-wrapper">
                        <input type="text" name="subject" placeholder="Sujet" autocomplete="off" class="input-field" value="{{ old('subject') }}" required>
                    </div>

                    <textarea name="message" placeholder="Votre message" autocomplete="off" class="input-field" required>{{ old('message') }}</textarea>

                    <button type="submit" class="btn btn-secondary">
                        <span class="text text-1">Envoyer le message</span>
                        <span class="text text-2" aria-hidden="true">Envoyer le message</span>
                    </button>
                </form>

                <div class="form-right text-center" style="background-image: url('{{ asset('assets/images/form-pattern.png') }}')">
                    <h2 class="headline-1 text-center">Informations</h2>
                    <p class="contact-label">Adresse</p>
                    <address class="body-4">
                        {{ $settings['contact_address'] }}
                    </address>

                    <div class="separator"></div>

                    <p class="contact-label">Téléphone</p>
                    <a href="tel:{{ $settings['contact_phone'] }}" class="body-1 contact-number hover-underline">{{ $settings['contact_phone'] }}</a>

                    <div class="separator"></div>

                    <p class="contact-label">Email</p>
                    <a href="mailto:{{ $settings['contact_email'] }}" class="body-1 contact-number hover-underline">{{ $settings['contact_email'] }}</a>

                    <div class="separator"></div>

                    <p class="contact-label">Horaires</p>
                    <p class="body-4">
                        {{ $settings['opening_hours'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</article>
@endsection 