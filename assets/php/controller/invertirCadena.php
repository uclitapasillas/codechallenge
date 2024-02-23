<?php
//incluyo mi modelo con Class ModeloConsulta en modeloConsulta.php
//incluyo funciones para evitar inyeccion sql en funciones.php
include_once dirname(dirname(__FILE__)).'/model/modeloConsulta.php';
include_once dirname(dirname(__FILE__)).'/funciones.php';

$Basicas = new Basicas();
$ModeloConsulta = new ModeloConsulta();

//Recibo el valor desde ajax
$value = $Basicas->inyeccionSQL($_POST['value']);

//Envío el valor a la funcion invertirCadena() y lo guardo en variable
$llamada = $ModeloConsulta->invertirCadena($value);

//Hago un json_decode del Array recibido
$llamada = json_decode($llamada);

//Imprimo el valor recibido desde la función
echo $llamada->CADENA_INVERTIDA;


?>
