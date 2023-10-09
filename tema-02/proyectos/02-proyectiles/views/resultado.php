<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</title>

    <!-- CSS Bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Iconos Bootstrap 1.11.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-rocket-takeoff"></i>
            <span class="fs-4">Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</span>
        </header>

        <legend>Resultado</legend>
        <table class="table">
            <tr>
                <th>Valores Iniciales:</th>
                <td></td>
            </tr>
            <tr>
                <td>Velocidad Inicial:</td>
                <td>
                    <?= $velIni ?> m/s
                </td>
            </tr>
            <tr>
                <td>Ángulo Inclinación:</td>
                <td>
                    <?= $angulo ?>º
                </td>
            </tr>
            <tr>
                <th>Resultados:</th>
                <td></td>
            </tr>
            <tr>
                <td>Ángulo Radianes:</td>
                <td>
                    <?= $anguloRadFo ?> Radianes
                </td>
            </tr>
            <tr>
                <td>Velocidad Inicial X:</td>
                <td>
                    <?= $velIniXFo ?> m/s
                </td>
            </tr>
            <tr>
                <td>Velocidad Inicial Y:</td>
                <td>
                    <?= $velIniYFo ?> m/s
                </td>
            </tr>
            <tr>
                <td>Alcance Máximo del Proyectil:</td>
                <td>
                    <?= $alcMaxFo ?> m
                </td>
            </tr>
            <tr>
                <td>Tiempo de Vuelo del Proyectil:</td>
                <td>
                    <?= $tiemVueFo ?> s
                </td>
            </tr>
            <tr>
                <td>Altura Máxima del Proyectil:</td>
                <td>
                    <?= $altMaxFo ?> m
                </td>
            </tr>
        </table>

        <!-- Botones de acción -->
        <br><a class="btn btn-primary" href="index.php" role="button">Volver</a>

        <!-- Pie del documento -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">
                    © 2023 Adrián Merino Gamaza - DWES - 2º DAW - Curso 23/24
                </span>
            </div>
        </footer>
    </div>

    <!-- Javascript Bootstrap 5.3.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>