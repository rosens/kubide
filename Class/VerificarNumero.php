<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 28/09/2015
 * Time: 13:25
 */

//VERIFICAR NUMERO
class VerificarNumero
{
    //DAME NUMERO: (Funci�n Statica para poder llamarla sin instanciar objeto)
    public static function DameNumero ($numero) {

        if ($numero % 3 == 0) {         //Si es divisible entre 3
            $devolverNumero = "Foo";
        } elseif ($numero % 5 == 0) {   //Si es divisible entre 5
            $devolverNumero = "Bar!";
        } else {                        //Si es otro tipo de n�mero
            $devolverNumero = $numero;
        }
        return $devolverNumero;
    }
}

?>