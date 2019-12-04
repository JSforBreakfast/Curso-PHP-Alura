<?php

$nomes = "Godofredo, Wildineia, Jiraiya, Recoreco";

//vamnos usar a função explode porque o foreach não funciona com strings
$array_nomes = explode(", ", $nomes);

foreach($array_nomes as $nome){
    echo "Olá $nome!\n\n";
}

$nomes_juntos = implode(", ", $array_nomes);

echo $nomes_juntos;

//var_dump($array_nomes);
?>