<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 28/09/2015
 * Time: 13:33
 */

include 'VerificarNumero.php';

class ContandoNumeros
{
    //CONTAR: Funci�n Static para poder llamarla sin necesidad de instanaciar el objeto
    public static function Contar ($contador)
    {
            //Llamamos a la funci�n DameNumero y lo recogemos en una variable para mostrarla
            $mostrar = VerificarNumero::DameNumero($contador);

            $cadena = "El ni�o ".$contador. " dice: �".$mostrar."! <br />";

        return $cadena;
    }
}

?>