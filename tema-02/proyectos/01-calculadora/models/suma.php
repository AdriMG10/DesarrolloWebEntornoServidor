<?php

/*
    Modelo: suma.php
    Descripción: suma los valores del formulario
*/

// Creo dos variables para almacenar los valores enviados POST por el formulario
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

// Creo otra variable para guardar la operación realizada
$operacion = "Sumar";

// Realizo los cálculos y lo almacena en la variable resultado
$resultado = $valor1 + $valor2;

?>