<!--
    Nombre: Adrián Merino Gamaza
    Curso: 2ºDAW
    Actividad: 2.1.7
    Descripción: Declaración y uso de las variables
-->

<!--
    Ejercicio 7.

    A partir del ejercicio anterior, crear un párrafo en el que se cuente una pequeña historia o descripción con los datos de dicha variables. Colocar un título.
-->

<!DOCTYPE html>
<html>

<head>
    <title>Actividad 6</title>
</head>

<body>
    <h1>Información Alumno</h1>
    <?php

    $nombre = "Adrián ";
    $apellidos = "Merino Gamaza";
    $poblacion = "Arcos de la Frontera";
    $edad = 20;
    $ciclo = "Desarrollo de Aplicaciones Web";
    $curso = "2º DAW 2023/2024";
    $modulo = "Desarrollo Web Entorno Servidor";

    echo "Me llamo $nombre $apellidos, vivo en $poblacion y tengo $edad años.
        Estudio $ciclo, estoy en el curso $curso y doy el modulo de $modulo.";

    ?>
</body>

</html>