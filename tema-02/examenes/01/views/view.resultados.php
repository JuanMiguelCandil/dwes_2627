<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen práctico 03</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-speedometer"></i>
            <span class="fs-6">Examen práctico 03 - Movimiento rectilíneo uniformemente acelerado</span>
        </header>
    
        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <h4>Resultado</h4>
                <table class="table table-sm">
                    <tr>
                        <th colspan="3">Datos introducidos:</th>
                    </tr>
                    <tr>
                        <td>Velocidad inicial:</td>
                        <td align="right"><?= $velocidad_inicial ?></td>
                        <td>m/s</td>
                    </tr>
                    <tr>
                        <td>Aceleración:</td>
                        <td align="right"><?= $aceleracion ?></td>
                        <td>m/s2</td>
                    </tr>
                    <tr>
                        <td>Tiempo:</td>
                        <td align="right"><?= $tiempo ?></td>
                        <td>s</td>
                    </tr>
                    <tr>
                        <td>Masa:</td>
                        <td align="right"><?= $masa ?></td>
                        <td>kg</td>
                    </tr>
                    <tr>
                        <th colspan="3">Resultados:</th>
                    </tr>
                    <tr>
                        <td>Velocidad final:</td>
                        <td align="right"><?= $velocidad_final = number_format($velocidad_final, 2, ",", ".") ?></td>
                        <td>m/s</td>
                    </tr>
                    <tr>
                        <td>Espacio recorrido:</td>
                        <td align="right"><?= $espacio_recorrido = number_format($espacio_recorrido, 2, ",", ".") ?></td>
                        <td>m</td>
                    </tr>
                    <tr>
                        <td>Fuerza neta:</td>
                        <td align="right"><?= $fuerza_neta = number_format($fuerza_neta, 2, ",", ".") ?></td>
                        <td>N</td>
                    </tr>
                    <tr>
                        <td>Energía cinética final:</td>
                        <td align="right"><?= $energia_final = number_format($energia_final, 2, ",", ".") ?></td>
                        <td>J</td>
                    </tr>
                </table>
            </div>
            <!-- Botones de acción -->
            <div class="btn-group" role="group">
                <a class="btn btn-primary" href="index.php">Volver</a>
            </div>
        </main>
        
        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Juan Miguel Candil Pacheco - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    </div>
  </body>
</html>