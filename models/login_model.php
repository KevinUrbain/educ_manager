<?php

function isUserExist($pdo, $email)
{
    $sql = "SELECT * FROM admin WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(['email' => $email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        return false;
    }

    if ($user) {
        return $user;
    }

    return false;
}



function isAdmin()
{

}