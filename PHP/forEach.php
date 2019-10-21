<?php 

$contasCorrentes = [
    123456789 => [
        'titular' => 'Danilo',
        'saldo' => 4000
    ], 
    987456123 => [
        'titular' => 'Carla',
        'saldo' => 3000
    ], 
    321456987 => [
        'titular' => 'Guilherme',
        'saldo' => 2000
    ]
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
}