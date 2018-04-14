<?php
require '../router/string.php';
$purge = $site->bdd->query('UPDATE maintenance SET estimation = "" WHERE id = 1');
$purge = $site->bdd->query('UPDATE maintenance SET reason = "" WHERE id = 1');
