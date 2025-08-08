<?php
/**
 * ARRAYS
 * Un array es u na coleccion o un conjunto de datos/valores, bajo un unico nombre.
 */

$pelicula = 'Batman';
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

var_dump($peliculas[2]);
var_dump($cantantes);

echo '<h1>Forma 1 de recorrer un arreglo</h1>';

// Formas de recorrer un arreglo
foreach($cantantes as $indice => $cantante){
    echo "Cantante en el indice $indice es: $cantante <br>";
}

echo '<h1>Forma 2 de recorrer un arreglo</h1>';

foreach($cantantes as $cantante){
    echo "Cantante: $cantante <br>";
}

// Arreglo asociativo

echo '<h1>Arreglo asociativo</h1>';

$persona = array(
    'nombre' => 'Luis',
    'apellido' => 'Arrieta',
    'edad' => 22,
    'estatura' => 1.70
);

// Recorrer arreglo asociativo
foreach($persona as $clave => $elemento){
    echo  "Para la clave $clave le corresponde el valor $elemento <br>";
}

echo '<br>';

foreach($persona as $clave => $elemento){
    echo "Elemento: $elemento";
}

// Arreglo multidimensional

echo '<h1>Arreglo multidimensional</h1>';

$animes = array(
    array(
        'nombre' => 'Jujutsu Kaisen',
        'protagonista' => 'Itadori'
    ),
    array(
        'nombre' => 'Dragon Ball',
        'protagonista' => 'Goku'
    ),
    array(
        'nombre' => 'Demon Slayer',
        'protagonista' => 'Tanjiro'
    )
);

var_dump($animes);
echo $animes[1]['protagonista'];

echo '<h1>Funciones en arreglos</h1>';

// Ordenar
sort($animes);
var_dump($animes);

// Ordenar definiendo el criterio de orden
uasort($animes, function($a, $b) {
    // Ordenamos por la clave protagonista
    return $a['protagonista'] <=> $b['protagonista'];
    /**
     * Operador nave espacial <=>
     * 0 si $a es igual a $b
     * -1 si $a es menorr a $b
     * 1 si $a es mayor a $b
     */
});

// Añadir elementos al array
$cantantes = [];
array_push($cantantes, 'Junior H');
array_push($cantantes, 'Gabito Ballesteros');
array_push($cantantes, 'Tito Double P');
array_push($cantantes, 'Natanael Cano');

var_dump($cantantes);

// Eliminar elementos
array_pop($cantantes); // Elimina el ultimo elemento
unset($cantantes[1]); // Elimina un elemento en especifico

echo '-----------------------------------<br>';

var_dump($cantantes);

// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice].'<br>';

// Reversa
var_dump(array_reverse($cantantes));

// Buscar en arreglo
$indice = array_search('Tito Double P', $cantantes);
echo $cantantes[$indice].'<br>';

// Tamaño del arreglo
echo sizeof($cantantes).'<br>';

?>
