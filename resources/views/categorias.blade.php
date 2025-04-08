<!DOCTYPE html>
<html>

<head>
    <title>Lista de categorias</title>
</head>

<body>
    <h1>Categorias Disponibles</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <th>{{ $categoria->id }}</th>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <button>Editar</button>
                        <button>Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
