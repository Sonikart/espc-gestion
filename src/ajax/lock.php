<?php
require '../router/string.php';
$update = $site->bdd->query('UPDATE utilisateurs SET locked = 1 WHERE email = "'.$site->security($_SESSION['email']).'"');
