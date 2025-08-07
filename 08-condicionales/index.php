

<?php

// Ejemplo 5
/*
 * P es mayor a X, a su vez P es factor de 24, 32 y 40/X. Además,
 * X es la raiz cuadrada de 25. ¿Cuál es el valor de P?
 * 
 * a) 8
 * b) 16
 * c) 24
 * d) 32
 */

// X
define('X', sqrt(25));

$a = 32;
$b = 24;
$c = 16;
$d = 8;

if ((24 % $a == 0) && (32 % $a == 0) & (40/X % $a == 0) && ($a > X)) {
    echo "P = $a";
} else if ((24 % $b == 0) && (32 % $b == 0) & (40/X % $b == 0) && ($b > X)) {
    echo "P = $b";
} else if ((24 % $c == 0) && (32 % $c == 0) & (40/X % $c == 0) && ($c > X)) {
    echo "P = $c";
} else if ((24 % $d == 0) && (32 % $d == 0) & (40/X % $d == 0) && ($d > X)) {
    echo "P = $d";
} else {
    echo 'Ninguno es la respuesta correcta';
}

echo '<br>';

// Ejemplo 6

$dia = 1;

switch($dia){
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    case 6:
        echo "SABADO";
        break;
    case 7:
        echo "DOMINGO";
        break;
}

echo '<br>';

// Ejercicio 7
goto bandera;

echo "Instruccion 1";
echo "Instruccion 2";
echo "Instruccion 3";
echo "Instruccion 4";

bandera:
echo "Me salte 4 instrucciones"

?>