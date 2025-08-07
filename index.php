<?php
// =====================================================
// FICHIER PRINCIPAL - POINT D'ENTRÉE DU SITE
// =====================================================

// Configuration de base
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Démarrage de la session
session_start();

// Détermination de l'URL demandée
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);
$path = trim($path, '/');

// Configuration de la base de données
$db_host = 'localhost';
$db_name = 'king_kebab_db';
$db_user = 'root';
$db_pass = '';

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Fonction pour récupérer les paramètres du site
function getSetting($key, $default = '') {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT value FROM settings WHERE `key` = ?");
        $stmt->execute([$key]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['value'] : $default;
    } catch(PDOException $e) {
        return $default;
    }
}

// Fonction pour récupérer les menus
function getMenus($category = null) {
    global $pdo;
    try {
        if ($category) {
            $stmt = $pdo->prepare("SELECT * FROM menus WHERE category = ? AND is_available = 1 ORDER BY name");
            $stmt->execute([$category]);
        } else {
            $stmt = $pdo->prepare("SELECT * FROM menus WHERE is_available = 1 ORDER BY category, name");
            $stmt->execute();
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        return [];
    }
}

// Fonction pour récupérer les catégories
function getCategories() {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM menu_categories ORDER BY name");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        return [];
    }
}

// Traitement des formulaires
if ($_POST) {
    $action = $_POST['action'] ?? '';
    
    switch($action) {
        case 'reservation':
            $name = $_POST['name'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $person = $_POST['person'] ?? 1;
            $date = $_POST['date'] ?? '';
            $time = $_POST['time'] ?? '';
            $message = $_POST['message'] ?? '';
            
            if ($name && $phone && $date && $time) {
                try {
                    $stmt = $pdo->prepare("INSERT INTO reservations (name, phone, person, reservation_date, reservation_time, message) VALUES (?, ?, ?, ?, ?, ?)");
                    $stmt->execute([$name, $phone, $person, $date, $time, $message]);
                    $success_message = "Réservation envoyée avec succès!";
                } catch(PDOException $e) {
                    $error_message = "Erreur lors de l'envoi de la réservation.";
                }
            } else {
                $error_message = "Veuillez remplir tous les champs obligatoires.";
            }
            break;
            
        case 'contact':
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $subject = $_POST['subject'] ?? '';
            $message = $_POST['message'] ?? '';
            
            if ($name && $email && $subject && $message) {
                try {
                    $stmt = $pdo->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
                    $stmt->execute([$name, $email, $subject, $message]);
                    $success_message = "Message envoyé avec succès!";
                } catch(PDOException $e) {
                    $error_message = "Erreur lors de l'envoi du message.";
                }
            } else {
                $error_message = "Veuillez remplir tous les champs obligatoires.";
            }
            break;
            
        case 'newsletter':
            $email = $_POST['email'] ?? '';
            
            if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                try {
                    $stmt = $pdo->prepare("INSERT INTO newsletters (email) VALUES (?) ON DUPLICATE KEY UPDATE is_active = 1");
                    $stmt->execute([$email]);
                    $success_message = "Inscription à la newsletter réussie!";
                } catch(PDOException $e) {
                    $error_message = "Erreur lors de l'inscription à la newsletter.";
                }
            } else {
                $error_message = "Veuillez entrer une adresse email valide.";
            }
            break;
    }
}

// Récupération des données du site
$site_name = getSetting('site_name', 'King Kebab Restaurant');
$site_description = getSetting('site_description', 'Le meilleur restaurant de kebab en ville');
$contact_email = getSetting('contact_email', 'contact@kingkebab.com');
$contact_phone = getSetting('contact_phone', '+33 1 23 45 67 89');
$contact_address = getSetting('contact_address', '123 Rue de la Gastronomie, 75001 Paris');
$opening_hours = getSetting('opening_hours', 'Lundi-Dimanche: 11h00-23h00');
$facebook_url = getSetting('facebook_url', 'https://facebook.com/kingkebab');
$instagram_url = getSetting('instagram_url', 'https://instagram.com/kingkebab');
$twitter_url = getSetting('twitter_url', 'https://twitter.com/kingkebab');

// Récupération des menus
$menus = getMenus();
$categories = getCategories();

// Détermination de la page actuelle
$page = $_GET['page'] ?? 'home';

// Vérification si c'est une demande d'administration
$is_admin = strpos($path, 'admin') !== false || strpos($path, 'backend') !== false;

// Si c'est une demande d'administration, rediriger vers le backend
if ($is_admin) {
    // Redirection vers le backend Laravel
    $backend_path = 'king-kebab-backend/public/';
    
    // Si le fichier existe dans le backend, l'inclure
    $backend_file = $backend_path . $path;
    if (file_exists($backend_file)) {
        include $backend_file;
        exit;
    } else {
        // Sinon, rediriger vers l'index du backend
        header("Location: $backend_path");
        exit;
    }
}

// Sinon, afficher le frontend
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($site_name); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($site_description); ?>">
    
    <!-- CSS -->
    <link rel="stylesheet" href="king-kebab-frontend/assets/css/style.css">
    <link rel="stylesheet" href="king-kebab-frontend/assets/css/alerts.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="king-kebab-frontend/favicon.svg">
    
    <!-- WhatsApp Button Styles -->
    <style>
        /* WhatsApp Floating Button */
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 60px;
            height: 60px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
            z-index: 1000;
            animation: whatsappPulse 2s infinite;
        }

        .whatsapp-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
            background: #128C7E;
            color: white;
        }

        .whatsapp-btn .whatsapp-icon {
            width: 30px;
            height: 30px;
            transition: transform 0.3s ease;
            filter: brightness(0) invert(1);
        }

        .whatsapp-btn:hover .whatsapp-icon {
            transform: scale(1.2);
        }

        @keyframes whatsappPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .whatsapp-btn {
                width: 50px;
                height: 50px;
                bottom: 15px;
                left: 15px;
            }

            .whatsapp-btn .whatsapp-icon {
                width: 25px;
                height: 25px;
            }
        }
    </style>
</head>
<body>
 

    <!-- Main Header - Navigation -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="king-kebab-frontend/assets/images/logo.svg" alt="<?php echo htmlspecialchars($site_name); ?>">
                </a>
                
                <ul class="nav-menu">
                    <li><a href="index.php" <?php echo $page == 'home' ? 'class="active"' : ''; ?>>Accueil</a></li>
                    <li><a href="index.php?page=about" <?php echo $page == 'about' ? 'class="active"' : ''; ?>>À propos</a></li>
                    <li><a href="index.php?page=menu" <?php echo $page == 'menu' ? 'class="active"' : ''; ?>>Menu</a></li>
                    <li><a href="index.php?page=reservation" <?php echo $page == 'reservation' ? 'class="active"' : ''; ?>>Réservation</a></li>
                    <li><a href="index.php?page=contact" <?php echo $page == 'contact' ? 'class="active"' : ''; ?>>Contact</a></li>
                    <li><a href="king-kebab-backend/public/" target="_blank">Administration</a></li>
                </ul>
                
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Messages d'alerte -->
    <?php if (isset($success_message)): ?>
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            <?php echo htmlspecialchars($success_message); ?>
        </div>
    <?php endif; ?>
    
    <?php if (isset($error_message)): ?>
        <div class="alert alert-error">
            <i class="fas fa-exclamation-circle"></i>
            <?php echo htmlspecialchars($error_message); ?>
        </div>
    <?php endif; ?>

    <!-- Contenu principal -->
    <main class="main-content">
        <?php
        switch($page) {
            case 'about':
                include 'king-kebab-frontend/views/about.blade.php';
                break;
            case 'menu':
                include 'king-kebab-frontend/views/menu.blade.php';
                break;
            case 'reservation':
                include 'king-kebab-frontend/views/reservation.blade.php';
                break;
            case 'contact':
                include 'king-kebab-frontend/views/contact.blade.php';
                break;
            default:
                include 'king-kebab-frontend/views/home.blade.php';
                break;
        }
        ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><?php echo htmlspecialchars($site_name); ?></h3>
                    <p><?php echo htmlspecialchars($site_description); ?></p>
                    <div class="social-links">
                        <a href="<?php echo htmlspecialchars($facebook_url); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo htmlspecialchars($instagram_url); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo htmlspecialchars($twitter_url); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($contact_address); ?></p>
                    <p><i class="fas fa-phone"></i> <?php echo htmlspecialchars($contact_phone); ?></p>
                    <p><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($contact_email); ?></p>
                </div>
                
                <div class="footer-section">
                    <h3>Horaires</h3>
                    <p><?php echo htmlspecialchars($opening_hours); ?></p>
                </div>
                
                <div class="footer-section">
                    <h3>Newsletter</h3>
                    <form method="POST" class="newsletter-form">
                        <input type="hidden" name="action" value="newsletter">
                        <input type="email" name="email" placeholder="Votre email" required>
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($site_name); ?>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/0426423743" target="_blank" class="whatsapp-btn" aria-label="Contact us on WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png" alt="WhatsApp" class="whatsapp-icon">
    </a>

    <!-- JavaScript -->
    <script src="king-kebab-frontend/assets/js/script.js"></script>
</body>
</html> 