 
<?php

namespace OOPII\classes\funcionarios;

use OOPII\classes\abstratas\Funcionario;


class Designer extends Funcionario{

    public function getBonificacao(){

        return $this->salario * 0.3;
    }
    public function aumentoSalario(){

        $this->salario *= 1.3;
    }
     
}
?>
