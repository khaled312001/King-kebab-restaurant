# King Kebab Restaurant - Backend

Un backend complet pour le restaurant King Kebab avec gestion des menus, réservations, contacts et système de commande via WhatsApp.

## Fonctionnalités

- **Gestion des menus** : Affichage dynamique des plats avec catégories
- **Détails des plats** : Pages détaillées pour chaque plat avec commande WhatsApp
- **Système de réservation** : Formulaire de réservation en ligne
- **Formulaire de contact** : Gestion des messages clients
- **Newsletter** : Inscription à la newsletter
- **Paramètres dynamiques** : Configuration du site via base de données
- **Design responsive** : Interface moderne et adaptée mobile

## Technologies utilisées

- **Laravel 10** : Framework PHP
- **MySQL** : Base de données
- **Blade Templates** : Système de templates
- **CSS3** : Styles modernes avec gradients et animations
- **JavaScript** : Interactions côté client
- **Font Awesome** : Icônes
- **Google Fonts** : Typographie

## Installation

### Prérequis

- PHP 8.1 ou supérieur
- Composer
- MySQL
- Node.js (pour Vite)

### Étapes d'installation

1. **Cloner le projet**

   ```bash
   cd king-kebab-backend
   ```

2. **Installer les dépendances PHP**

   ```bash
   composer install
   ```

3. **Copier le fichier d'environnement**

   ```bash
   cp .env.example .env
   ```

4. **Configurer la base de données dans `.env`**

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=king_kebab
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Générer la clé d'application**

   ```bash
   php artisan key:generate
   ```

6. **Créer la base de données**

   ```sql
   CREATE DATABASE king_kebab;
   ```

7. **Exécuter les migrations**

   ```bash
   php artisan migrate
   ```

8. **Seeder la base de données**

   ```bash
   php artisan db:seed
   ```

9. **Installer les dépendances Node.js (optionnel)**

   ```bash
   npm install
   ```

10. **Compiler les assets (optionnel)**

    ```bash
    npm run dev
    ```

11. **Démarrer le serveur**

    ```bash
    php artisan serve
    ```

Le site sera accessible à l'adresse : `http://localhost:8000`

## Structure de la base de données

### Tables principales

- **menus** : Plats du restaurant
- **menu_categories** : Catégories de plats
- **reservations** : Réservations clients
- **contacts** : Messages de contact
- **newsletters** : Inscriptions newsletter
- **settings** : Paramètres du site

### Exemple de données

Le seeder inclut :
- 5 catégories de plats (Kebabs, Pizzas, Burgers, Boissons, Desserts)
- 14 plats avec descriptions et prix
- Paramètres du site (nom, adresse, horaires, etc.)

## Routes disponibles

### Pages publiques

- `/` - Page d'accueil
- `/menu` - Menu complet
- `/menu/{id}` - Détails d'un plat
- `/about` - À propos
- `/contact` - Contact
- `/reservation` - Réservation

### Actions

- `POST /contact` - Envoyer un message
- `POST /reservation` - Créer une réservation
- `POST /newsletter` - S'inscrire à la newsletter

## Fonctionnalités spéciales

### Commande WhatsApp

Chaque plat a un bouton "Commander sur WhatsApp" qui :
- Ouvre WhatsApp avec un message pré-rempli
- Inclut le nom du plat, prix et lien vers la page
- Utilise le numéro de téléphone configuré

### Système de recherche

- Recherche en temps réel dans le menu
- Filtrage par catégories
- Interface responsive

### Gestion des erreurs

- Validation des formulaires
- Messages d'erreur personnalisés
- Redirection avec messages de succès

## Configuration

### Paramètres du site

Les paramètres sont stockés dans la table `settings` :
- `site_name` : Nom du restaurant
- `contact_phone` : Numéro de téléphone
- `contact_email` : Email de contact
- `contact_address` : Adresse
- `opening_hours` : Horaires d'ouverture
- `facebook_url`, `instagram_url`, `twitter_url` : Réseaux sociaux

### Personnalisation

1. Modifier les paramètres dans la base de données
2. Adapter les styles CSS dans les vues
3. Ajouter de nouveaux plats via l'admin ou directement en base

## Déploiement

### Production

1. Configurer l'environnement de production
2. Optimiser les assets : `npm run build`
3. Configurer le serveur web (Apache/Nginx)
4. Mettre en place HTTPS
5. Configurer les sauvegardes de base de données

### Variables d'environnement importantes

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://votre-domaine.com
DB_HOST=your_db_host
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

## Maintenance

### Mise à jour des données

```bash
# Ajouter de nouveaux plats
php artisan tinker
# Ou modifier directement en base de données

# Mettre à jour les paramètres
php artisan tinker
Setting::set('contact_phone', '+33 1 23 45 67 89');
```

### Sauvegarde

```bash
# Sauvegarder la base de données
mysqldump -u username -p king_kebab > backup.sql

# Restaurer
mysql -u username -p king_kebab < backup.sql
```

## Support

Pour toute question ou problème :
- Vérifier les logs Laravel : `storage/logs/laravel.log`
- Consulter la documentation Laravel
- Vérifier la configuration de la base de données

## Licence

Ce projet est développé pour King Kebab Restaurant. 