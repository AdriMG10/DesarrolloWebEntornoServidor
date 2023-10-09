<?php

/*
    Modelo: modelOctal.php
    Descripción: Calcula los valores del formulario a octal
*/

$valTipo = 'OCTAL';

$valDec = $_POST['valDec'];

$valRes = decoct($valDec);

?>