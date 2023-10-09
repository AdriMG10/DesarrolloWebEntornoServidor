<!--
Nombre: Adrián Merino Gamaza
Curso: 2ºDAW
Actividad: 2.1.6
Descripción: Declaración y uso de las variables
-->

<!--
Ejercicio 6.

Crear un programa PHP en el que se declaren las siguientes variables: Nombre, Apellidos, Población, Edad, Ciclo, Curso y Módulo.
Asignar valor a dichas variables.
Insertar un título en la cabecera de la página y mostrar los valores de dichas variables en una tabla a dos columnas (Campo y Valor).
-->

<!DOCTYPE html>
<html>

<head>
    <title>Actividad 6</title>
</head>

<body>
    <h1>Información Alumno</h1>
    <?php

    $nombre = "Adrián";
    $apellidos = "Merino Gamaza";
    $poblacion = "Arcos de la Frontera";
    $edad = 20;
    $ciclo = "Desarrollo de Aplicaciones Web";
    $curso = "2º DAW 2023/2024";
    $modulo = "Desarrollo Web Entorno Servidor";

    echo "<table>";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";
    echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
    echo "<tr><td>Apellidos</td><td>$apellidos</td></tr>";
    echo "<tr><td>Población</td><td>$poblacion</td></tr>";
    echo "<tr><td>Edad</td><td>$edad</td></tr>";
    echo "<tr><td>Ciclo</td><td>$ciclo</td></tr>";
    echo "<tr><td>Curso</td><td>$curso</td></tr>";
    echo "<tr><td>Módulo</td><td>$modulo</td></tr>";
    echo "</table>";

    ?>
</body>

</html>