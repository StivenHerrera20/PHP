<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="./assets/css2/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">PELISFLIX</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">


                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-video"></i></div>
                            Peliculas
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="row mt-2">
                        <h1 class="text-center">Editar Pelicula</h1>
                        <?php
                        try {
                            $id = $_GET['id'];
                            // Paso 1: Crear una instancia de la clase PDO y establecer una conexión a la base de datos.
                            $pdo = new PDO("mysql:host=localhost;dbname=id21435907_peliculaspdo", "id21435907_s1hg6", "Stiven20.");

                            // Configurar el manejo de errores y excepciones.
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            // Paso 2: Preparar una consulta SQL usando consultas preparadas.
                            $stmt = $pdo->prepare("SELECT * FROM pelicula WHERE idPelicula = :id");

                            // Paso 3: Vincular parámetros a la consulta preparada.
                            $stmt->bindParam(":id", $id, PDO::PARAM_STR);

                            // Paso 4: Ejecutar la consulta preparada.
                            $stmt->execute();

                            // Paso 5: Recuperar resultados.
                            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $nombre = $fila['nombrePelicula'];
                                $descripcion = $fila['descripcionPelicula'];
                                $edad = $fila['edad'];
                            }
                        ?> <form action="./controller/editarPelicula.php" method="post">
                                <input type="text" class="form-control" id="idPelicula" name="idPelicula" value="<?php echo $id ?>" hidden>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre Pelicula</label>
                                    <input type="text" class="form-control" id="nombrePelicula" name="nombrePelicula" value="<?php echo $nombre ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Descripcion Pelicula</label>
                                    <input type="text" class="form-control" id="descripcionPelicula" name="descripcionPelicula" value="<?php echo $descripcion ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Edad</label>
                                    <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $edad ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Estado de la pelicula</label>
                                    <select class="form-select" id="estadoPelicula" name="estadoPelicula">
                                        <option value="1">Activado</option>
                                        <option value="0">Desactivado</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success">Editar</button>
                            </form> <?php
                                    // Paso 6: Cerrar la conexión a la base de datos.
                                    $pdo = null;
                                } catch (PDOException $e) {
                                    // Manejo de errores en caso de que ocurra una excepción.
                                    echo "Error: " . $e->getMessage();
                                }
                                    ?>

                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./assets/js2/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="./assets/assets/demo/chart-area-demo.js"></script>
    <script src="./assets/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="./assets/js2/datatables-simple-demo.js"></script>
</body>

</html>