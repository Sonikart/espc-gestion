<?php
$etat = $data['etat'];
$color_etat = $data['etat'];

/*
    1 : En cours de developpement
    2 : Projet en cours de finalisation
    3 : Projet Livré
    9 : En attente de validation
*/

$color_etat = str_replace('1', 'info', $color_etat);
$color_etat = str_replace('2', 'warning', $color_etat);
$color_etat = str_replace('3', 'success', $color_etat);
$color_etat = str_replace('9', 'danger', $color_etat);
$etat = str_replace('1', 'En cours de developpement', $etat);
$etat = str_replace('2', 'Projet en cours de finalisation', $etat);
$etat = str_replace('3', 'Projet Livré', $etat);
$etat = str_replace('9', 'Non validé', $etat);


/*
    1 : En attente de paiement
    2 : Paiement reçu
    3 : Accompte reçu
    5 : Paiement non reçu
*/

$paiement = $data['paiement'];
$color_paiement = $data['paiement'];
$color_paiement = str_replace('1', 'danger', $color_paiement);
$color_paiement = str_replace('2', 'success', $color_paiement);
$color_paiement = str_replace('3', 'info', $color_paiement);
$color_paiement = str_replace('5', 'dark', $color_paiement);
$paiement = str_replace('1', 'En attente de paiement', $paiement);
$paiement = str_replace('2', 'Paiement reçu', $paiement);
$paiement = str_replace('3', 'Acompte reçu', $paiement);
$paiement = str_replace('5', 'Paiement non reçu', $paiement);
