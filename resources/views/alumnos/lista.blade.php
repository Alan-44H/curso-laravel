<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
    <a href="/alumnos/crear">Nuevo Alumno</a>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Dirección</th>
                <th>Acción</th>
            </tr>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellido }}</td>
            <td>{{ $alumno->edad }}</td>
            <td>{{ $alumno->direccion }}</td>
            <td>
                <a href="/alumnos/ver/{{$alumno->id}}">Ver</a>
                <a href="/alumnos/editar/{{$alumno->id}}">Editar</a>
                <a href="/alumnos/eliminar/{{$alumno->id}}" onclick="return eliminarAlumno('Eliminar Alumno')"> Eliminar</a>
            </td>
        </tr>
        @endforeach
        </table>
    </body>
</html>
<script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
<!-- Styles -->
<style>
body {
margin: auto;
padding: 50px;
}
table, td, th {
border: 1px solid black;
}
table {
border-collapse: collapse;
width: 100%;
}
th {
height: 70px;
}
td {
height: 30px;
}
.button {
background-color:#4CAF50;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
</style>