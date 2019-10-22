<?php

function exibeMensagem ($mensagem){
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '123.456.789-25' => [
        'titular' => 'Danilo',
        'saldo' => 500
    ], 
    '987.456.123-45' => [
        'titular' => 'Carla',
        'saldo' => 3000
    ], 
    '321.456.987-78' => [
        'titular' => 'Guilherme',
        'saldo' => 2000
    ]
];

if (600 > $contasCorrentes['123.456.789-25']['saldo']){
    exibeMensagem("Valor acima do limite permitido.");
} else { 
    $contasCorrentes['123.456.789-25']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf ." => ". $conta['titular'] . " seu saldo é de " . $conta['saldo'] . PHP_EOL);
}