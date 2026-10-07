<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Cálculo Lanzamiento Proyectiles</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  </head>
  <body>    
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-rocket-takeoff"></i>
            <span class="fs-6">Proyecto 2.2 - Cálculo Lanzamiento Proyectiles</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <!-- Campo resultado -->
                <div class="mb-3">
                    <table class="table table-sm">
                        <tr>
                            <th colspan="2">Valores iniciales:</th>
                        </tr>
                        <tr>
                            <td>Velocidad inicial:</td>
                            <td><?= $velocidad_inicial ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Ángulo de lanzamiento:</td>
                            <td><?= $angulo_lanzamiento ?> °</td>
                        </tr>
                        <tr>
                            <th colspan="2">Resultados:</th>
                        </tr>
                        <tr>
                            <td>Ángulo Radianes:</td>
                            <td><?= $angulo_rad ?> Radianes</td>
                        </tr>
                        <tr>
                            <td>Velocidad inicial X:</td>
                            <td><?= $velocidad_horizontal ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Velocidad inicial Y:</td>
                            <td><?= $velocidad_vertical ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Distancia horizontal:</td>
                            <td><?= $distancia_horizontal ?> m</td>
                        </tr>
                        <tr>
                            <td>Tiempo de vuelo:</td>
                            <td><?= $tiempo_vuelo ?> s</td>
                        </tr>
                        <tr>
                            <td>Altura máxima:</td>
                            <td><?= $altura_maxima ?> m</td>
                        </tr>
                    </table>
                </div>
                <!-- Botones de acción -->
                <div class="btn-group" role="group">
                    <a class="btn btn-primary" href="index.php">Volver</a>
                </div>
            </div>
        </main>

        <!-- pie de página de la aplicación -->
         <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">
                    &copy; 2026 - Juan Miguel Candil Pacheco - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
         </footer>

         <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </div>
  </body>
</html>