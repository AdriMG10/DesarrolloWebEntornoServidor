<?php

/*
    Archivo: index.php
    Descripción: Controlador ejemplo
    Autor: Adrián Merino Gamaza
    Fecha:  26/09/2023
*/

$alumno = "Adrián Merino";

print "El alumno es: ";
print $alumno;

echo "<br>";

echo 123.45;
// Valores numéricos sin comillas
echo "<br>";

print 456.789;

echo "<br>";

// tanto echo como print son funciones, la sintaxis de PHP admite el no uso de ()
// echo puede mostrar varias cadenas es decir varios argumentos
echo "Mi nombre es ", "Adri";

// print NO admite más de un argumento, solo 1
print "Mi nombre es ". "Adri";
?>