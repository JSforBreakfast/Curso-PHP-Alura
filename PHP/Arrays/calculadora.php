<?php


class Calculadora{

    public function calculaMedia(array $notas):?float{

        $quantNotas = sizeof($notas);

        if($quantNotas > 0){
            $soma = 0;

            for($i = 0; $i < $quantNotas; $i++){
             $soma += $notas[$i];
            }

    $media = $soma/$quantNotas;
    
    return $media;
    //echo "<p>A média é: $media.\n</p>";

        } else {
            echo "<p>Não foi possível calcular a média.</p>";  
        }
    }
}

?>