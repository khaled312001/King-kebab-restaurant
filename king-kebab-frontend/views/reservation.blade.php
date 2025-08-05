@extends('layouts.app')

@section('title', 'Réservation - King Kebab')
@section('description', 'Réservez votre table chez King Kebab. Contactez-nous au 0426423743 ou utilisez notre formulaire en ligne')

@section('content')
<article>
    <!-- Reservation Section -->
    <section class="reservation">
        <div class="container">
            <div class="form reservation-form bg-black-10">
                <form action="{{ route('reservation') }}" method="POST" class="form-left">
                    @csrf
                    <h2 class="headline-1 text-center">Réservation en ligne</h2>
                    <p class="form-text text-center">
                        Demande de réservation <a href="tel:0426423743" class="link">0426423743</a>
                        ou remplissez le formulaire
                    </p>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="input-wrapper">
                        <input type="text" name="name" placeholder="Votre nom" autocomplete="off" class="input-field" value="{{ old('name') }}" required>
                        <input type="tel" name="phone" placeholder="Numéro de téléphone" autocomplete="off" class="input-field" value="{{ old('phone') }}" required>
                    </div>

                    <div class="input-wrapper">
                        <div class="icon-wrapper">
                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                            <select name="person" class="input-field" required>
                                <option value="">Nombre de personnes</option>
                                <option value="1" {{ old('person') == '1' ? 'selected' : '' }}>1 personne</option>
                                <option value="2" {{ old('person') == '2' ? 'selected' : '' }}>2 personnes</option>
                                <option value="3" {{ old('person') == '3' ? 'selected' : '' }}>3 personnes</option>
                                <option value="4" {{ old('person') == '4' ? 'selected' : '' }}>4 personnes</option>
                                <option value="5" {{ old('person') == '5' ? 'selected' : '' }}>5 personnes</option>
                                <option value="6" {{ old('person') == '6' ? 'selected' : '' }}>6 personnes</option>
                                <option value="7" {{ old('person') == '7' ? 'selected' : '' }}>7 personnes</option>
                            </select>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="icon-wrapper">
                            <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                            <input type="date" name="reservation-date" class="input-field" value="{{ old('reservation-date') }}" required>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="icon-wrapper">
                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                            <select name="reservation-time" class="input-field" required>
                                <option value="">Heure de réservation</option>
                                <option value="11:00" {{ old('reservation-time') == '11:00' ? 'selected' : '' }}>11:00</option>
                                <option value="12:00" {{ old('reservation-time') == '12:00' ? 'selected' : '' }}>12:00</option>
                                <option value="13:00" {{ old('reservation-time') == '13:00' ? 'selected' : '' }}>13:00</option>
                                <option value="14:00" {{ old('reservation-time') == '14:00' ? 'selected' : '' }}>14:00</option>
                                <option value="15:00" {{ old('reservation-time') == '15:00' ? 'selected' : '' }}>15:00</option>
                                <option value="16:00" {{ old('reservation-time') == '16:00' ? 'selected' : '' }}>16:00</option>
                                <option value="17:00" {{ old('reservation-time') == '17:00' ? 'selected' : '' }}>17:00</option>
                                <option value="18:00" {{ old('reservation-time') == '18:00' ? 'selected' : '' }}>18:00</option>
                                <option value="19:00" {{ old('reservation-time') == '19:00' ? 'selected' : '' }}>19:00</option>
                                <option value="20:00" {{ old('reservation-time') == '20:00' ? 'selected' : '' }}>20:00</option>
                                <option value="21:00" {{ old('reservation-time') == '21:00' ? 'selected' : '' }}>21:00</option>
                                <option value="22:00" {{ old('reservation-time') == '22:00' ? 'selected' : '' }}>22:00</option>
                            </select>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>
                    </div>

                    <textarea name="message" placeholder="Message (optionnel)" autocomplete="off" class="input-field">{{ old('message') }}</textarea>

                    <button type="submit" class="btn btn-secondary">
                        <span class="text text-1">Réserver</span>
                        <span class="text text-2" aria-hidden="true">Réserver</span>
                    </button>
                </form>

                <div class="form-right text-center" style="background-image: url('{{ asset('assets/images/form-pattern.png') }}')">
                    <h2 class="headline-1 text-center">Contact</h2>
                    <p class="contact-label">Demande de réservation</p>
                    <a href="tel:0426423743" class="body-1 contact-number hover-underline">0426423743</a>

                    <div class="separator"></div>

                    <p class="contact-label">Adresse</p>
                    <address class="body-4">
                        20, avenue Marcel Nicolas
                    </address>

                    <p class="contact-label">Horaires</p>
                    <p class="body-4">
                        Tous les jours <br>
                        11h00 - 23h00
                    </p>

                    <div class="separator"></div>

                    <p class="contact-label">Informations importantes</p>
                    <p class="body-4">
                        • Réservation recommandée pour les groupes<br>
                        • Annulation possible jusqu'à 2h avant<br>
                        • Paiement accepté : Espèces, Carte, Chèque
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="section contact text-center" aria-label="contact">
        <div class="container">
            <p class="section-subtitle label-2">Autres moyens de nous contacter</p>
            <h2 class="headline-1 section-title">Nous sommes là pour vous</h2>

            <div class="contact-info grid-list">
                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Téléphone</h3>
                    <p class="body-4 card-text">
                        <a href="tel:0426423743" class="contact-link">0426423743</a>
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Email</h3>
                    <p class="body-4 card-text">
                        <a href="mailto:contact@kingkebab.com" class="contact-link">contact@kingkebab.com</a>
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Adresse</h3>
                    <p class="body-4 card-text">
                        20, avenue Marcel Nicolas<br>
                        France
                    </p>
                </div>

                <div class="contact-card">
                    <div class="card-icon">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                    </div>
                    <h3 class="title-2 card-title">Horaires</h3>
                    <p class="body-4 card-text">
                        Tous les jours<br>
                        11h00 - 23h00
                    </p>
                </div>
            </div>
        </div>
    </section>
</article>
@endsection 