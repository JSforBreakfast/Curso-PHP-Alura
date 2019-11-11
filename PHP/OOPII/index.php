<?php

//ini_set("display_errors",1);
require_once "autoload.php";

use OOPII\classes\abstratas\funcionarios\Diretor;
use OOPII\classes\abstratas\funcionarios\Designer;
use OOPII\classes\abstratas\Funcionario;

use OOPII\classes\sistemaInterno\GerenciadorBonificacao;

$diretor = new Diretor("123.258.789-45", 15000.00);
$diretor->senha = "000000";

$designer = new Designer("147.963.456-99", 5000.00);


$gerenciador = new GerenciadorBonificacao();

$gerenciador->AutentiqueAqui($diretor ,"000000");

//$gerenciador->registrar($diretor);

//var_dump($gerenciador->getTotalBonificacao());

var_dump($diretor);
var_dump($designer);



?>
