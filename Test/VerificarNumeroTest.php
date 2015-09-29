<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 29/09/2015
 * Time: 0:45
 */

//Poner ruta absoluta porque sino falla
require_once ('C:/wamp/www/kubide/Class/VerificarNumero.php');

//VERIFICAR NUMERO TEST:
class VerificarNumeroTest extends PHPUnit_Framework_TestCase
{

    //Prueba Foo
    public function testDameNumeroFoo () {

        $foo =  VerificarNumero::DameNumero(3);
        $this->assertEquals("Foo", $foo);

    }

    //Prueba Bar!
    public function testDameNumeroBar () {

        $foo =  VerificarNumero::DameNumero(5);
        $this->assertEquals("Bar!", $foo);

    }

    //Prueba número
    public function testDameNumeroNormal () {

        $foo =  VerificarNumero::DameNumero(1);
        $this->assertEquals(1, $foo);

    }
}

?>
