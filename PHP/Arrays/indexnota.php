<?php 

$notas = [9, 8, 7, 6, 10, 7];


echo "<p>A nota de português é: $notas[0]\n</p>";
echo "<p>A nota de matemática é: $notas[1]\n</p>";
echo "<p>A nota de geografia é: $notas[2]\n</p>";
echo "<p>A nota de história é: $notas[3]\n</p>";
echo "<p>A nota de logica é: $notas[4]\n</p>";
echo "<p>A nota de física é: $notas[5]\n</p>";


$quantNotas = sizeof($notas);

$soma = 0;

for($i = 0; $i < $quantNotas; $i++){
    $soma += $notas[$i];
}

$media = $soma/$quantNotas;

echo "<p>A média é: $media.\n</p>"

?>
