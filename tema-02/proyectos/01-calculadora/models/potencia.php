<?php

/*
    Modelo: potencia.php
    Descripción: calcula la potencia de los valores del formulario
*/

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$operacion = "Potencia";

$resultado = pow($valor1, $valor2);

?>