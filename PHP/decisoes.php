<?php

$idade = 17;

$numPessoas = 2;

//$nome = "Vitor";

echo "Você só pode entrar se tiver 18 anos ou se tiver 16 e estiver acompanhado." . PHP_EOL;

if ($idade >= 18 /*&& $nome == "Vitor"*/){
    echo "Você tem $idade anos. Pode entrar.";
} else if ($idade >= 16 && $numPessoas > 1){
    echo "Você tem $idade, mas está acompanhado. Pode entrar.";
} else {
    echo "Não pode entrar.";
}
