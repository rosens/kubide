<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 29/09/2015
 * Time: 12:42
 */

include 'Class/ContandoNumeros.php';

//Bucle del 1 a 100 (inclusive)
for ($contador = 1; $contador <= 100; $contador++) {

    $cadena = ContandoNumeros::Contar($contador);

    echo "{$cadena}";
}

?>