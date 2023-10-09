<!--
    Nombre: Adrián Merino Gamaza
    Curso: 2ºDAW
    Actividad: 2.3.2
    Descripción: Estado de una variable. isset(), empty(), is_null()
-->

<!--
    Ejercicio 2. is_null().

    Crear un script PHP donde se muestre el resultado de 3 valores verdaderos y tres valores falsos para la función is_null()
-->

<?php

$valor1 = null;
$valor2;
$valor4 = "Adri";
$valor5 = 10;
$valor6 = false;

// Valores verdaderos
var_dump(is_null($valor1));
echo "<br>";

var_dump(is_null($valor2));
echo "<br>";

var_dump(is_null($valor3));
echo "<br>";

// Valores falsos
var_dump(is_null($valor4));
echo "<br>";

var_dump(is_null($valor5));
echo "<br>";

var_dump(is_null($valor6));
echo "<br>";

?>