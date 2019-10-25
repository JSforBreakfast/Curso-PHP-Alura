<?php

function exibeMensagem(string $mensagem){
    echo $mensagem . '<br>';
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

//o '&' faz com que a variável seja usada como referência e não como valor. Ao contrário da variável como valor, a variável como referência não é uma mera cópia. Ou seja, modificações efetuadas na referência também serão efetivas na variável em si (declaração original da variável), enaquanto que na variável que é utilizada como valor, as modificações apenas são efetivas na cópia e não na variável em si.
function titularMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);

}

function exibeConta(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
