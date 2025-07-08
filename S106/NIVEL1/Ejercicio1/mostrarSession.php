<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Session</title>
</head>

<body>
    <?php
    echo $_SESSION['nombre'] . "<br>";
    echo $_SESSION['apellido'] . "<br>";
    echo $_SESSION['email'] . "<br>";
    echo $_SESSION['telefono'] . "<br>";
    echo $_SESSION['date'] . "<br>";
    ?>
</body>

</html>