<?php

namespace OOPII\classes\abstratas;
//classes abstratas não podem ser instanciadas
abstract class Funcionario{

    public $nome;

    public $cpf;

    private $salario;
    //o salário somente poderá ser definido através do construtor
    //se em vez de usar private fosse usado protect, o valor poderia ser alterado através dentro da classe
    //utilizando private, o máximo que pode acontecer é ocorrer a criação de um outro atributo público sem alteração do valor do atributo privado
    public function __construct($cpf, $salario){
        
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

   abstract public function getBonificacao();

    public function aumentoSalario(){

        $this->salario *= 1.5;       
    }

}

?>
