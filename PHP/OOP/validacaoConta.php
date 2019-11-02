<?php

class validacao {

    public static function protegeAtributo($atributo){
        if ($atributo == "titular" || $atributo == "saldo"){
            return false;
        }
    }

    public static function verificaNumerico($valor){
        //https://www.php.net/manual/en/function.is-numeric.php
        if(!is_numeric($valor)){
            echo "o valor não é um número";
        }
    }


}

?>