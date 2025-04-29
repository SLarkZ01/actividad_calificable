<!DOCTYPE html>
<html>

<head>
    <title>Categorias {{ $categoria->id }}</title>
</head>

<body>
    <h1>Categorias con id = {{ $categoria->id }}</h1>
    <ul>
        <li>{{ $categoria->nombre }} - {{ $categoria->descripcion }}</li>
    </ul>
    <a href="{{ route('categorias') }}">Volver a la lista</a>
</body>

</html>
