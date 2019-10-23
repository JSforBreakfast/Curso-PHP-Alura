<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorSacar): array {
    if ($valorSacar > $conta['saldo']) {
        exibeMensagem("Saldo insuficiente para esta operação.");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorDepositar): array {
    if ($valorDepositar > 0) {
        $conta['saldo'] += $valorDepositar;
    } else {
        exibeMensagem("Depósitos não podem ocasionar débito.");
    }

    return $conta;
}
