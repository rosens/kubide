<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 28/09/2015
 * Time: 13:33
 */

include 'Class/VerificarNumero.php';

//Bucle del 1 a 100 (inclusive)
for ($contador = 1; $contador <= 100; $contador++){

    //Llamamos a la función DameNumero y lo recogemos en una variable para mostrarla
   $mostrar = VerificarNumero::DameNumero($contador);

   echo <<<MOSTRAR
              El niño {$contador} dice: ¡{$mostrar}!
              <br />
MOSTRAR;
}

?>