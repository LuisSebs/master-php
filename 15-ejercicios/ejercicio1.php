<?php
/**
 * Ejercicio1. Hacer un programa en PHP que tenga un array con 8 números enteros
 * y que haga lo siguiente:
 * - Recorrerlo y mostrarlo
 * - Ordenarlo y mostrarlo
 * - Mostrar su longitud
 * - Buscar algun elemento
 * - Buscar algun elemento por 
 */

// Crear arreglo
$arreglo = [20,15,37,42,8,192,21,2];

// Recorrer y mostrarlo
foreach($arreglo as $elemento) {
    echo $elemento.'<br>';
};

echo '-------------------------<br>';

// Ordenar y mostrarlo
sort($arreglo);
foreach($arreglo as $elemento) {
    echo $elemento.'<br>';
};

echo '-------------------------<br>';

//  Mostrar su longitud

echo 'Longitud del arreglo'.sizeof($arreglo).'<br>';

echo '-------------------------<br>';

// Buscar algun elemento

$elemento = 8;
$encontrado = array_search($elemento, $arreglo);

if (empty($encontrado)){
    echo 'Elemento no encontrado: '.$elemento.'<br>';
} else {
    echo 'Elemento encontrado en el indice: '.$encontrado;
}







?>