<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=educ_manager;port=3306", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'ERREUR de connexion' . $e->getMessage();
}