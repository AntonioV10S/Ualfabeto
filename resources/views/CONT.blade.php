<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios que Comienzan con T</title>
</head>
<body>
    <h1>Usuarios que Comienzan con T</h1>

    <!-- Tabla para mostrar usuarios que comienzan con 'T' -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/users') }}">Mostrar Todos los Usuarios</a>
</body>
</html>
