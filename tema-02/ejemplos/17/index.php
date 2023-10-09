<?php

/*
    Función empty()

    VERDADERO
    - variable no definida
    - variable asignada al valor null
    - asignar el valor 0
    - cadena definida con ""
    - un arrat []
    FALSO
    - asignar cualquier valor entero
*/

// casos
var_dump(empty($var1));
echo "<br>";

$var2 = null;
var_dump(empty($var2));
echo "<br>";

$var3 = 0;
var_dump(empty($var3));
echo "<br>";

$var4 = 3;
var_dump(empty($var4));
echo "<br>";

$var5 = "";
var_dump(empty($var5));
echo "<br>";

$var6 = [];
var_dump(empty($var6));
echo "<br>";

?>