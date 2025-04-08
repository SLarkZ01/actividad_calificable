<!DOCTYPE html>
<html>

<head>
    <title>Categorias {{ $categorias->id }}</title>
</head>

<body>
    <h1>Categorias con id = {{ $categorias->id }}</h1>
    <ul>
        <li>{{ $categorias->nombre }} - {{ $categorias->descripcion }}</li>
    </ul>
</body>

</html>
