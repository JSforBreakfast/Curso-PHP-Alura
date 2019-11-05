<?php

//ini_set("display_errors",1);
require_once "autoload.php";

use OOPII\classes\abstratas\funcionarios\Diretor;
use OOPII\classes\abstratas\funcionarios\Designer;

$diretor = new Diretor();
$designer = new Designer();


var_dump($diretor);
var_dump($designer);


?>
