<?php
require '../router/string.php';
$update = $site->bdd->query('UPDATE timer SET time = time + 1 WHERE id_project = 1');
