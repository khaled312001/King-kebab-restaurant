<?php
// Informations du restaurant
$restaurant_info = [
    'name' => 'King Kebab',
    'address' => '20, avenue Marcel Nicolas',
    'phone' => '0426423743',
    'email' => 'contact@kingkebab.com',
    'hours' => '11h00 - 23h00',
    'description' => 'Le vrai goût du kebab'
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title><?php echo $restaurant_info['name']; ?> - <?php echo $restaurant_info['description']; ?></title>
  <meta name="title" content="<?php echo $restaurant_info['name']; ?> - <?php echo $restaurant_info['description']; ?>">
  <meta name="description" content="Bienvenue chez <?php echo $restaurant_info['name']; ?>, le spécialiste du kebab à <?php echo $restaurant_info['address']; ?>. Goûtez nos grillades et sandwichs savoureux !">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets-original/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets-original/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets-original/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets-original/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text"><?php echo $restaurant_info['name']; ?></p>
  </div>

  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>
        <span class="span">
          <?php echo $restaurant_info['address']; ?>
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>
        <span class="span">Ouvert : <?php echo $restaurant_info['hours']; ?></span>
      </div>

      <div class="topbar-item">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>
        <a href="tel:<?php echo $restaurant_info['phone']; ?>" class="span"><?php echo $restaurant_info['phone']; ?></a>
      </div>

      <div class="separator"></div>

      <a href="mailto:<?php echo $restaurant_info['email']; ?>" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span"><?php echo $restaurant_info['email']; ?></span>
      </a>

    </div>
  </div>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets-original/images/logo.svg" width="160" height="50" alt="<?php echo $restaurant_info['name']; ?> - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets-original/images/logo.svg" width="160" height="50" alt="<?php echo $restaurant_info['name']; ?> - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Accueil</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menu</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">À propos</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Bienvenue chez <?php echo $restaurant_info['name']; ?></p>

          <address class="body-4">
            <?php echo $restaurant_info['address']; ?>
          </address>

          <p class="body-4 navbar-text">Ouvert : <?php echo $restaurant_info['hours']; ?></p>

          <a href="mailto:<?php echo $restaurant_info['email']; ?>" class="body-4 sidebar-link"><?php echo $restaurant_info['email']; ?></a>

          <div class="separator"></div>

          <p class="contact-label">Réservation</p>

          <a href="tel:<?php echo $restaurant_info['phone']; ?>" class="body-1 contact-number hover-underline"><?php echo $restaurant_info['phone']; ?></a>
        </div>

      </nav>

      <a href="#reservation" class="btn btn-secondary">
        <span class="text text-1">Réserver une table</span>

        <span class="text text-2" aria-hidden="true">Réserver une table</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="assets-original/images/hero-slider-1.jpg" alt="Kebab maison" class="img-cover" style="object-fit:cover;width:100%;height:100%;"/>
            </div>

            <p class="label-2 section-subtitle slider-reveal">Tradition & Hygiène</p>

            <h1 class="display-1 hero-title slider-reveal">
              <?php echo $restaurant_info['description']; ?>
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Savourez nos grillades, sandwichs et assiettes généreuses dans une ambiance conviviale !
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Voir le menu</span>

              <span class="text text-2" aria-hidden="true">Voir le menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets-original/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Expérience délicieuse</p>

            <h1 class="display-1 hero-title slider-reveal">
              Saveurs inspirées par <br>les saisons
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venez en famille et ressentez la joie d'une nourriture savoureuse
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Voir notre menu</span>

              <span class="text text-2" aria-hidden="true">Voir notre menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets-original/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Incroyable & délicieux</p>

            <h1 class="display-1 hero-title slider-reveal">
              Où chaque saveur <br>raconte une histoire
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venez en famille et ressentez la joie d'une nourriture savoureuse
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">Voir notre menu</span>

              <span class="text text-2" aria-hidden="true">Voir notre menu</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#reservation" class="hero-btn has-after">
          <img src="./assets-original/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Réserver une table</span>
        </a>

      </section>

      <!-- 
        - #SERVICE
      -->

      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">Saveurs pour les gourmets</p>

          <h2 class="headline-1 section-title">Nos spécialités</h2>

          <p class="section-text">
            Kebab, grillades, sandwichs, assiettes, frites maison et plus encore !
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="#menu" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets-original/images/service-1.jpg" width="285" height="336" loading="lazy" alt="Kebab"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#menu">Kebab</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">Voir le menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#menu" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets-original/images/service-2.jpg" width="285" height="336" loading="lazy" alt="Grillades"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#menu">Grillades</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">Voir le menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#menu" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets-original/images/service-3.jpg" width="285" height="336" loading="lazy" alt="Boissons"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#menu">Boissons</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">Voir le menu</a>

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets-original/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="./assets-original/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Notre histoire</p>

            <h2 class="headline-1 section-title">Chaque saveur raconte une histoire</h2>

            <p class="section-text">
              Situé au <?php echo $restaurant_info['address']; ?>, <?php echo $restaurant_info['name']; ?> vous accueille tous les jours de <?php echo $restaurant_info['hours']; ?>.<br>
              Téléphone : <a href="tel:<?php echo $restaurant_info['phone']; ?>"><?php echo $restaurant_info['phone']; ?></a><br>
              Venez découvrir nos spécialités dans une ambiance chaleureuse !
            </p>

            <div class="contact-label">Réservez par téléphone</div>

            <a href="tel:<?php echo $restaurant_info['phone']; ?>" class="body-1 contact-number hover-underline"><?php echo $restaurant_info['phone']; ?></a>

            <a href="#contact" class="btn btn-primary">
              <span class="text text-1">En savoir plus</span>

              <span class="text text-2" aria-hidden="true">En savoir plus</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./assets-original/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets-original/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="./assets-original/images/badge-2.png" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

          <img src="./assets-original/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>

      <!-- 
        - #MENU
      -->

      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Sélection spéciale</p>

          <h2 class="headline-1 section-title text-center">Menu délicieux</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets-original/images/menu-1.png" width="100" height="100" loading="lazy" alt="Kebab Classique"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Kebab Classique</a>
                    </h3>

                    <span class="badge label-1">Populaire</span>

                    <span class="span title-2">€8.50</span>
                  </div>

                  <p class="card-text label-1">
                    Viande de poulet ou agneau, salade fraîche, tomates, oignons et sauce spéciale.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets-original/images/menu-2.png" width="100" height="100" loading="lazy" alt="Kebab Royal"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Kebab Royal</a>
                    </h3>

                    <span class="span title-2">€10.00</span>
                  </div>

                  <p class="card-text label-1">
                    Viande mixte, fromage, salade, tomates, oignons et sauce au choix.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets-original/images/menu-3.png" width="100" height="100" loading="lazy" alt="Assiette Kebab"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Assiette Kebab</a>
                    </h3>

                    <span class="span title-2">€12.00</span>
                  </div>

                  <p class="card-text label-1">
                    Viande grillée, frites maison, salade et sauce au choix.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets-original/images/menu-4.png" width="100" height="100" loading="lazy" alt="Grillades"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Grillades</a>
                    </h3>

                    <span class="badge label-1">Nouveau</span>

                    <span class="span title-2">€15.00</span>
                  </div>

                  <p class="card-text label-1">
                    Brochettes de poulet, agneau ou mixte avec riz et salade.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets-original/images/menu-5.png" width="100" height="100" loading="lazy" alt="Falafel"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Falafel</a>
                    </h3>

                    <span class="span title-2">€7.50</span>
                  </div>

                  <p class="card-text label-1">
                    Boulettes de pois chiches, salade fraîche et sauce tahini.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets-original/images/menu-6.png" width="100" height="100" loading="lazy" alt="Boissons"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Boissons</a>
                    </h3>

                    <span class="span title-2">€2.50</span>
                  </div>

                  <p class="card-text label-1">
                    Sodas, jus de fruits, eau minérale et boissons chaudes.
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <p class="menu-text text-center">
            Ouvert tous les jours de <span class="span">11h00</span> à <span class="span">23h00</span>
          </p>

          <a href="#contact" class="btn btn-primary">
            <span class="text text-1">Réserver maintenant</span>

            <span class="text text-2" aria-hidden="true">Réserver maintenant</span>
          </a>

          <img src="./assets-original/images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
          <img src="./assets-original/images/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
      </section>

      <!-- 
        - #RESERVATION
      -->

      <section class="reservation" id="reservation">
        <div class="container">

          <div class="form reservation-form bg-black-10">

            <form action="reservation.php" method="POST" class="form-left">

              <h2 class="headline-1 text-center">Réservation en ligne</h2>

              <p class="form-text text-center">
                Demande de réservation <a href="tel:<?php echo $restaurant_info['phone']; ?>" class="link"><?php echo $restaurant_info['phone']; ?></a>
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

            <div class="form-right text-center" style="background-image: url('./assets-original/images/form-pattern.png')">

              <h2 class="headline-1 text-center">Contact</h2>

              <p class="contact-label">Demande de réservation</p>

              <a href="tel:<?php echo $restaurant_info['phone']; ?>" class="body-1 contact-number hover-underline"><?php echo $restaurant_info['phone']; ?></a>

              <div class="separator"></div>

              <p class="contact-label">Adresse</p>

              <address class="body-4">
                <?php echo $restaurant_info['address']; ?>
              </address>

              <p class="contact-label">Horaires</p>

              <p class="body-4">
                Tous les jours <br>
                <?php echo $restaurant_info['hours']; ?>
              </p>

            </div>

          </div>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets-original/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="./assets-original/images/logo.svg" width="160" height="50" loading="lazy" alt="<?php echo $restaurant_info['name']; ?> home">
          </a>

          <address class="body-4">
            <?php echo $restaurant_info['address']; ?>
          </address>

          <a href="mailto:<?php echo $restaurant_info['email']; ?>" class="body-4 contact-link"><?php echo $restaurant_info['email']; ?></a>

          <a href="tel:<?php echo $restaurant_info['phone']; ?>" class="body-4 contact-link">Réservation : <?php echo $restaurant_info['phone']; ?></a>

          <p class="body-4">
            Ouvert : <?php echo $restaurant_info['hours']; ?>
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">Newsletter</p>

          <p class="label-1">
            Abonnez-vous et obtenez <span class="span">25% de réduction.</span>
          </p>

          <form action="newsletter.php" method="POST" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Votre email" autocomplete="off" class="input-field" required>
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">S'abonner</span>

              <span class="text text-2" aria-hidden="true">S'abonner</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#home" class="label-2 footer-link hover-underline">Accueil</a>
          </li>

          <li>
            <a href="#menu" class="label-2 footer-link hover-underline">Menu</a>
          </li>

          <li>
            <a href="#about" class="label-2 footer-link hover-underline">À propos</a>
          </li>

          <li>
            <a href="#contact" class="label-2 footer-link hover-underline">Contact</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; <?php echo date('Y'); ?> <?php echo $restaurant_info['name']; ?>. Tous droits réservés.
        </p>

      </div>

    </div>
  </footer>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets-original/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>