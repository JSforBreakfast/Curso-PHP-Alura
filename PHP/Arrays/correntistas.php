<?php 

require 'arrayUtils.php';

$correntistas_e_compras = [
    "Geofano",
     12,
    "Marilodia",
     25,
    "Luizanine",
    "Luferaldo",
    "12"
    ];



var_dump($correntistas_e_compras);

arrayUtils::remover("Geofano", $correntistas_e_compras);

var_dump($correntistas_e_compras);