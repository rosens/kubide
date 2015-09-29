<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 29/09/2015
 * Time: 12:56
 */

//Poner ruta absoluta porque sino falla
require_once ('C:/wamp/www/kubide/Class/ContandoNumeros.php');

class ContandoNumerosTest extends PHPUnit_Framework_TestCase
{

    //Prueba Contar
    public function testContar () {

        $esperado = "El niño 1 dice: ¡1! "."<br />";    //Cadena que esperamos
        $actual = ContandoNumeros::Contar(1);           //Cadena que devuelve el método

        $this->assertEquals ($esperado,$actual);        //Método que verifica si ambas cadenas son iguales
    }

}
