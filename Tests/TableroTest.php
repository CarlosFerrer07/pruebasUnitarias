<?php

use PHPUnit\Framework\TestCase;

require '../Classes/Tablero.php';

class TableroTest extends TestCase {

    //voy ha comprobar que la longitud del array resultante sea de 36, esta prueba no fallará
    public function testLenght() {

        $combi = new Tablero();
        $combinaciones = $combi->generarCombinaciones();

        $longitud = count($combinaciones);

        if ($longitud !== 36) {
            throw new InvalidArgumentException("Tiene que tener 36 numeros");
        }else {
            echo "Prueba correcta";
        }
    }

    // Voy a hacer que falle la prueba, en este caso comprobaré si un array contiene un valor determinado

    public function testFailure():void  {
        
        $tab = new Tablero();
        $tablero = $tab->generarTablero();

        $this->assertContains(100, $tablero);

    }
}