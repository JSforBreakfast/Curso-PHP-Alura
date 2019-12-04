<?php 

require 'arrayUtils.php';

$correntistas_e_compras = [
    "Geofano",
     12,
    "Marilodia",
    "Luizanine",
    "Luferaldo",
    "12"
    ];

var_dump($correntistas_e_compras);

arrayUtils::remover(12, $correntistas_e_compras);

var_dump($correntistas_e_compras);

//https://www.php.net/manual/en/language.types.type-juggling.php
