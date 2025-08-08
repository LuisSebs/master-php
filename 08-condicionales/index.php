<?php
// CONDICIONALES

$color = "rojo";

if ($color == "rojo") {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo '<br>';

echo '<br>';

// OPERADORES DE COMPARACION

/**
 * == igual
 * === identico
 * != diferente
 * <> diferente
 * !== no identico
 * < menor que
 * > mayor que
 * <= menor o igual que
 * <= mayor o igual que
 */

$year = 2019;
echo 'Es igual a 2019? <br>';
var_dump($year == 2019);
echo 'Es identico a 2019?<br>';
var_dump($year === 2019);
echo 'Es diferente a 2019?<br>';
var_dump($year != 2019);
echo 'Es diferente a 2019?<br>';
var_dump($year <> 2019);
echo 'Es no identico a 2019?<br>';
var_dump($year !== 2019);
echo 'Es menor que 2019?<br>';
var_dump($year < 2019);
echo 'Es mayor que 2019?<br>';
var_dump($year > 2019);
echo 'Es menor o igual que 2019?<br>';
var_dump($year <= 2019);
echo 'Es mayor o igual que 2019?<br>';
var_dump($year >= 2019);

?>