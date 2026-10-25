<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2 - CRUD Artículos</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3 mb-5 pb-5">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-pc-display"></i>
            <span class="fs-6">Proyecto 3.2 - CRUD Artículos</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Formulario Nuevo Artículo</legend>

                <!-- formulario nuevo artículo -->
                <form action="create.php" method="post">
                    <div class="mb-3">
                        <label for="descripcion" class="form-label mb-2">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label mb-2">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label mb-2">Categoría</label>
                        <select class="form-select" id="categoria" name="categoria" required>
                            <option value="">Selecciona una categoría...</option>
                            <?php foreach ($categorias as $cat): ?>
                                <option value="<?= $cat ?>"><?= $cat ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="unidades" class="form-label mb-2">Unidades</label>
                        <input type="number" class="form-control" id="unidades" name="unidades" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label mb-2">Precio</label>
                        <input type="number" class="form-control" step="0.01" id="precio" name="precio" required>
                    </div>
                    <div class="mb-3">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Crear Artículo</button>
                    </div>
                </form>

            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light border-top">
            <div class="container">
                <span class="text-muted">
                    &copy; 2026 - Juan Miguel Candil Pacheco - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </div>
</body>

</html>