<?php

/*
    Función isset()

    VERDADERO
        - asignar el valor 0
        - asignar cualquier valor entero
        - cadena definida con ""
        - un array []
    FALSO
        - variable no definida
        - variable asignada al valor null
*/

// casos
var_dump(isset($var1));
echo "<br>";

$var2 = 2;
var_dump(isset($var2));
echo "<br>";

$var3 = "";
var_dump(isset($var3));
echo "<br>";

$var4 = [];
var_dump(isset($var4));
echo "<br>";

?>