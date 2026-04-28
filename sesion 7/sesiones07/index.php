<?php require 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Tecsup</title>
    <!-- Estilos de respaldo por si no carga el Bootstrap de internet -->
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; margin: 0; padding: 40px; }
        .container { max-width: 1000px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #003366; border-bottom: 3px solid #ffcc00; padding-bottom: 10px; margin-bottom: 25px; display: flex; align-items: center; }
        .btn-add { background: #28a745; color: white; text-decoration: none; padding: 10px 15px; border-radius: 5px; font-weight: bold; float: right; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th { background-color: #003366; color: white; padding: 12px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #dee2e6; }
        tr:hover { background-color: #f1f1f1; }
        .acciones a { text-decoration: none; padding: 5px 10px; border-radius: 4px; font-size: 13px; margin-right: 5px; color: white; }
        .btn-leer { background: #17a2b8; }
        .btn-editar { background: #ffc107; color: black !important; }
        .btn-borrar { background: #dc3545; }
        .badge { background: #e9ecef; padding: 4px 8px; border-radius: 4px; font-size: 12px; color: #495057; }
    </style>
</head>
<body>

<div class="container">
    <a href="agregar.php" class="btn-add">+ Agregar Nuevo Libro</a>
    <h1>📚 Biblioteca Digital Tecsup</h1>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Editorial</th>
                <th>Especialidad</th>
                <th style="text-align: center;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $res = $conexion->query("SELECT * FROM libros");
            if ($res && $res->num_rows > 0) {
                while($f = $res->fetch_assoc()): ?>
                <tr>
                    <td><strong><?php echo $f['titulo']; ?></strong></td>
                    <td><?php echo $f['autor']; ?></td>
                    <td><?php echo $f['anio']; ?></td>
                    <td><?php echo $f['editorial']; ?></td>
                    <td><span class="badge"><?php echo $f['especialidad']; ?></span></td>
                    <td class="acciones" style="text-align: center;">
                        <a href="<?php echo $f['url_recurso']; ?>" target="_blank" class="btn-leer">Leer libro</a>
                        <a href="editar.php?id=<?php echo $f['id']; ?>" class="btn-editar">Editar</a>
                        <a href="eliminar.php?id=<?php echo $f['id']; ?>" class="btn-borrar" onclick="return confirm('¿Eliminar?')">Borrar</a>
                    </td>
                </tr>
                <?php endwhile; 
            } else {
                echo "<tr><td colspan='6' style='text-align:center;'>No hay libros registrados aún.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
