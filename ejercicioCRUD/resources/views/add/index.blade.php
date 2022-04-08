<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AÑADIR EMPLEADO</title>
</head>

<body>
    <form action="/addEmployee" method="post">
        {{csrf_field()}}
        <div>
            <p>Nombre</p>
            <input name='nombre'>
        </div>
        <div>
            <p>Apellidos</p>
            <input name='apellidos'>
        </div>
        <div>
            <p>Edad</p>
            <input name='edad'>
        </div>
        <div>
            <p></p>
            <input type='submit' value='Añadir'>
        </div>
    </form>

    <p><a href="/">Volver al Home</a></p>
</body>

</html>