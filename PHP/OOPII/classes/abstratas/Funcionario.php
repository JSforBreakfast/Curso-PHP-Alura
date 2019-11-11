<?php

namespace OOPII\classes\abstratas;
//classes abstratas não podem ser instanciadas
abstract class Funcionario{

    public $nome;

    public $cpf;

   protected $salario;

   const piso = 980.00;
    //o salário somente poderá ser definido através do construtor
    //se em vez de usar private fosse usado protect, o valor poderia ser alterado através dentro da classe
    //utilizando private, o máximo que pode acontecer é ocorrer a criação de um outro atributo público sem alteração do valor do atributo privado
   public function __construct($cpf, $salario = self::piso){
        
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

   abstract public function getBonificacao();

    final public function aumentoSalario(){

        $this->salario *= 1.3;       
    }

}

?>
