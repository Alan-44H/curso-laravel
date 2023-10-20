<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <div>
        <h2>Alumno: {{ $alumno->nombre}}  {{ $alumno->Apellido}}</h2>
        <p>Edad: {{ $alumno->edad}}</p>
        <p>Dirección: {{ $alumno->direccion}}</p>
        </div>
    </body>
</html>

<!-- Styles -->
<style>
    body {
        margin: auto;
        padding: 50px;
    }
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    div {
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
