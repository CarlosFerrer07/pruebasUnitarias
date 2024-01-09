<?php

require_once "./classes/Tablero.php";

$tablero = new Tablero;

var_dump(count($tablero->generarCombinaciones()));

/* $tab = $tablero->generarTablero();

var_dump($tab); */

/* var_dump("MIRA ESTE: " . $tab[0][1]); */

$tablero->dibujarTablero();