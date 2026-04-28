<?php 
require 'conexion.php'; 
$id = $_GET['id'];
$res = $conexion->query("SELECT * FROM libros WHERE id = $id");
$l = $res->fetch_assoc();

if(isset($_POST['edit'])){
    $stmt = $conexion->prepare("UPDATE libros SET titulo=?, autor=?, anio=?, editorial=?, especialidad=?, url_recurso=? WHERE id=?");
    $stmt->bind_param("ssisssi", $_POST['t'], $_POST['a'], $_POST['an'], $_POST['e'], $_POST['es'], $_POST['u'], $id);
    $stmt->execute();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 card shadow p-4 border-warning">
            <h3 class="text-warning text-center">Editar Libro</h3><hr>
            <form method="POST">
                <input type="text" name="t" value="<?php echo $l['titulo']; ?>" class="form-control mb-2" required>
                <input type="text" name="a" value="<?php echo $l['autor']; ?>" class="form-control mb-2" required>
                <input type="number" name="an" value="<?php echo $l['anio']; ?>" class="form-control mb-2">
                <input type="text" name="e" value="<?php echo $l['editorial']; ?>" class="form-control mb-2">
                <input type="text" name="es" value="<?php echo $l['especialidad']; ?>" class="form-control mb-2">
                <input type="url" name="u" value="<?php echo $l['url_recurso']; ?>" class="form-control mb-3" required>
                <button name="edit" class="btn btn-warning w-100">Actualizar</button>
                <a href="index.php" class="btn btn-link w-100">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
