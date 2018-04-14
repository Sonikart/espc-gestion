<?php
require '../router/string.php';
if($site->get_config('maintenance') == '1'){
    $update = $site->bdd->query('UPDATE configuration SET maintenance = 0 WHERE id = 1');
}
