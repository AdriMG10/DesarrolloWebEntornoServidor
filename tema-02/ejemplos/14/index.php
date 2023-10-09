<?php

/*
    Función is_null()

    VERDADERO
        - variable no definida
        - variable asignada al valor null
    FALSO
        - asignar el valor 0
        - asignar cualquier valor entero
        - cadena definida con ""
        - un array []
*/

// Variable no definida
$var1 = 0;
var_dump(is_null($var1));
echo "<br>";

// Variable definida sin valor asignado
$va2r = 2;
var_dump(is_null($var2));
echo "<br>";

// Variable eliminada
unset($var);

?>