<?php
// Informations du restaurant
$restaurant_info = [
    'name' => 'King Kebab',
    'address' => '20, avenue Marcel Nicolas',
    'phone' => '0426423743',
    'email' => 'contact@kingkebab.com',
    'hours' => '11h00 - 23h00'
];

// Traitement du formulaire de réservation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $person = $_POST['person'] ?? '';
    $reservation_date = $_POST['reservation-date'] ?? '';
    $reservation_time = $_POST['reservation-time'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validation des données
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Le nom est requis";
    }
    
    if (empty($phone)) {
        $errors[] = "Le numéro de téléphone est requis";
    }
    
    if (empty($person)) {
        $errors[] = "Le nombre de personnes est requis";
    }
    
    if (empty($reservation_date)) {
        $errors[] = "La date de réservation est requise";
    }
    
    if (empty($reservation_time)) {
        $errors[] = "L'heure de réservation est requise";
    }

    // Si pas d'erreurs, traiter la réservation
    if (empty($errors)) {
        // Ici vous pouvez ajouter le code pour sauvegarder en base de données
        // ou envoyer un email de confirmation
        
        $success_message = "Votre réservation a été envoyée avec succès ! Nous vous contacterons bientôt pour confirmer.";
        
        // Redirection avec message de succès
        header("Location: index.php?success=1");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - <?php echo $restaurant_info['name']; ?></title>
    <link rel="stylesheet" href="./assets-original/css/style.css">
    <style>
        .reservation-result {
            max-width: 600px;
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
    <div class="reservation-result">
        <?php if (isset($_GET['success'])): ?>
            <div class="success">
                <h2>✅ Réservation Envoyée !</h2>
                <p>Votre réservation a été envoyée avec succès !</p>
                <p>Nous vous contacterons bientôt au numéro que vous avez fourni pour confirmer votre réservation.</p>
            </div>
        <?php elseif (!empty($errors)): ?>
            <div class="error">
                <h2>❌ Erreur de Validation</h2>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <div class="contact-info">
            <h3>Informations de Contact</h3>
            <p><strong>Restaurant:</strong> <?php echo $restaurant_info['name']; ?></p>
            <p><strong>Adresse:</strong> <?php echo $restaurant_info['address']; ?></p>
            <p><strong>Téléphone:</strong> <a href="tel:<?php echo $restaurant_info['phone']; ?>"><?php echo $restaurant_info['phone']; ?></a></p>
            <p><strong>Horaires:</strong> <?php echo $restaurant_info['hours']; ?></p>
        </div>
        
        <a href="index.php" class="btn-back">Retour à l'accueil</a>
    </div>
</body>
</html> 