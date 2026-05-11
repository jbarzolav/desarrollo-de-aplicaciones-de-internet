
<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h1>Lista de Productos</h1>

<a href="/productos/create" class="btn btn-primary mb-3">Nuevo Producto</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>S/. {{ $producto->precio }}</td>
            <td>
                @if($producto->imagen)
                <img src="{{ asset('storage/'.$producto->imagen) }}" width="80">
                @endif
            </td>
            <td>{{ $producto->categoria->nombre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
