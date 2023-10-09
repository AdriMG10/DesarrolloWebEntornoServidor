<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/plantilla/head.html' ?>
    <title>Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</title>
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
        <?php include 'views/plantilla/footer.html' ?>
    </div>

    <!-- Javascript Bootstrap 5.3.2 -->
    <?php include 'views/plantilla/javascript.html' ?>
</body>

</html>