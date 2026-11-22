<!doctype html>
<html lang="es">

<head>
    <!-- Cargar la cabecera de la aplicación -->
    <?php require_once __DIR__ . '/layout/head.layout.php'; ?>
    <title>Proyecto 4.3 - CRUD Alumnos - POO Sin Encapsulación</title>
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- Menú principal de la aplicación -->
        <nav class="navbar md:navbar-expand bg-1 mb-3">
            <div class="container-fluid">
                <div class="navbar-nav flex-row me-auto align-items-center">
                    <a class="nav-link px-2 fw-bold text-dark" href="index.php">Alumnos</a>
                    <a class="nav-link px-2 text-primary" href="new.php">Nuevo</a>

                    <!-- Menú desplegable Ordenar -->
                    <div class="nav-item">
                        <button class="nav-link text-primary border-0 bg-transparent" type="button" data-bs-toggle="menu" aria-expanded="false">
                            Ordenar
                        </button>
                        <div class="menu">
                            <a class="menu-item" href="order.php?campo=id">id</a>
                            <a class="menu-item" href="order.php?campo=alumno">Alumno</a>
                            <a class="menu-item" href="order.php?campo=email">Email</a>
                            <a class="menu-item" href="order.php?campo=f_nacimiento">Fecha de nacimiento</a>
                            <a class="menu-item" href="order.php?campo=edad">Edad</a>
                            <a class="menu-item" href="order.php?campo=curso">Curso</a>
                            <a class="menu-item" href="order.php?campo=asignaturas">Asignaturas</a>
                        </div>
                    </div>
                </div>

                <form class="d-flex gap-2" method="GET" action="filter.php">
                    <input
                        class="form-control"
                        type="search"
                        name="q"
                        placeholder="Buscar..."
                        value="<?= htmlspecialchars($busqueda ?? '') ?>"
                        aria-label="Buscar">
                    <button class="btn-solid theme-primary" type="submit">Buscar</button>
                </form>
            </div>
        </nav>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Tabla de alumnos - POO</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Alumno</th>
                            <th scope="col">Email</th>
                            <th scope="col">Fecha nacimiento</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Asignaturas</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $indice => $alumno): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $alumno->id ?></th>
                                <td><?= $alumno->apellidos . ', ' . $alumno->nombre ?></td>
                                <td><?= $alumno->email ?></td>
                                <td><?= $alumno->f_nacimiento->format('d/m/Y') ?></td>
                                <td><?= $alumno->getEdad() ?></td>
                                <td><?= $cursos[$alumno->curso] ?></td>
                                <td>
                                    <?= implode(', ', array_map(
                                        fn($idx) => $asignaturas[$idx],
                                        $alumno->asignaturas
                                    )) ?>
                                </td>
                                <!-- botones de acción -->
                                <td>
                                    <!-- editar -->
                                    <a href="edit.php?id=<?= $alumno->id ?>" class="btn-solid theme-info">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!-- borrar -->
                                    <a href="delete.php?id=<?= $alumno->id ?>" class="btn-solid theme-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <!-- mostrar -->
                                    <a href="show.php?id=<?= $alumno->id ?>" class="btn-solid theme-warning">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7" class="text-end">Total</td>
                            <td class="text-end"><?= count($alumnos) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layout/js_bootstrap.php'; ?>

    </div>
</body>

</html>