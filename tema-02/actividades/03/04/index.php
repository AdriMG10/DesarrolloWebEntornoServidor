<!--
    Nombre: Adrián Merino Gamaza
    Curso: 2ºDAW
    Actividad: 2.3.4
    Descripción: Estado de una variable. isset(), empty(), is_null()
-->

<!--
    Ejercicio 4. empty().

    Crear un script PHP donde se muestre el resultado de 3 valores verdaderos y tres valores falsos para la función empty()
-->

<?php

$valor1 = false;
$valor2 = null;
$valor3;
$valor4 = "Adri";
$valor5 = 10;
$valor6 = true;

// Valores verdaderos
var_dump(empty($valor1));
echo "<br>";

var_dump(empty($valor2));
echo "<br>";

var_dump(empty($valor3));
echo "<br>";

// Valores falsos
var_dump(empty($valor4));
echo "<br>";

var_dump(empty($valor5));
echo "<br>";

var_dump(empty($valor6));
echo "<br>";

?>