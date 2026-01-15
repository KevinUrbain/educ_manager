<?php
//Controller : login_controller.php


require_once 'models/login_model.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $user = isUserExist($pdo, $email);

    if ($user && password_verify($password, $user['password'])) {
        session_regenerate_id(true);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        header('Location: index.php?page=home');
        exit;
    } else {
        $error = 'Veuillez vérifier vos identifiants';
    }
}

include 'views/login.php';