<?php declare(strict_types=1);

//https://dev.to/robdwaller/how-php-type-declarations-actually-work-1mm5

class ArrayUtils{

    public static function remover(int $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);
        //é necessário utilizar a função is_int() para caso o index do array seja 0.
        if (is_int($posicao)) {
            unset($array[$posicao]);
        }else{
            echo "Não foi encontrado no array.";
        }
    }
}
