<!doctype html>
<html lang="es">

<head>
    <!-- head -->
     <?php require_once __DIR__ . '/layout/head.layout.php'; ?>
    <title>Examen 4.1 - CRUD Libros - POO Sin Encapsulamiento</title>
</head>

<body>
    <div class="container mt-3">

        <!-- header -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <main>
            <div class="content">
                <legend>Formulario Nuevo Libro</legend>

                <form action="create.php" method="post">
                    <!-- titulo -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <!-- fecha publicacion -->
                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">Fecha de publicación:</label>
                        <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" required>
                    </div>
                    <!-- autor -->
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                    </div>
                    <!-- Categoria -->
                    <!-- Genera dinámicamente el select de categorías a partir del array $categorias -->
                    <div class="mb-3">
                        <label for="curso" class="form-label">Categoría</label>
                        <select class="form-control combobox-toggle" id="categoria" name="categoria" required>
                            <option value="">-- Seleccionar categoria --</option>
                            <?php foreach ($categorias as $indice => $nombreCategoria): ?>
                                <option value="<?= $indice ?>" <?= ($nombreCategoria->categoria === $indice) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($nombreCategoria) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">Etiquetas</label>
                        <?php foreach ($etiquetas as $indice => $nombreEtiquetas): ?>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="asignaturas[]"
                                    value="<?= $indice ?>"
                                    id="asig_<?= $indice ?>"
                                    <?= in_array($indice, $libro->etiquetas ?? [], true) ? 'checked' : '' ?>
                                >
                                <label class="form-check-label" for="asig_<?= $indice ?>">
                                    <?= htmlspecialchars($nombreEtiquetas) ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    
                    </div>
                    <!-- etiquetas -->
                    <div class="mb-3">
                        <label class="form-label">Etiquetas:</label>
                        <!-- lista dinámica de etiquetas -->
                    </div>
                    <!-- numero_paginas -->
                    <div class="mb-3">
                        <label for="numero_paginas" class="form-label">Número de páginas:</label>
                        <input type="number" min="1" step="1" class="form-control" id="numero_paginas" name="numero_paginas"  required>
                    </div>
                    <!-- stock -->
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="number" min="0" step="1" class="form-control" id="stock" name="stock" required>
                    </div>
                    <!-- precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="precio" name="precio" required>
                    </div>
                    <br>
                    <div class="btn-group" role="group">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Guardar Libro</button>
                    </div>
                </form>
            </div>
        </main>

       <!-- footer y js_bootstrap -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <?php require_once __DIR__ . '/layout/js_bootstrap.layout.php'; ?>
    </div>
</body>

</html>
