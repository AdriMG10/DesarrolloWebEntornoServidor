<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Incluir head -->
    <?php include 'views/layouts/head.html' ?>
    <title>Resultado</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- Cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-calculator"></i>
            <span class="fs-6">Calculadora Conversor Decimal</span>
        </header>

        <!-- Resultados -->
        <legend>Resultados</legend>
        <table class="table">
            <tr>
                <th>
                    DECIMAL
                </th>
                <td>
                    <?= $valDec ?>
                </td>
            </tr>
            <tr>
                <th>
                    <?= $valTipo ?>
                </th>
                <td>
                    <?= $valRes ?>
                </td>
            </tr>
        </table>

        <!-- Botón de volver -->
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>

        <!-- Pie del documento -->
        <?php include 'views/layouts/footer.html' ?>

    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>