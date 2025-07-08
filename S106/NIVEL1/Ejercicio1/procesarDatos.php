<?php
session_start();
echo "<h1>Datos Guardados</h1>";
echo "Nombre: " . $_POST['nombre'] . "<br>";
echo "Apellido: " . $_POST['apellido'] . "<br>";
echo "Email: " . $_POST['email'] . "<br>";
echo "Telefono: " . $_POST['telefono'] . "<br>";
echo "Fecha de nacimiento: " . $_POST['date'] . "<br>";

$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellido'] = $_POST['apellido'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['telefono'] = $_POST['telefono'];
$_SESSION['date'] = $_POST['date'];
?>