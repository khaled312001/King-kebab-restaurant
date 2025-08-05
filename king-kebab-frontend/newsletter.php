<?php
// Informations du restaurant
$restaurant_info = [
    'name' => 'King Kebab',
    'address' => '20, avenue Marcel Nicolas',
    'phone' => '0426423743',
    'email' => 'contact@kingkebab.com'
];

// Traitement de l'inscription à la newsletter
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email_address'] ?? '';
    
    // Validation de l'email
    if (empty($email)) {
        $error = "L'adresse email est requise";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "L'adresse email n'est pas valide";
    } else {
        // Ici vous pouvez ajouter le code pour sauvegarder l'email en base de données
        // ou l'ajouter à une liste de diffusion
        
        $success = "Merci de vous être abonné à notre newsletter ! Vous recevrez bientôt nos offres spéciales.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter - <?php echo $restaurant_info['name']; ?></title>
    <link rel="stylesheet" href="./assets-original/css/style.css">
    <style>
        .newsletter-result {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .error {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .btn-back {
            display: inline-block;
            padding: 12px 24px;
            background: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-back:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="newsletter-result">
        <?php if (isset($success)): ?>
            <div class="success">
                <h2>✅ Inscription Réussie !</h2>
                <p><?php echo $success; ?></p>
            </div>
        <?php elseif (isset($error)): ?>
            <div class="error">
                <h2>❌ Erreur</h2>
                <p><?php echo $error; ?></p>
            </div>
        <?php endif; ?>
        
        <div class="contact-info">
            <h3>Restez Connecté</h3>
            <p>Recevez nos dernières offres et nouveautés directement dans votre boîte mail !</p>
            <p><strong>Restaurant:</strong> <?php echo $restaurant_info['name']; ?></p>
            <p><strong>Adresse:</strong> <?php echo $restaurant_info['address']; ?></p>
            <p><strong>Téléphone:</strong> <a href="tel:<?php echo $restaurant_info['phone']; ?>"><?php echo $restaurant_info['phone']; ?></a></p>
        </div>
        
        <a href="index.php" class="btn-back">Retour à l'accueil</a>
    </div>
</body>
</html> 