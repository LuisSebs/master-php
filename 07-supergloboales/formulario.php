<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>
        Formulario en PHP    
    </h1>
    <!-- Formulario -->
    <form action="recibir.php" method="GET">
        <label for="name">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellido">Edad</label>
        <input type="text" name="apellido">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>