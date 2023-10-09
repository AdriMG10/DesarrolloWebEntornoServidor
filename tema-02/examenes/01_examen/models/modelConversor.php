<?php

/*
    Modelo: modelConversor.php
    Descripción: Calcula los valores del formulario a 
    binario, octal y hexadecimal
*/

$valDec = $_POST['valDec'];

$valBin = decbin($valDec);
$valOct = decoct($valDec);
$valHex = dechex($valDec);

?>