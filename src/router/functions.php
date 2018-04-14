<?php
class Reduction{

    function avoir($price, $pourcentage){

        $calcul = ($price) * ($pourcentage) / 100;
        $final = ($price) - $calcul;

        return $final;
    }

}
