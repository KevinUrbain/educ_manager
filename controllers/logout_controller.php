<?php

session_regenerate_id(true);
session_destroy();

$_SESSION = [];

header('Location: index.php');
exit;