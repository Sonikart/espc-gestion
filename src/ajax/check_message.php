<?php

include '../router/string.php';
    $array = array();
    $query = $site->bdd->query('SELECT * FROM p_messages');
    if($query->rowCount() != 0){
        $fetch = $query->fetchAll();
        for ($i = 0; $i < count($fetch) ; $i++){
            array_push($array, array('id' => $fetch[$i]['id'], 'author' => $fetch[$i]['author'], 'message' => $fetch[$i]['message'], 'date_create' => $site->date($fetch[$i]['date_create'], "all")));
        }

        die(json_encode($array));
    }
die(json_encode(array('status' => 'error')));
