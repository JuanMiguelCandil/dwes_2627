<!doctype html>
<html lang="es">

<head>
    <!-- Cargamos la cabecera de la aplicación -->
    <?php require_once __DIR__ . '/layout/head.layout.php'; ?>
    <title>Nuevo Alumno - CRUD Alumnos</title>
</head>

<body>
    <!-- Capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- Cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- Menú principal de la aplicación -->
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Alumnos</a>
                <ul class="nav navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="new.php">Nuevo</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Nuevo alumno</legend>

                <!-- Formulario de alta de alumno -->
                <form action="create.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="f_nacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" required>
                    </div>

                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso</label>
                        <select class="form-select" id="curso" name="curso" required>
                            <option value="">-- Seleccionar curso --</option>
                            <?php foreach ($cursos as $idx => $nombreCurso): ?>
                                <option value="<?= $idx ?>"><?= htmlspecialchars($nombreCurso) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Selección múltiple de asignaturas -->
                    <div class="mb-3">
                        <label class="form-label d-block">Asignaturas</label>
                        <?php foreach ($asignaturas as $idx => $nombreAsig): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="asignaturas[]" value="<?= $idx ?>" id="asig_<?= $idx ?>">
                                <label class="form-check-label" for="asig_<?= $idx ?>">
                                    <?= htmlspecialchars($nombreAsig) ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Crear Alumno</button>
                    </div>
                </form>
            </div>
        </main>

        <!-- Pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- JS Bootstrap -->
        <?php require_once __DIR__ . '/layout/js_bootstrap.php'; ?>

    </div>
</body>

</html>