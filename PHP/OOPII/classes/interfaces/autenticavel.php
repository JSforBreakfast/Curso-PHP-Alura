<?php

namespace classes\interfaces;

use classes\abstratas\FuncionarioAutenticavel;

interface  Autenticavel{

    public function AutentiqueAqui(FuncionarioAutenticavel $funcionario, $senha);

    if($funcionario->senha == $senha){
        $this->autenticado = true;

    }
}

?>