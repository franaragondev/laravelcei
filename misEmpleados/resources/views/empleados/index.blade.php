@extends('../home')

@section('body')
<h1>Todos mis empleados</h1>
<button id='verEmpleados'>VER EMPLEADOS</button>
<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>EDAD</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>
    <tbody id='tablaEmpleados'></tbody>
</table>
<p><a href="/add">Añade un empleado</a></p>

@endsection

@section('js')
<script src="js/javascript.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).on('click', '.borrar', function() {
    if (confirm('OJO, ¿Estás seguro de borrarlo?')) {
        $.ajax({
            method: 'GET',
            dataType: 'json',
            url: '<?php echo route('borrarEmpleado') ?>',
            data: {
                "_token": "<?php echo csrf_token() ?>",
                'id': $(this).val()
            },
            success: function(data) {
                console.log(data);
                $('#tablaEmpleados').html('');
                data.forEach(element => {
                    $('#tablaEmpleados').append(
                        '<tr>' +
                        '<td>' + element.id + '</td>' +
                        '<td>' + element.nombre + '</td>' +
                        '<td>' + element.apellidos + '</td>' +
                        '<td>' + element.edad + '</td>' +
                        '<td><a href="editar/' + element.id +
                        '">EDITAR</a></td>' +
                        '<td><button class="borrar" value="' + element.id +
                        '">BORRAR</button></td>' +
                        '</tr>'
                    )
                });
            }
        });
        return true
    } else {
        return false
    }
});


$('#verEmpleados').click(function() {
    console.log('HOla');
    $.ajax({
        method: 'GET',
        dataType: 'json',
        url: '<?php echo route('mostrarEmpleados') ?>',
        data: {
            "_token": "<?php echo csrf_token() ?>"
        },
        success: function(data) {
            console.log(data);
            $('#tablaEmpleados').html('');
            data.forEach(element => {
                $('#tablaEmpleados').append(
                    '<tr>' +
                    '<td>' + element.id + '</td>' +
                    '<td>' + element.nombre + '</td>' +
                    '<td>' + element.apellidos + '</td>' +
                    '<td>' + element.edad + '</td>' +
                    '<td><a href="editar/' + element.id + '">EDITAR</a></td>' +
                    "<td><button class='borrar' value=" + element.id +
                    ">BORRAR</button></td>" +
                    '</tr>'
                )
            });
        }
    });
})
</script>
@endsection