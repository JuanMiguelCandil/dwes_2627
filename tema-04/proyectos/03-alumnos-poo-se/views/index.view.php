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
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Alumnos</a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>
                    <div class="drawer-body mb-2 md:mb-0">
                        <ul class="nav navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="new.php">Nuevo</a>
                            </li>
                        </ul>
                    </div>
                </dialog>
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
                            <th scope="col">Fecha de nacimiento</th>
                            <th scope="col">Edad</th>
                            <th scope="col" class="text-end">Curso</th>
                            <th scope="col">Asignaturas</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $indice => $alumno): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $alumno->id ?></th>
                                <!-- Nombre y apellidos juntos -->
                                <td><?= $alumno->apellidos . ', ' . $alumno->nombre ?></td>
                                <td><?= $alumno->email ?></td>
                                <td><?= $alumno->f_nacimiento->format('d/m/Y') ?></td>
                                <!-- Edad calculada desde la fecha de nacimiento -->
                                <td><?= $alumno->getEdad() ?></td>
                                <td class="text-end"><?= $cursos[$alumno->curso] ?></td>
                                <!-- Array de asignaturas convertido en string -->
                                <td>
                                    <?= implode(', ', array_map(
                                        fn($indice) => $asignaturas[$indice],
                                        $alumno->asignaturas
                                    )) ?>
                                </td>

                                <!-- Acciones -->
                                <td>
                                    <a href="edit.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="delete.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="show.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>                                    
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7" class="text-end">Total de alumnos</td>
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