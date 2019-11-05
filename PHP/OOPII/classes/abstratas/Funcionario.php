<?php

namespace OOPII\classes\abstratas;

class Funcionario{

    public $nome;

    public $cpf;

    private $salario;
    //https://www.php.net/manual/en/language.oop5.visibility.php
    //https://www.php.net/manual/en/language.oop5.inheritance.php
    //o salário somente poderá ser definido através do construtor
    //se em vez de usar private fosse usado protect, o valor poderia ser alterado através dentro da classe
    //utilizando private, o máximo que pode acontecer é ocorrer a criação de um outro atributo público sem alteração do valor do atributo privado
    public function __construct($cpf, $salario){
        
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

}

?>
