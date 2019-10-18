<?php
$massaKg = 78;
$altura = 1.87;
$IMC = $massaKg/($altura**2);

if ($IMC <= 18.5){
    echo "Você está abaixo do peso.". PHP_EOL;
} else if ($IMC > 18.5 && $IMC <= 24.9){
    echo "Seu peso é saudável.". PHP_EOL;
} else if ($IMC >= 25 && $IMC <= 29.9){
    echo "Você está com excesso de peso.". PHP_EOL;
} else if ($IMC >= 30 && $IMC <= 34.9){
    echo "Você está com obesidade leve.". PHP_EOL;
} else if ($IMC >= 35 && $IMC <= 39.9){
    echo "Você está com obesidade severa.". PHP_EOL;
} else {
    echo "Você está com obesidade mórbida.". PHP_EOL;
}

echo "Seu IMC é de aproximadamente ", round($IMC), ".";