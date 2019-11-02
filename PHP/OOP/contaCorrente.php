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
        validacao::verificaNumerico($valor);
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

    public function transferir(float $valor, contaCorrente $contaCorrente){
        validacao::verificaNumerico($valor);
        $this->sacar($valor);
        $contaCorrente->depositar($valor);

        return $this;
    }

    public function __get($atributo){
        validacao::protegeAtributo($atributo);
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        validacao::protegeAtributo($atributo);
        $this->$atributo = $valor;
    }

    

    private function formataSaldo(){
        return "R$ ".number_format($this->saldo,2,",",".");
    }

    public function getSaldo(){
        return $this->formataSaldo();
    }
    //tem que retornar o tipo string
    //https://www.php.net/manual/en/language.oop5.magic.php
    public function __toString(){
        return "Titular da conta é: ".$this->titular. "<br/> Seu saldo atual é de ".$this->getSaldo();
    }
}

?>
