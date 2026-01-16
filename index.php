<?php
session_start();
//début de session

//Connexion DB
require_once 'config/database.php';

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
