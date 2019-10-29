<?php 

require_once "contaCorrente.php";
//se a variável for um objeto, não será possível mostrar no browser usando echo. Dá erro. É preciso utilizar var_dump();
$contaMateus = new contaCorrente("Mateus","4565","3553-4",5000,00);
$contaBruna = new contaCorrente("Bruna","4565","4563-4",7000,00);

//$contaMateus->titular = "Mateus";
//$contaMateus->agencia = "4565";
//$contaMateus->numero = "3553-4";
//$contaMateus->saldo = "5000,00";

// $contaBruna->titular = "Bruna";
// $contaBruna->agencia = "4565";
// $contaBruna->numero = "4563-4";
// $contaBruna->saldo = "7000,00";

var_dump($contaMateus);
var_dump($contaBruna);

?>
