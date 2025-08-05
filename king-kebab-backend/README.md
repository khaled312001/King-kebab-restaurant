# King Kebab - Application Laravel Complète

## Description
Application Laravel complète pour le restaurant King Kebab. Ce dossier contient tous les fichiers nécessaires pour faire fonctionner l'application complète.

## Structure des Fichiers

```
king-kebab-backend/
├── app/                          # Application Laravel
│   ├── Http/Controllers/
│   │   ├── HomeController.php      # Contrôleur principal
│   │   └── ReservationController.php # Contrôleur des réservations
│   └── Models/
│       └── Reservation.php         # Modèle des réservations
├── bootstrap/                     # Bootstrap Laravel
├── config/                        # Configuration Laravel
├── database/
│   └── migrations/
│       └── create_reservations_table.php # Migration des réservations
├── public/                        # Fichiers publics
│   └── assets/                    # CSS, JS, Images
├── resources/                     # Ressources Laravel
│   ├── css/
│   ├── js/
│   └── views/                     # Templates Blade
│       ├── layouts/
│       │   └── app.blade.php      # Layout principal
│       ├── home.blade.php         # Page d'accueil
│       ├── menu.blade.php         # Page du menu
│       ├── about.blade.php        # Page à propos
│       ├── contact.blade.php      # Page de contact
│       └── reservation.blade.php  # Page de réservation
├── routes/
│   └── web.php                    # Routes du site
├── storage/                       # Stockage Laravel
├── artisan                        # Console Laravel
├── composer.json                  # Dépendances PHP
├── package.json                   # Dépendances Node.js
├── vite.config.js                 # Configuration Vite
└── .env.example                   # Exemple de configuration
```

## Installation

### Prérequis
- PHP 8.1+
- Composer
- MySQL (XAMPP)
- Node.js (optionnel)

### Étapes d'Installation

1. **Copier le fichier .env**
```bash
cd king-kebab-backend
copy .env.example .env
```

2. **Installer les dépendances PHP**
```bash
composer install
```

3. **Générer la clé d'application**
```bash
php artisan key:generate
```

4. **Configurer la base de données**
Éditer le fichier `.env`:
```env
APP_NAME="King Kebab"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=king_kebab
DB_USERNAME=root
DB_PASSWORD=
```

5. **Créer la base de données**
- Ouvrir phpMyAdmin
- Créer une base de données nommée `king_kebab`

6. **Exécuter les migrations**
```bash
php artisan migrate
```

7. **Installer les dépendances Node.js (optionnel)**
```bash
npm install
npm run dev
```

8. **Démarrer le serveur**
```bash
php artisan serve
```

## Accès au Site

- **URL**: http://localhost:8000
- **Pages disponibles**:
  - Accueil: http://localhost:8000/
  - Menu: http://localhost:8000/menu
  - À propos: http://localhost:8000/about
  - Contact: http://localhost:8000/contact
  - Réservation: http://localhost:8000/reservation

## Fonctionnalités

### ✅ Pages Complètes
- **Accueil** - Slider, présentation, spécialités
- **Menu** - Liste des plats avec prix
- **À propos** - Histoire du restaurant
- **Contact** - Informations de contact
- **Réservation** - Formulaire fonctionnel

### ✅ Système de Réservation
- Formulaire de réservation complet
- Validation des données
- Stockage en base de données
- Messages de succès/erreur

### ✅ Base de Données
- Table `reservations` avec tous les champs nécessaires
- Migration automatique
- Modèle Eloquent

### ✅ Design Responsive
- Compatible mobile, tablet et desktop
- Design moderne et professionnel
- Animations fluides

## Développement

### Ajouter une Nouvelle Page
1. Créer une méthode dans `HomeController`
2. Ajouter la route dans `routes/web.php`
3. Créer la vue dans `resources/views/`

### Modifier le Menu
Éditer `resources/views/menu.blade.php`

### Personnaliser le Design
- **CSS**: `resources/css/app.css`
- **JavaScript**: `resources/js/app.js`
- **Images**: `public/assets/images/`

## Configuration Avancée

### Email
Pour envoyer des emails de confirmation :
```php
// Dans ReservationController
Mail::to($request->email)->send(new ReservationConfirmation($reservation));
```

### Cache
Pour optimiser les performances :
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Permissions (Linux/Mac)
```bash
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

## Dépannage

### Erreur "Class not found"
```bash
composer dump-autoload
```

### Erreur de base de données
- Vérifier que MySQL est démarré
- Vérifier les paramètres dans `.env`
- Vérifier que la base `king_kebab` existe

### Erreur de permissions
```bash
php artisan storage:link
```

## Informations du Restaurant

- **Nom**: King Kebab
- **Adresse**: 20, avenue Marcel Nicolas
- **Téléphone**: 0426423743
- **Email**: contact@kingkebab.com
- **Horaires**: 11h00 - 23h00

## Support

Pour toute assistance :
- **Téléphone**: 0426423743
- **Email**: contact@kingkebab.com
- **Adresse**: 20, avenue Marcel Nicolas

## Licence

© 2024 King Kebab. Tous droits réservés. 