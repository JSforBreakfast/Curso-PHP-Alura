<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorSacar) {
    if ($valorSacar > $conta['saldo']) {
        exibeMensagem("Saldo insuficiente para esta operação.");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

$contasCorrentes = [
    '123.456.789-25' => [
        'titular' => 'Danilo',
        'saldo' => 4500
    ], 
    '987.456.123-45' => [
        'titular' => 'Carla',
        'saldo' => 5000
    ], 
    '321.456.987-78' => [
        'titular' => 'Guilherme',
        'saldo' => 3500
    ]
];

$contasCorrentes['321.456.987-78'] = sacar($contasCorrentes['321.456.987-78'], 500);
$contasCorrentes['987.456.123-45'] = sacar($contasCorrentes['987.456.123-45'], 6000);

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf ." => ". $conta['titular'] . " seu saldo é de " . $conta['saldo'] . PHP_EOL);
}