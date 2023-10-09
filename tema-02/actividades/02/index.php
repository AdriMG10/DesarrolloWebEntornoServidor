<!--
    Nombre: Adrián Merino Gamaza
    Curso: 2ºDAW
    Actividad: 2.2
    Descripción: Tipos de datos y conversión
-->

<!--
    Crear un script PHP que cumpla con los siguientes requisitos:
    - Asignar a una variable un valor de cualquier tipo
    - Mostrar el valor de la variable si se convierte a int
    - Mostrar el valor de la variable si se convierte a bool
    - Mostrar el valor de la variable si se convierte a string
    - Mostrar el valor de la variable si se convierte a float

    De este ejercicio se deberán entregar 3 versiones:
        1. Usando las funciones de conversión, ejemplo intval()
        2. Usando la función settype()
        3. Haciendo la conversión de forma implícita, (int) $var
-->

<!DOCTYPE html>
<html>

<head>
    <title>Actividad 2.2</title>
</head>

<body>
    <h1>Actividad 2.2: Tipos de datos y conversión</h1>
    <h3>Versión 1: Usando funciones de conversión</h3>

    <?php

    // Asignar a una variable un valor de cualquier tipo
    $var = 9;

    $varInt = intval($var);
    $varBoo = boolval($var);
    $varStr = strval($var);
    $varFlo = floatval($var);

    // Mostrar el valor de la variable si se convierte a int
    var_dump($varInt);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a bool
    var_dump($varBoo);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a string
    var_dump($varStr);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a float
    var_dump($varFlo);
    echo "<br>";

    ?>

    <h3>Versión 2: Usando la función settype()</h3>

    <?php

    settype($varInt, "int");
    settype($varBoo, "bool");
    settype($varStr, "string");
    settype($varFlo, "float");

    // Mostrar el valor de la variable si se convierte a int
    var_dump($varInt);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a bool
    var_dump($varBoo);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a string
    var_dump($varStr);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a float
    var_dump($varFlo);
    echo "<br>";

    ?>

    <h3>Versión 3: Haciendo la conversión de forma implícita, (int) $var</h3>

    <?php

    $varInt = (int) $var;
    $varBoo = (bool) $var;
    $varStr = (string) $var;
    $varFlo = (float) $var;

    // Mostrar el valor de la variable si se convierte a int
    var_dump($varInt);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a bool
    var_dump($varBoo);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a string
    var_dump($varStr);
    echo "<br>";

    // Mostrar el valor de la variable si se convierte a float
    var_dump($varFlo);
    echo "<br>";

    ?>
</body>

</html>