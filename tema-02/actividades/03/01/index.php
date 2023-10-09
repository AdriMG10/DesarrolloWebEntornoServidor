<!--
    Nombre: Adrián Merino Gamaza
    Curso: 2ºDAW
    Actividad: 2.3.1
    Descripción: Estado de una variable. isset(), empty(), is_null()
-->

<!--
    Ejercicio 1. Conversiones de datos en expresiones.

    Crear un script PHP donde se muestre el tipo de dato y resultado de las siguientes expresiones matemáticas:
    - Multiplica valor entero con una cadena que contiene un número inicial
    - Sumar valor entero con cadena con número inicial
    - Sumar valor entero con valor float
    - Concatenar valor entero con cadena
    - Sumar valor entero con valor booleano
-->

<?php

$varInt = 9;
$varStr = "1Adri";
$varFlo = 9.99;
$varBoo = true;

// Multiplica valor entero con una cadena que contiene un número inicial
$multIntStr = $varInt * $varStr;
var_dump($multIntStr);
echo "<br>";

// Sumar valor entero con cadena con número inicial
$sumIntStr = $varInt + $varStr;
var_dump($sumIntStr);
echo "<br>";

// Sumar valor entero con valor float
$sumIntFlo = $varInt + $varFlo;
var_dump($sumIntFlo);
echo "<br>";

// Concatenar valor entero con cadena
$conIntStr = $varInt . $varStr;
echo ($conIntStr);
echo "<br>";

// Sumar valor entero con valor booleano
$sumIntBoo = $varInt + $varBoo;
var_dump($sumIntBoo);
echo "<br>";

?>