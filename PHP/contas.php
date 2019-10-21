<?php

$conta1 = [
    'titular' => 'Carla',
    'saldo' => 3000
];

$conta2 = [
    'titular' => 'Guilherme',
    'saldo' => 2000
];

$conta3 = [
    'titular' => 'Danilo',
    'saldo' => 4000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo($contasCorrentes[$i]['titular']). PHP_EOL;
}