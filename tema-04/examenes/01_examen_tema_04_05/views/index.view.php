<!doctype html>
<html lang="es">

<head>
    <!-- Head layout -->
    <?php require_once __DIR__ . '/layout/head.layout.php'; ?>
    <title>Examen 4.1 - CRUD Libros - POO Sin Encapsulamiento</title>
</head>

<body>
    <div class="container mt-3">

       <!-- header y menu layout -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <?php require_once __DIR__ . '/partials/menu.partial.php'; ?>

        <main>
            <div class="content">
                <legend>Tabla de libros - POO</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Publicación</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Etiquetas</th>
                            <th scope="col" class="text-end">Páginas</th>
                            <th scope="col" class="text-end">Stock</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       <!-- Detalles libros -->
                        <?php foreach ($libros as $indice => $libro): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $libro->id ?></th>
                                <td><?= $libro->titulo?></td>
                                <td><?= $libro->fecha_publicacion->format('d/m/Y') ?></td>
                                <td><?= $libro->autor ?></td>
                                <td><?= $categoria[$libro->categoria] ?></td>
                                <td>
                                    <?= implode(', ', array_map(
                                        fn($idx) => $etiquetas[$idx],
                                        $libro->etiquetas
                                    )) ?>
                                </td>
                                <td scope="row" class="text-end"><?= $libro->numero_paginas ?></td>
                                <td scope="row" class="text-end"><?= $libro->stock ?></td>
                                <td scope="row" class="text-end"><?= $libro->precio ?> €</td>
                                <!-- botones de acción -->
                                <td>
                                    <!-- editar -->
                                    <a href="edit.php?id=<?= $libro->id ?>" class="btn-solid theme-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!-- borrar -->
                                    <a href="#" class="btn-solid theme-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <!-- mostrar -->
                                    <a href="#" class="btn-solid theme-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9" class="text-end">Total</td>
                            <td class="text-end"><?= count($libros) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <!-- footer y js bootstrap layout -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <?php require_once __DIR__ . '/layout/js_bootstrap.layout.php'; ?>
    </div>
</body>

</html>
