<!-- Footer -->
<footer class="modern-footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand Section -->
                <div class="footer-brand-section">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="King Kebab" class="logo-img">
                    </div>
                    <p class="footer-description">
                        {{ $settings['site_description'] }}
                    </p>
                    <div class="footer-social">
                        @if(isset($settings['facebook_url']))
                        <a href="{{ $settings['facebook_url'] }}" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        @endif
                        @if(isset($settings['instagram_url']))
                        <a href="{{ $settings['instagram_url'] }}" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        @endif
                        @if(isset($settings['twitter_url']))
                        <a href="{{ $settings['twitter_url'] }}" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}" class="footer-link">Accueil</a></li>
                        <li><a href="{{ route('menu') }}" class="footer-link">Menu</a></li>
                        <li><a href="{{ route('about') }}" class="footer-link">À propos</a></li>
                        <li><a href="{{ route('articles.index') }}" class="footer-link">Articles</a></li>
                        <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
                        <li><a href="{{ route('reservation') }}" class="footer-link">Réservation</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-section">
                    <h3 class="footer-title">Contact</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <a href="tel:{{ $settings['contact_phone'] }}" class="contact-link">
                                    {{ $settings['contact_phone'] }}
                                </a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <a href="mailto:{{ $settings['contact_email'] }}" class="contact-link">
                                    {{ $settings['contact_email'] }}
                                </a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-text">{{ $settings['contact_address'] }}</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-text">{{ $settings['opening_hours'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="footer-section">
                    <h3 class="footer-title">Newsletter</h3>
                    <p class="newsletter-text">
                        Inscrivez-vous à notre newsletter pour recevoir nos dernières offres et nouveautés
                    </p>
                    <form action="{{ route('newsletter.store') }}" method="POST" class="newsletter-form">
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email" placeholder="Votre adresse email" class="newsletter-input" required>
                            <button type="submit" class="newsletter-btn">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright-text">
                    &copy; {{ date('Y') }} <a href="{{ route('home') }}" class="copyright-link">King Kebab</a>. Tous droits réservés.
                </p>
                <div class="footer-bottom-links">
                    <a href="#" class="footer-bottom-link">Politique de confidentialité</a>
                    <a href="#" class="footer-bottom-link">Conditions d'utilisation</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to top button -->
<a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/0426423743" target="_blank" class="whatsapp-btn" aria-label="Contact us on WhatsApp">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png" alt="WhatsApp" class="whatsapp-icon">
</a> 