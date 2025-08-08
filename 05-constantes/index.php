<?php
// Constantes
// Es un contenedor de informacion que no puede variar
define('nombre', 'Luis Sebastian');
define('web', 'sebs.code.com');

echo '<h1>'.nombre.'</h1>';
echo '<h2>'.web.'</h2>';

// Constantes predefinidas
echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo __LINE__.'<br>';
echo __FILE__.'<br>';

function holaMundo() {
    echo 'Estoy dentro de la funcion'.__FUNCTION__.'<br>';
}

holaMundo()
?>