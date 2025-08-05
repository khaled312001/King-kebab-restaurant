# King Kebab - Tableau de Bord Administratif

## Vue d'ensemble

Ce tableau de bord administratif complet a été développé pour gérer tous les aspects du site web King Kebab. Il offre une interface moderne et intuitive pour administrer le restaurant.

## Fonctionnalités

### 🔐 Authentification
- **Connexion sécurisée** : Système d'authentification avec protection des routes
- **Gestion des sessions** : Sessions sécurisées avec régénération automatique
- **Déconnexion** : Déconnexion sécurisée avec invalidation de session

### 📊 Tableau de Bord Principal
- **Statistiques en temps réel** : Nombre de réservations, messages, menus, etc.
- **Activité récente** : Dernières réservations et messages
- **Actions rapides** : Accès direct aux fonctions principales
- **Informations système** : Version Laravel, PHP, heure serveur

### 🍽️ Gestion des Menus
- **CRUD complet** : Créer, lire, modifier, supprimer les éléments du menu
- **Gestion des catégories** : Organiser les menus par catégories
- **Upload d'images** : Système d'upload avec prévisualisation
- **Gestion des prix** : Prix en euros avec validation
- **Statut de disponibilité** : Activer/désactiver les éléments

### 📅 Gestion des Réservations
- **Liste complète** : Toutes les réservations avec filtres
- **Changement de statut** : En attente, confirmé, annulé, terminé
- **Détails complets** : Nom, email, téléphone, date, heure, nombre de personnes
- **Actions en temps réel** : Mise à jour AJAX des statuts

### 💬 Gestion des Messages
- **Centre de messages** : Tous les messages de contact
- **Statuts** : Non lu, lu, répondu
- **Filtres** : Filtrer par statut
- **Marquage automatique** : Marquer comme lu lors de l'ouverture

### 📧 Gestion de la Newsletter
- **Liste des abonnés** : Tous les emails inscrits
- **Gestion des statuts** : Actif, inactif
- **Export possible** : Liste des emails pour campagnes

### 📝 Gestion des Articles
- **CRUD complet** : Créer, modifier, supprimer les articles
- **Upload d'images** : Images pour les articles
- **Statuts** : Publié, brouillon
- **Éditeur riche** : Contenu formaté

### ⚙️ Paramètres du Site
- **Informations générales** : Nom, description, email, téléphone
- **Réseaux sociaux** : Liens Facebook, Twitter, Instagram, YouTube
- **Images** : Logo, favicon
- **Informations supplémentaires** : Heures d'ouverture, livraison, à propos

### 👤 Profil Administrateur
- **Informations personnelles** : Nom, email
- **Changement de mot de passe** : Sécurisé avec validation
- **Sécurité** : Validation des mots de passe actuels

## Installation

### Prérequis
- PHP 8.1+
- Laravel 10+
- MySQL/MariaDB
- Composer

### Étapes d'installation

1. **Cloner le projet**
```bash
git clone [repository-url]
cd king-kebab-backend
```

2. **Installer les dépendances**
```bash
composer install
```

3. **Configuration de l'environnement**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configuration de la base de données**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=king_kebab
DB_USERNAME=root
DB_PASSWORD=
```

5. **Migration et seeding**
```bash
php artisan migrate
php artisan db:seed
```

6. **Créer les dossiers d'upload**
```bash
mkdir -p public/uploads/menus
mkdir -p public/uploads/articles
mkdir -p public/uploads/settings
chmod 755 public/uploads -R
```

## Accès Administrateur

### Compte par défaut
- **Email** : admin@kingkebab.com
- **Mot de passe** : admin123

### URL d'accès
- **Tableau de bord** : `http://127.0.0.1:8000/admin`
- **Connexion** : `http://127.0.0.1:8000/admin/login`

## Structure des Routes

### Routes d'authentification
```php
GET  /admin/login     - Page de connexion
POST /admin/login     - Traitement de la connexion
POST /admin/logout    - Déconnexion
```

### Routes protégées (nécessitent une authentification)
```php
GET  /admin                    - Tableau de bord principal
GET  /admin/profile            - Profil administrateur
POST /admin/profile            - Mise à jour du profil

// Gestion des menus
GET    /admin/menus            - Liste des menus
POST   /admin/menus            - Créer un menu
GET    /admin/menus/create     - Formulaire de création
GET    /admin/menus/{id}       - Voir un menu
GET    /admin/menus/{id}/edit  - Éditer un menu
PUT    /admin/menus/{id}       - Mettre à jour un menu
DELETE /admin/menus/{id}       - Supprimer un menu

// Gestion des réservations
GET    /admin/reservations     - Liste des réservations
PATCH  /admin/reservations/{id}/status - Changer le statut

// Gestion des messages
GET    /admin/contacts         - Liste des messages
PATCH  /admin/contacts/{id}/status - Changer le statut

// Gestion de la newsletter
GET    /admin/newsletters      - Liste des abonnés

// Gestion des articles
GET    /admin/articles         - Liste des articles
POST   /admin/articles         - Créer un article
GET    /admin/articles/create  - Formulaire de création

// Paramètres
GET  /admin/settings           - Page des paramètres
POST /admin/settings           - Mettre à jour les paramètres
```

## Sécurité

### Protection des routes
- Toutes les routes administratives sont protégées par le middleware `auth`
- Redirection automatique vers la page de connexion si non authentifié
- Sessions sécurisées avec régénération automatique

### Validation des données
- Validation côté serveur pour tous les formulaires
- Protection CSRF sur tous les formulaires
- Validation des types de fichiers pour les uploads

### Gestion des erreurs
- Messages d'erreur personnalisés en français
- Gestion des exceptions avec pages d'erreur appropriées
- Logs d'activité pour le débogage

## Interface Utilisateur

### Design moderne
- Interface responsive avec Bootstrap 5
- Design moderne avec gradients et animations
- Icônes Font Awesome pour une meilleure UX
- Thème cohérent avec l'identité visuelle du restaurant

### Navigation intuitive
- Sidebar fixe avec navigation principale
- Breadcrumbs pour la navigation
- Menu utilisateur avec dropdown
- Notifications en temps réel

### Fonctionnalités AJAX
- Mise à jour des statuts sans rechargement
- Filtres dynamiques
- Messages de confirmation
- Prévisualisation des images

## Maintenance

### Logs
- Logs d'erreur dans `storage/logs/`
- Logs d'activité pour le suivi des actions

### Sauvegarde
- Sauvegarde régulière de la base de données
- Sauvegarde des fichiers uploadés

### Mise à jour
- Vérifier les mises à jour de sécurité Laravel
- Mettre à jour les dépendances Composer
- Tester après chaque mise à jour

## Support

Pour toute question ou problème :
- Vérifier les logs dans `storage/logs/`
- Consulter la documentation Laravel
- Contacter l'équipe de développement

---

**King Kebab - Tableau de Bord Administratif**  
*Développé avec Laravel et Bootstrap* 