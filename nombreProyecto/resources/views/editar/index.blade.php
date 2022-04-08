<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>EDITANDO</h1>
    @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{Session::get('success')}}</li>
        </ul>
    </div>
    @endif
    <form action="/edit/<?php echo $empleado[0]->id; ?>" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Nombre</td>
                <td>
                    <input type='text' name='nombre' value='<?php echo$empleado[0]->nombre; ?>' />
                </td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td>
                    <input type='text' name='apellidos' value='<?php echo$empleado[0]->apellidos; ?>' />
                </td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>
                    <input type='text' name='edad' value='<?php echo$empleado[0]->edad; ?>' />
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <input type='submit' value="Actualizar Empleado" />
                </td>
            </tr>
        </table>
    </form>

    <p></p>
    <a href='/empleados'>Clica aqui para ir a los empleados</a>
</body>

</html>