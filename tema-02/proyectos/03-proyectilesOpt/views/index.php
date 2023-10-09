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

        <legend>Formulario Proyectiles</legend>
        <form method="POST" action="calcular.php">
            <!-- Velocidad Inicial-->
            <div class="form-group">
                <label class="form-label">Velocidad Inicial:</label>
                <input type="number" name="velIni" class="form-control" placeholder="0" aria-describedby="helpId"
                    step="0.1" />
                <small id="helpId" class="text-muted">Velocidad en m/s</small>
            </div>
            <br />

            <!-- Ángulo Lanzamiento -->
            <div class="form-group">
                <label class="form-label">Ángulo Lanzamiento:</label>
                <input type="number" name="angulo" class="form-control" placeholder="0" aria-describedby="helpId"
                    step="0.1" />
                <small id="helpId" class="text-muted">Ángulo en grados</small>
            </div>
            <br />

            <!-- Botones de acción -->
            <button type="reset" class="btn btn-secondary">Borrar</button>
            <button type="submit" class="btn btn-primary" formaction="calcular.php">
                Calcular
            </button>
        </form>

        <!-- Pie del documento -->
        <?php include 'views/plantilla/footer.html' ?>
    </div>

    <!-- Javascript Bootstrap 5.3.2 -->
    <?php include 'views/plantilla/javascript.html' ?>
</body>

</html>