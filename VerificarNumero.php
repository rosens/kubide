<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 28/09/2015
 * Time: 13:25
 */
class VerificarNumero
{
    public static function DameNumero ($numero) {

        if ($numero % 3 == 0) {
            $devolverNumero = "Foo";
        } elseif ($numero % 5 == 0) {
            $devolverNumero = "Bar!";
        } else {
            $devolverNumero = $numero;
        }
        return $devolverNumero;
    }
}

?>