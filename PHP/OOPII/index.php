<?php

//ini_set("display_errors",1);
require_once "autoload.php";

use OOPII\classes\abstratas\funcionarios\Diretor;
use OOPII\classes\abstratas\funcionarios\Designer;

$diretor = new Diretor("123.258.789-45", 15000.00);
$designer = new Designer("147.963.456-99", 5000.00);


var_dump($diretor);
var_dump($designer);


?>
