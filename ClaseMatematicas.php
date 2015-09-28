<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 28/09/2015
 * Time: 13:33
 */
include 'VerificarNumero.php';

for ($contador = 1; $contador <= 100; $contador++){

   $mostrar = VerificarNumero::DameNumero($contador);

   echo <<<MOSTRAR
              El niño {$contador} dice: ¡{$mostrar}!
              <br />
MOSTRAR;
}

?>