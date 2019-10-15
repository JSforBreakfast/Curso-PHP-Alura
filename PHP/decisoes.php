<?php

$idade = 17;

//$nome = "Vitor";

echo "Você só pode entrar se tiver 18 anos." . PHP_EOL;

if ($idade >= 18 /*&& $nome == "Vitor"*/){
    echo "Você tem $idade anos. Pode entrar.";
} else {
    echo "Não pode entrar.";
}
