<?php

class contaCorrente{
    
    private $titular;
    
    private $agencia;
    
    private $numero;
    
    private $saldo;

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

    //public function getTitular(){
    //    return $this->titular;
    //}

    //public function getSaldo(){
    //    return $this->saldo;
    //}

    //public function setNumero($numero){
    //    return $this->numero = $numero;
    //}

    public function transferir($valor, $conta){

        $this->sacar($valor);

        $conta->depositar($valor);

        return $this;
    }

    public function __get($atributo){
        $this->protegeAtributo($atributo);
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->protegeAtributo($atributo);
        $this->$atributo = $valor;
    }

    private function protegeAtributo($atributo){
        if ($atributo == "titular" || $atributo == "saldo"){
            return false;
        }
    }

    private function formataSaldo(){
        return "R$ ".number_format($this->saldo,2,",",".");
    }

    public function getSaldo(){
        return $this->formataSaldo();
    }
}

?>
