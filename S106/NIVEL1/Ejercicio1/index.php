<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>

<body>
    <form action="procesarDatos.php" method="post">
        
        <h1>Datos del Usuario</h1>
        <label for="nombre"> Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellido"> Apellido: </label>
        <input type="text" name="apellido" id="apellido">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <label for="telefono"> Telefono: </label>
        <input type="number" name="telefono" id="telefono">
        <label for="date">Fecha de Nacimiento: </label>
        <input type="date" name="date" id="date">

        <input type="submit" value="Enviar">

    </form>
</body>

</html>