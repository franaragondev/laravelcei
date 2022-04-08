<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>BIENVENIDO A MI PÁGINA</h1>
    <button id='verEmpleados'>VER EMPLEADOS</button>
    <p></p>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>EDAD</th>
            <th>BORRAR</th>
        </tr>
        <tbody id='tablaEmpleados'>
            <!-- @foreach($empleados as $empleado)
            <tr>
                <td>{{$empleado -> id}}</td>
                <td>{{$empleado -> nombre}}</td>
                <td>{{$empleado -> apellidos}}</td>
                <td>{{$empleado -> edad}}</td>
                <td><button class='borrar' value='{{$empleado->id}}'>BORRAR</button></td>
            </tr>
            @endforeach -->
        </tbody>
    </table>
    <p><a href="/add">Añade un empleado</a></p>
    <!-- <script>
    Array.from(document.getElementsByClassName('borrar')).forEach(element => {
        element.addEventListener('click', function() {
            console.log(element.value)
            if (confirm('¿ESTÁS SEGURO?')) {
                window.location.href = 'delete/' + element.value
                return true;
            } else {
                return false;
            }
        })
    })
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $('.borrar').click(function() {
        console.log($(this).val());
    })

    // $(document).on('click', '.borrar', function() {
    //     if (confirm('¿ESTÁS SEGURO, OJO?')) {
    //         $.ajax({
    //             method: 'GET',
    //             dataType: 'json',
    //             url: '<?php echo route('borrarEmpleado') ?>',
    //             data: {
    //                 '_token': '<?php echo csrf_token()?>',
    //                 'id': $(this).val()
    //             },
    //             success: function(data) {
    //                 console.log(data);
    //                 $('#tablaEmpleados').html('');
    //                 data.forEach(element => {
    //                     $('#tablaEmpleados').append(
    //                         '<tr>' +
    //                         '<td>' + element.id + '</td>' +
    //                         '<td>' + element.nombre + '</td>' +
    //                         '<td>' + element.apellidos + '</td>' +
    //                         '<td>' + element.edad + '</td>' +
    //                         "<td><button class='borrar' value='" + element.id +
    //                         "'>BORRAR</button></td>" +
    //                         '</tr> '
    //                     )
    //                 });
    //             }
    //         })
    //         return true;
    //     } else {
    //         return false;
    //     }
    // })


    $('#verEmpleados').click(function() {
        console.log('Hola');
        $.ajax({
            method: 'GET',
            dataType: 'json',
            url: '<?php echo route('mostrarEmpleados')?>',
            data: {
                '_token': "<?php echo csrf_token() ?>"
            },
            success: function(data) {
                console.log(data);
                $('#tablaEmpleados').html('')
                data.forEach(element => {
                    console.log(element);
                    $('#tablaEmpleados').append(
                        '<tr>' +
                        '<td>' + element.id + '</td>' +
                        '<td>' + element.nombre + '</td>' +
                        '<td>' + element.apellidos + '</td>' +
                        '<td>' + element.edad + '</td>' +
                        '<td><button class="borrar" value="' + element.id +
                        '">BORRAR</button></td>' +
                        '</tr>'
                    )
                });
            }
        })
    })
    </script>

</body>

</html>