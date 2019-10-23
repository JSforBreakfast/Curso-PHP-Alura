<?php
//include não acusa erros de difitação no nome do arquivo imediatamente. O PHP vai tentar executar o programa apesar do erro no nome do aqruivo. 
//include "funcaoLink.php";

//utilizando require, caso existam erros de digitação no nome do arquivo sendo chamado, a execução do programa para de imediato.
//require_once é uma forma de evitar que o PHP tente fazer chamadas duplicadas de um arquivo. Caso isso acontecesse, o PHP acusaria o erro.
require_once "funcao2.php";

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

$contasCorrentes['123.456.789-25'] = depositar($contasCorrentes['123.456.789-25'],900);

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}