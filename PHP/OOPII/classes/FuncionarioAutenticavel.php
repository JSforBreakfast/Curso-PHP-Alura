<?php
namespace OOPII\classes\abstratas;

use OOPII\classes\abstratas\Funcionario;


class FuncionarioAutenticavel extends Funcionario{

    public $senha;

    public function autenticar($senha){
        //return ($senha == $this->senha)?true:false;
        if($senha == $this->senha){
            return true;
        } 
    }
}

?>