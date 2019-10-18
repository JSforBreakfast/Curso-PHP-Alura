<?php 

$contador = 0;

while ($contador <= 9){
    echo "#$contador" . PHP_EOL;
    $contador = ++$contador;
}

for ($cont = 8; $cont >= 0; $cont--){
    echo "#$cont". PHP_EOL;
}
