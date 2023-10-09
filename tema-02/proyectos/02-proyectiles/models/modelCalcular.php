<?php

/*
    Modelo: modelCalcular.php
    Descripción: Calcula los valores del formulario
*/

define("G", 9.8);

$velIni = $_POST['velIni'];
$angulo = $_POST['angulo'];

$anguloRad = deg2rad($angulo);
$anguloRadFo = number_format($anguloRad, 5, ",", ".");
$velIniX = $velIni * cos($anguloRad);
$velIniXFo = number_format($velIniX, 2, ",", ".");
$velIniY = $velIni * sin($anguloRad);
$velIniYFo = number_format($velIniY, 2, ",", ".");
$alcMax = (pow($velIni, 2) * sin(2 * $anguloRad)) / G;
$alcMaxFo = number_format($alcMax, 2, ",", ".");
$tiemVue = 2 * ($velIniY / G);
$tiemVueFo = number_format($tiemVue, 2, ",", ".");
$altMax = (pow($velIni, 2) * pow(sin($anguloRad), 2)) / (2 * G);
$altMaxFo = number_format($altMax, 2, ",", ".")

    ?>