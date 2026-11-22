<!doctype html>
<html lang="es">

<head>
    <!-- Cargamos la cabecera de la aplicación -->
    <?php require_once __DIR__ . '/layout/head.layout.php'; ?>
    <title>Detalle Alumno - CRUD Alumnos</title>
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
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new.php">Nuevo</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Detalles del alumno</legend>

                <!-- Campos bloqueados para que no se puedan editar -->
                <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" value="<?= $alumno->id ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($alumno->nombre ?? '') ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellidos</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($alumno->apellidos ?? '') ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($alumno->email ?? '') ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="text" class="form-control" value="<?= $alumno->f_nacimiento ? $alumno->f_nacimiento->format('d/m/Y') : '' ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Edad</label>
                    <input type="text" class="form-control" value="<?= $alumno->getEdad() ?? '' ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Curso</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($cursos[$alumno->curso] ?? '') ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Asignaturas</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars(implode(', ', array_map(
                        fn($idx) => $asignaturas[$idx] ?? '',
                        $alumno->asignaturas ?? []
                    ))) ?>" disabled>
                </div>

                <a href="index.php" class="btn-solid theme-primary">Volver</a>
            </div>
        </main>

        <!-- Pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- JS Bootstrap -->
        <?php require_once __DIR__ . '/layout/js_bootstrap.php'; ?>

    </div>
</body>

</html>