<?php

ini_set("display_errors",1);
require_once "autoload.php";

use classes\funcionarios\diretor;
use classes\funcionarios\designer;


$diretor = new diretor();
$designer = new designer();


var_dump($diretor);

?>
