<!--
    Nombre: Adrián Merino Gamaza
    Curso: 2ºDAW
    Actividad: 2.3.3
    Descripción: Estado de una variable. isset(), empty(), is_null()
-->

<!--
    Ejercicio 3. isset().

    Crear un script PHP donde se muestre el resultado de 3 valores verdaderos y tres valores falsos para la función isset()
-->

<?php

$valor1 = "Adri";
$valor2 = 10;
$valor3 = false;
$valor4 = null;
$valor5;

// Valores verdaderos
var_dump(isset($valor1));
echo "<br>";

var_dump(isset($valor2));
echo "<br>";

var_dump(isset($valor3));
echo "<br>";

// Valores falsos
var_dump(isset($valor4));
echo "<br>";

var_dump(isset($valor5));
echo "<br>";

var_dump(isset($valor6));
echo "<br>";

?>