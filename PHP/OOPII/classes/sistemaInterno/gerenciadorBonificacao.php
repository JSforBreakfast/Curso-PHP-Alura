<?php

namespace classes\sistemasInterno;

use OOPII\classes\abstratas\Funcionario;
use OOPII\classes\interfaces\Autenticavel;
use OOPII\classes\interfaces\FuncionarioAutenticavel;


class GerenciadorBonificacao implements Autenticavel{

    private $totalBonificacoes;

    private $autenticado;

    public function registrar(Funcionario $funcionario){
       if($this->autenticado){
        $this->totalBonificacoes += $funcionario->getBonificacao();
        }else{
            throw new \Exception("nao houve login.");
        }
       
        
    }

    public function getTotalBonificacoes(){

        return $this->totalBonificacoes;
    }

    public function AutentiqueAqui(FuncionarioAutenticavel $funcionario, $senha){

    }
}
?>