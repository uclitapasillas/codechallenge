<?php

class ModeloConsulta {

      public function invertirCadena($value){

        $cadena = strrev($value);
        $datos = array('CADENA_INVERTIDA' => $cadena,
                       'CADENA_ORIGINAL' => $value);

        return json_encode($datos);

      }

    }
