<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AÑADIR</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Añadir Empleado</h1>

    <form action="/addEmpleado" method='post'>
        <!-- SUPER IMPORTANTE -->
        {{csrf_field()}}
        <div>
            <p>Nombre</p>
            <input name='nombre' id='nombre'>
        </div>
        <div>
            <p>Apellidos</p>
            <input name='apellidos' id='apellidos'>
        </div>
        <div>
            <p>Edad</p>
            <input name='edad' id='edad'>
        </div>
        <div>
            <p></p>
            <input type='submit' value='Añadir'>
        </div>
    </form>

    <p><a href="/empleados">VER TODOS LOS EMPLEADOS</a></p>
</body>

</html>