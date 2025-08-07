<?php

// WHILE
// Estructura de control que itera o repite la ejecucion de una serie de instrucciones
// tantas veces como sea necesario, en base a  una condicion.

$i = 0;
while ($i < 10) {
    echo $i.'<br>';
    $i += 1;
}

echo '<br>';

// DO WHILE
$random = null;
do {
    $random = mt_rand(1,10);
    echo $random.'<br>';
} while ($random != 5);

echo '<br>';

// FOR
$resultado = 0;
for ($i = 0 ; $i <= 100 ; $i++) {
    $resultado += $i;
}
echo $resultado;

?>