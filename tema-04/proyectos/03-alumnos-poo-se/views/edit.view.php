<!doctype html>
<html lang="es">

<head>
    <!-- Cargamos la cabecera de la aplicación -->
    <?php require_once __DIR__ . '/layout/head.layout.php'; ?>
    <title>Editar Alumno - CRUD Alumnos</title>
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
                        <a class="nav-link" href="new.php">Nuevo</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Editar alumno #<?= $alumno->id ?></legend>

                <!-- Formulario de edición de alumno -->
                <form action="update.php?id=<?= $alumno->id ?>" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= htmlspecialchars($alumno->nombre ?? '') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= htmlspecialchars($alumno->apellidos ?? '') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($alumno->email ?? '') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="f_nacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" value="<?= $alumno->f_nacimiento ? $alumno->f_nacimiento->format('Y-m-d') : '' ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso</label>
                        <select class="form-select" id="curso" name="curso" required>
                            <option value="">-- Seleccionar curso --</option>
                            <?php foreach ($cursos as $indice => $nombreCurso): ?>
                                <option value="<?= $indice ?>" <?= ($alumno->curso === $indice) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($nombreCurso) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Selección múltiple de asignaturas -->
                    <div class="mb-3">
                        <label class="form-label d-block">Asignaturas</label>
                        <?php foreach ($asignaturas as $indice => $nombreAsig): ?>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="asignaturas[]"
                                    value="<?= $indice ?>"
                                    id="asig_<?= $indice ?>"
                                    <?= in_array($indice, $alumno->asignaturas ?? [], true) ? 'checked' : '' ?>
                                >
                                <label class="form-check-label" for="asig_<?= $indice ?>">
                                    <?= htmlspecialchars($nombreAsig) ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="submit" class="btn-solid theme-primary">Editar Alumno</button>
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