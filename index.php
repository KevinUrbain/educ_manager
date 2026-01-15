<?php
session_start();


//Connexion DB
try {
    $pdo = new PDO('mysql:host=localhost;dbname=educ_manager;port=3308', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // return $pdo;
} catch (PDOException $e) {
    die('Erreur: ' . $e->getMessage());
}

//Routeur simple

$page = $_GET['page'] ?? 'login';

switch ($page) {
    case 'login':
        require_once 'controllers/login_controller.php';
        break;
    case 'home':
        require_once 'controllers/home_controller.php';
        break;
    case 'logout':
        require_once 'controllers/logout_controller.php';
        break;
    default:
        http_response_code(404);
        // Idéalement, inclure une vue pour la page 404
        echo "Page non trouvée";
        exit;
}
