<?php

$nomes = "Mariana, Diogo, Raissa, Vitor";

$arrayNomes = explode(", ", $nomes);

foreach($arrayNomes as $nome) {
    echo "<p>Olá $nome</p>\n";
}

$nomesJuntos = implode(", ", $arrayNomes);

echo $nomesJuntos;

//var_dump($arrayNomes);

?>