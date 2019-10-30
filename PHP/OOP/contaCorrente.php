<?php

class contaCorrente{
    
    public $titular;
    
    public $agencia;
    
    public $numero;
    
    public $saldo;

    public function __construct($titular,$agencia,$numero,$saldo){
            $this->titular = $titular;
            $this->agencia = $agencia;
            $this->numero = $numero;
            $this->saldo = $saldo;
    }

    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        return $this;
    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        return $this;
    }

}

?>
