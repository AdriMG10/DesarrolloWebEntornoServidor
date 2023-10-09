<?php

/*
    Modelo: modelHexadecimal.php
    Descripción: Calcula los valores del formulario a hexadecimal
*/

$valTipo = 'HEXADECIMAL';

$valDec = $_POST['valDec'];

$valRes = dechex($valDec);

?>