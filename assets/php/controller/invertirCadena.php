<?php

include_once dirname(dirname(__FILE__)).'/model/modeloConsulta.php';
include_once dirname(dirname(__FILE__)).'/funciones.php';

$Basicas = new Basicas();
$ModeloConsulta = new ModeloConsulta();

$value = $Basicas->inyeccionSQL($_POST['value']);

$llamada = $ModeloConsulta->invertirCadena($value);

$llamada = json_decode($llamada);

echo $llamada->CADENA_INVERTIDA;


?>
