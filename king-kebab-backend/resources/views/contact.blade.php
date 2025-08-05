@extends('layouts.app')

@section('title', 'Contact - King Kebab')
@section('description', 'Contactez King Kebab pour vos réservations et questions. Nous sommes situés au 20, avenue Marcel Nicolas')

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

                    <div class="input-wrapper">
                        <input type="text" name="name" placeholder="Votre nom" autocomplete="off" class="input-field" required>
                        <input type="tel" name="phone" placeholder="Numéro de téléphone" autocomplete="off" class="input-field" required>
                    </div>

                    <div class="input-wrapper">
                        <div class="icon-wrapper">
                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                            <select name="person" class="input-field" required>
                                <option value="">Nombre de personnes</option>
                                <option value="1">1 personne</option>
                                <option value="2">2 personnes</option>
                                <option value="3">3 personnes</option>
                                <option value="4">4 personnes</option>
                                <option value="5">5 personnes</option>
                                <option value="6">6 personnes</option>
                                <option value="7">7 personnes</option>
                            </select>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="icon-wrapper">
                            <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                            <input type="date" name="reservation-date" class="input-field" required>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="icon-wrapper">
                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                            <select name="reservation-time" class="input-field" required>
                                <option value="">Heure de réservation</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                            </select>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>
                    </div>

                    <textarea name="message" placeholder="Message (optionnel)" autocomplete="off" class="input-field"></textarea>

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
                </div>
            </div>
        </div>
    </section>
</article>
@endsection 