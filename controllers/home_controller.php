<?php

if (isset($_SESSION['user_id'])) {

    include_once 'views/home.php';
} else {

    header('Location: index.php?page=login');
    exit;
}
