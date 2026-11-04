<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen 3.1 - CRUD Películas</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Examen 3.1 - CRUD Películas</span>
        </header>
        

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Formulario Editar Película</legend>

                <!-- pendiente completar etiqueta form -->
                <form action="update.php?indice=<?= $indice ?>" method="post">
                    <!-- completar cada uno de los campos del formulario -->
                    <!-- titulo -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="titulo" value="<?= $pelicula['titulo'] ?>" required>
                    </div>
                    <!-- idioma -->
                     <div class="mb-3">
                        <label for="idioma" class="form-label">Idioma:</label>
                        <input type="text" class="form-control" id="idioma" value="<?= $pelicula['idioma'] ?>" required>
                    </div>
                    <!-- director -->
                     <div class="mb-3">
                        <label for="director" class="form-label">Director:</label>
                        <input type="text" class="form-control" id="director" value="<?= $pelicula['director'] ?>" required>
                    </div>
                    <!-- generos -->
                     <div class="mb-3">
                        <label for="generos" class="form-label">Generos:</label>
                        <input type="text" class="form-control" id="generos" value="<?= (implode(', ', $pelicula['generos'])) ?>" required>
                    </div>
                    <!-- año -->
                     <div class="mb-3">
                        <label for="anno" class="form-label">Año:</label>
                        <input type="number" class="form-control" id="anno" value="<?= $pelicula['anno'] ?>" required>
                    </div>
                    <!-- duración -->
                     <div class="mb-3">
                        <label for="duracion" class="form-label">Duración:</label>
                        <input type="number" class="form-control" id="duracion" value="<?= $pelicula['duracion'] ?>" required>
                    </div>
                    <!-- recaudación -->
                     <div class="mb-3">
                        <label for="recaudacion" class="form-label">Recaudación:</label>
                        <input type="number" class="form-control" id="recaudacion" value="<?= $pelicula['recaudacion'] ?>" required>
                    </div>
                    
                    <!-- botones -->
                    <br>
                    <!-- cancelar -->
                    <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                    <!-- submit -->
                    <button type="submit" class="btn-solid theme-primary">Editar Película</button>
                </form>
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

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>