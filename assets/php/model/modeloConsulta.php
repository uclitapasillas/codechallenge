<?php

class ModeloConsulta {

      public function invertirCadena($value){

        //Recibo la cadena y la paso en la funcion strrev() para darle reverso a la cadena
        $cadena = strrev($value);
        //Guardo la cadena original y la invertida en un array
        $datos = array('CADENA_INVERTIDA' => $cadena,
                       'CADENA_ORIGINAL' => $value);
        //Retorno los datos en json.               
        return json_encode($datos);

      }

    }
