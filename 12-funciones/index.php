<?php
/**
 * FUNCIONES
 */

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

// Respuestas
$a = 32;
$b = 24;
$c = 16;
$d = 8;

$respuestas = [$a, $b, $c, $d];

function comprobar($valor){
    return (24 % $valor == 0) && (32 % $valor == 0) & (40/X % $valor == 0) && ($valor > X);
}

// Forma de iterar 1 (FOR)
for ($i = 0 ; $i < count($respuestas) ; $i++) {
    $respuesta = $respuestas[$i];
    if (comprobar($respuesta)){
        echo 'La respuesta correcta es: '.$respuesta;
    }
}

echo '<br>';

// Forma de iterar 2 (FOREACH)
foreach ($respuestas as $respuesta) {
    if (comprobar($respuesta)){
        echo 'La respuesta correcta es: '.$respuesta;
    }
}

echo '<br>';

// Parametros opcionales
function saludar($nombre = 'compañero') {
    echo 'Hola'.' '.$nombre;
}

saludar();
echo '<br>';
saludar('Sebastian');
echo '<br>';

// Almacenar funciones en variables
$funcion = 'saludar';
$funcion();


?>