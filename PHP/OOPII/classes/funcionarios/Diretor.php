<?php

namespace OOPII\classes\funcionarios;

use OOPII\classes\abstratas\Funcionario;

use OOPII\classes\abstratas\FuncionarioAutenticavel;

class Diretor extends FuncionarioAutenticavel{
    
    public function getBonificacao(){

        return $this->salario * 0.3; 
    }
}

?>
