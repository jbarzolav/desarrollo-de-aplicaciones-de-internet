<?php 
require 'conexion.php'; 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $conexion->query("DELETE FROM libros WHERE id = $id");
}
header("Location: index.php");
?>
