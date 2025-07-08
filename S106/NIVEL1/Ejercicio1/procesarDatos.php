<?php
session_start();
echo "<h1>Datos Guardados</h1>";
echo "Nombre: " . $_POST['nombre'] . "\n";
echo "Apellido: " . $_POST['apellido'] . "\n";
echo "Email: " . $_POST['email'] . "\n";
echo "Telefono: " . $_POST['telefono'] . "\n";
echo "Fecha de nacimiento: " . $_POST['date'] . "\n";

$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellido'] = $_POST['apellido'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['telefono'] = $_POST['telefono'];
$_SESSION['date'] = $_POST['date'];
