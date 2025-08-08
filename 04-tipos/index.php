<?php
/*
    TIPOS DE DATOS:
    Entero (int / integer) = 99
    Coma flotante / decimales (float / double) = 3.45
    Cadenas (string) = "Hola yo soy un string"
    Booleano (bool) = true false
    null
    Array (Coleccion de datos)
    Objetos
*/

$numero = 100;
$decimal = 27.9;
$texto = "Soy un texto";
$verdadero = false;
$null = null;

echo gettype($numero);
echo '<br>';

echo gettype($decimal);
echo '<br>';

echo gettype($texto);
echo '<br>';

echo gettype($verdadero);
echo '<br>';

echo gettype($null);

// Debuggear
$nombre = "Luis Sebastian";
$arreglo[] = "Holiwis $nombre";
var_dump($nombre);
var_dump($arreglo);

?>