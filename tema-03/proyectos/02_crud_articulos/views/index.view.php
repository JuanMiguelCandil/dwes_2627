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

        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-pc-display"></i>
            <span class="fs-6">Proyecto 3.2 - CRUD Artículos</span>
        </header>

        <!-- Menú principal de la aplicación -->
        <nav class="navbar md:navbar-expand bg-1 mb-3">
            <div class="container-fluid">
                <div class="navbar-nav flex-row me-auto align-items-center">
                    <a class="nav-link px-2 fw-bold text-dark" href="index.php">Artículos</a>
                    <a class="nav-link px-2 text-primary" href="new.php">Nuevo</a>
                    
                    <!-- Menú desplegable Ordenar -->
                    <div class="nav-item">
                        <button class="nav-link text-primary border-0 bg-transparent" type="button" data-bs-toggle="menu" aria-expanded="false">
                            Ordenar
                        </button>
                        <div class="menu">
                            <a class="menu-item" href="order.php?campo=id">id</a>
                            <a class="menu-item" href="order.php?campo=descripcion">Descripcion</a>
                            <a class="menu-item" href="order.php?campo=modelo">Modelo</a>
                            <a class="menu-item" href="order.php?campo=categoria">Categoria</a>
                            <a class="menu-item" href="order.php?campo=unidades">Unidades</a>
                            <a class="menu-item" href="order.php?campo=precio">Precio</a>
                        </div>
                    </div>
                </div>

                <form class="d-flex" role="search" action="filter.php" method="GET">
                    <input class="form-control me-2" type="search" name="q" placeholder="" aria-label="Search">
                    <button class="btn-solid theme-primary" type="submit">Buscar</button>
                </form>
            </div>
        </nav>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend class="mb-3">Tabla Artículos</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Unidades</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $indice => $articulo): ?>
                            <tr>
                                <th scope="row"><?= $articulo['id'] ?></th>
                                <td><?= $articulo['descripcion'] ?></td>
                                <td><?= $articulo['modelo'] ?></td>
                                <td><?= $articulo['categoria'] ?></td>
                                <td><?= $articulo['unidades'] ?></td>
                                <td><?= $articulo['precio'] ?></td>
                                <!-- Botones de acción -->
                                <td>
                                    <a href="edit.php?indice=<?= $indice ?>" class="btn-solid theme-info" title="Editar">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="delete.php?indice=<?= $indice ?>" class="btn-solid theme-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este artículo?');">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a href="show.php?indice=<?= $indice ?>" class="btn-solid theme-warning" title="Mostrar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
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