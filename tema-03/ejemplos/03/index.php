<?php

/*
    Ejemplo 3
*/

$a = 6;

if ($a < 5) {
    echo "Insuficiente";
} elseif ($a < 6) {
    echo "Suficiente";
} elseif ($a < 7) {
    echo "Bien";
} elseif ($a < 9) {
    echo "Notable";
} elseif ($a < 10){
    echo "Sobresaliente";
} else {
    echo "Valor no permitido";
}

?>