<?php

class Tablero
{
    public function generarCombinaciones(): array
    {
        $numeros = [1, 2, 3, 4, 5, 6];
        $colores = ['RED', 'YEL', 'GRE', 'BLU', 'BLA', 'WHI'];
        $combinaciones = [];

        for ($i = 0; $i < count($numeros); $i++) {
            for ($j = 0; $j < count($colores); $j++) {
                $result = [[$numeros[$i], $colores[$j]]];

                array_push($combinaciones, $result);
            }
        }


        return $combinaciones;
    }

    public function generarTablero(): array
    {
        $filas = 6;
        $columnas = 6;

        $tablero = [];

        for ($i = 0; $i < $filas; $i++) {
            $fila = [];

            for ($j = 0; $j < $columnas; $j++) {
                $randomNumber = rand(0, 35);

                //Evito que se repita
                while (in_array($randomNumber, $fila)) {
                    $randomNumber = rand(0, 35);
                }

                $fila[] = $randomNumber;

                //si hay 6 numeros en la fila le agregamos la fila al tablero y la reiniciamos
                if (count($fila) === 6) {

                    $tablero[] = $fila;
                    $fila = [];
                }
            }
        }

        return $tablero;
    }

    public function dibujarTablero()
    {
        $tablero = $this->generarTablero();
        $combinaciones = $this->generarCombinaciones();

        $filas = 6;
        $columnas = 6;

        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $indiceTablero = $tablero[$i][$j];

                $numero = $combinaciones[$indiceTablero][0][0];
                $color = $combinaciones[$indiceTablero][0][1];
                
                echo $numero . '-' . $color . ' ';
            }
            echo "\n";
        }
    }
}
