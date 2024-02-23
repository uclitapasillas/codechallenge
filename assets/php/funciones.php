<?php

class Basicas{

  //Se crea una función para eviar ataques SQL.
  //addslashes para escapar caracteres especiales, como comillas simples o dobles,
  //strip_tags elimina todas las etiquetas HTML y PHP de la cadena
  //htmlspecialchars convierte caracteres especiales en entidades HTML
  //trim(trim()) elimina espacios en blanco al principio y al final de la cadena
  //nl2br convierte saltos de línea en etiquetas HTML <br>

    public function inyeccionSQL($string){
        $string = addslashes($string);
        $string = strip_tags($string);
        $string = htmlspecialchars($string);
        $string = trim(trim($string));
        $string = nl2br($string);
        return $string;
    }
}



?>
