<?php

/*
    Nombre: Adrián Merino Gamaza
    Curso: 2ºDAW
    Actividad: 2.1.4
    Descripción: Declaración y uso de las variables
*/

/*
    Ejercicio 4.

    Crear en un script Php que cree dos variables una de tipo float y otra de tipo int.
    Almacenar en nuevas variables el resultado de la suma, resta, división, producto y potencia.
    Mostrar mediante var_dump() las variables con los resultados de las operaciones anteriores.
*/

$varFloat = 9.99;
$varInt = 5;

$suma = $varFloat + $varInt;
$resta = $varFloat - $varInt;
$division = $varFloat / $varInt;
$producto = $varFloat * $varInt;
$potencia = pow($varFloat, $varInt);

echo "Suma: ";
var_dump($suma);

echo "<br>Resta: ";
var_dump($resta);

echo "<br>División: ";
var_dump($division);

echo "<br>Producto: ";
var_dump($producto);

echo "<br>Potencia: ";
var_dump($potencia);

echo "<br>";

?>