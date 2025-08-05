# King Kebab - Frontend (PHP)

## Description
Site web PHP pour le restaurant King Kebab. Ce dossier contient tous les fichiers frontend du site web convertis en PHP.

## Structure des Fichiers

```
king-kebab-frontend/
├── index.php                    # Page d'accueil principale (convertie de HTML)
├── reservation.php              # Traitement des réservations
├── newsletter.php               # Traitement de la newsletter
├── logo.png                     # Logo du restaurant
├── favicon.svg                  # Icône du site
├── assets-original/             # Ressources statiques originales
│   ├── css/
│   │   └── style.css           # Styles principaux
│   ├── js/
│   │   └── script.js           # JavaScript
│   └── images/                 # Images du site
└── views/                      # Templates Laravel (optionnel)
    ├── layouts/
    │   └── app.blade.php       # Layout principal
    ├── home.blade.php          # Page d'accueil
    ├── menu.blade.php          # Page du menu
    ├── about.blade.php         # Page à propos
    ├── contact.blade.php       # Page de contact
    └── reservation.blade.php   # Page de réservation
```

## Pages Disponibles

### 1. Page d'Accueil (`index.php`)
- **URL**: `index.php`
- **Fonctionnalités**:
  - Slider principal avec images
  - Section des spécialités
  - Section "À propos"
  - Menu complet avec prix
  - Formulaire de réservation intégré
  - Informations du restaurant dynamiques

### 2. Traitement des Réservations (`reservation.php`)
- **URL**: `reservation.php`
- **Fonctionnalités**:
  - Validation des données de réservation
  - Messages de succès/erreur
  - Redirection vers la page d'accueil

### 3. Newsletter (`newsletter.php`)
- **URL**: `newsletter.php`
- **Fonctionnalités**:
  - Validation des emails
  - Inscription à la newsletter
  - Messages de confirmation

## Informations du Restaurant (Dynamiques)

```php
$restaurant_info = [
    'name' => 'King Kebab',
    'address' => '20, avenue Marcel Nicolas',
    'phone' => '0426423743',
    'email' => 'contact@kingkebab.com',
    'hours' => '11h00 - 23h00',
    'description' => 'Le vrai goût du kebab'
];
```

## Installation et Utilisation

### Option 1: Utilisation avec XAMPP
1. **Copier le dossier** dans `C:\xampp\htdocs\king-kebab-frontend\`
2. **Démarrer XAMPP** (Apache)
3. **Accéder au site**: http://localhost/king-kebab-frontend/

### Option 2: Serveur PHP Local
```bash
cd king-kebab-frontend
php -S localhost:8000
```
Puis accéder à: http://localhost:8000

### Option 3: Serveur Web
- Placer le dossier sur votre serveur web
- Accéder via votre domaine

## Fonctionnalités PHP

### ✅ Variables Dynamiques
- Toutes les informations du restaurant sont stockées dans un tableau PHP
- Facilement modifiables en haut du fichier `index.php`

### ✅ Formulaires Fonctionnels
- Formulaire de réservation avec validation
- Formulaire newsletter avec validation email
- Messages de succès/erreur

### ✅ Sécurité
- Validation des données côté serveur
- Protection contre les injections XSS
- Validation des emails

### ✅ Responsive Design
- Compatible mobile, tablet et desktop
- Design moderne et professionnel

## Personnalisation

### Modifier les Informations du Restaurant
Éditer le tableau `$restaurant_info` dans `index.php`:
```php
$restaurant_info = [
    'name' => 'Votre Nom',
    'address' => 'Votre Adresse',
    'phone' => 'Votre Téléphone',
    'email' => 'votre@email.com',
    'hours' => 'Vos Horaires',
    'description' => 'Votre Description'
];
```

### Ajouter de Nouvelles Fonctionnalités
1. Créer un nouveau fichier PHP
2. Inclure les informations du restaurant
3. Ajouter la logique de traitement
4. Créer le formulaire correspondant

### Modifier le Design
- Éditer `assets-original/css/style.css`
- Ajouter des images dans `assets-original/images/`
- Modifier le JavaScript dans `assets-original/js/script.js`

## Base de Données (Optionnel)

Pour connecter à une base de données, ajouter dans `reservation.php`:
```php
// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=king_kebab", "username", "password");

// Sauvegarder la réservation
$stmt = $pdo->prepare("INSERT INTO reservations (name, phone, person, date, time, message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$name, $phone, $person, $reservation_date, $reservation_time, $message]);
```

## Support

Pour toute question concernant le frontend :
- **Téléphone**: 0426423743
- **Email**: contact@kingkebab.com
- **Adresse**: 20, avenue Marcel Nicolas

## Licence

© 2024 King Kebab. Tous droits réservés. 