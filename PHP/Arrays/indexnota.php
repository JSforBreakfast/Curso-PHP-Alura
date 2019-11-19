<?php 

$notaPortugues = 9;
$notaMatematica = 8;
$notaGeografia = 7;
$notaHistoria = 6;
$notaLogica = 10;

echo "<p>a nota de português é: $notaPortugues\n</p>";
echo "<p>a nota de matemática é: $notaMatematica\n</p>";
echo "<p>a nota de geografia é: $notaGeografia\n</p>";
echo "<p>a nota de história é: $notaHistoria\n</p>";
echo "<p>a nota de logica é: $notaLogica\n</p>";

$media = ($notaPortugues+$notaMatematica+$notaGeografia+$notaHistoria+$notaLogica)/5;

echo "<p>A média é: $media.\n</p>"

?>