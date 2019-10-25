<?php
//include não acusa erros de digitação no nome do arquivo imediatamente. O PHP vai tentar executar o programa apesar do erro no nome do aqruivo. 
//include "funcaoLink.php";

//utilizando require, caso existam erros de digitação no nome do arquivo sendo chamado, a execução do programa para de imediato.
//require_once é uma forma de evitar que o PHP tente fazer chamadas duplicadas de um arquivo. Caso isso acontecesse, o PHP acusaria o erro.
require_once "funcaoLink.php";

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

//$contasCorrentes['987.456.123-45'] = sacar($contasCorrentes['987.456.123-45'], 6000);

$contasCorrentes['123.456.789-25'] = depositar($contasCorrentes['123.456.789-25'],900);

unset($contasCorrentes['321.456.987-78']);

titularMaiusculas($contasCorrentes['987.456.123-45']);

//echo "<ul>";
//foreach ($contasCorrentes as $cpf => $conta){
    //list('titular' => $titular, 'saldo' => $saldo) = $conta;
    //['titular' => $titular, 'saldo' => $saldo] = $conta;
    //exibeMensagem("$cpf $titular  $saldo");
    //exibeConta($conta);}
//echo "<ul>";

// video on how to use dl, dt, and dd tags: https://www.youtube.com/watch?v=y4QwbHBUjE4
// link leadiing to stackoverflow that shows 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){?>
            <dt>
                <h3><?php echo $conta['titular']; ?> - <?php echo $cpf; ?></h3>
            </dt>
            <dd> 
                Saldo: <?php echo $conta['saldo'] ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>
