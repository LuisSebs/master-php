<?php
// Variables locales
function calcularIvaMexico($valor){
    $iva = 0.16;
    return $valor * $iva;
}

echo calcularIvaMexico(100).'<br>';

// Variables globales
$porcentaje = 0.2;
function calcular20Porciento($valor){
    global $porcentaje;
    return $valor * $porcentaje;
}

echo calcular20Porciento(100);

?>