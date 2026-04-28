<?php 
require 'conexion.php'; 
if(isset($_POST['guardar'])){
    $stmt = $conexion->prepare("INSERT INTO libros (titulo, autor, anio, editorial, especialidad, url_recurso) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $_POST['t'], $_POST['a'], $_POST['an'], $_POST['e'], $_POST['es'], $_POST['u']);
    $stmt->execute();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agregar Libro</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 card shadow p-4">
            <h3 class="text-success text-center">Registrar Libro</h3><hr>
            <form method="POST">
                <div class="mb-2"><label>Título</label><input type="text" name="t" class="form-control" required></div>
                <div class="mb-2"><label>Autor</label><input type="text" name="a" class="form-control" required></div>
                <div class="row">
                    <div class="col-6 mb-2"><label>Año</label><input type="number" name="an" class="form-control"></div>
                    <div class="col-6 mb-2"><label>Editorial</label><input type="text" name="e" class="form-control"></div>
                </div>
                <div class="mb-2"><label>Especialidad</label><input type="text" name="es" class="form-control"></div>
                <div class="mb-3"><label>URL Recurso</label><input type="url" name="u" class="form-control" placeholder="https://..." required></div>
                <button name="guardar" class="btn btn-success w-100">Guardar Libro</button>
                <a href="index.php" class="btn btn-link w-100 mt-2">Volver al catálogo</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
