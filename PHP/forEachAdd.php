<?php 

$contasCorrentes = [
    '123.456.789-25' => [
        'titular' => 'Danilo',
        'saldo' => 4000
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
//adicionar elementos a um array em PHP
$contasCorrentes['132.456.879-45'] = [
    'titular' => 'Marina',
    'saldo' => 5000
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf ." => ". $conta['titular'] . PHP_EOL;
}