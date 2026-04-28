<?php
$conexion = new mysqli("localhost", "root", "", "biblioteca_tecsup");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
