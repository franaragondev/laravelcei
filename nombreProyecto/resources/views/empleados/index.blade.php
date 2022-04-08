<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>

<body>
    <h1>ESTOS SON MIS EMPLEADOS</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>EDAD</td>
            <td>EDITAR</td>
            <td>ELIMINAR</td>
        </tr>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellidos }}</td>
            <td>{{ $empleado->edad }}</td>
            <td><a href='editar/{{ $empleado->id }}'>Editar</a></td>
            <td><a href='delete/{{ $empleado->id }}'>Borrar</a></td>
        </tr>
        @endforeach
    </table>

    <p></p>
    <a href='/'>Clica aqui para ir al HOME</a>
</body>

</html>