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
    <?php
    session_start();
    echo $_SESSION["login"];
    if ($_SESSION["login"] == 1) {
    ?>
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
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                        <?php echo $_SESSION["nomUser"] ?> </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./controller/cerrarSesion.php">Cerrar Sesión </a></li>
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
                            <a class="nav-link" href="reportes.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-contract"></i></div>
                                Reportes
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row mt-2">
                            <div class="col-1"><a href="./agregarPelicula.php" class="bi bi-plus-lg btn btn-success "></a></div>
                        </div>
                        <div class="row mt-2">
                            <?php
                            try {
                                // Paso 1: Crear una instancia de la clase PDO y establecer una conexión a la base de datos.
                                $pdo = new PDO("mysql:host=localhost;dbname=peliculaspdo", "root", "");

                                // Configurar el manejo de errores y excepciones.
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                // Paso 2: Preparar una consulta SQL usando consultas preparadas.
                                $stmt = $pdo->prepare("SELECT * FROM pelicula WHERE estado = 1");

                                // Paso 4: Ejecutar la consulta preparada.
                                $stmt->execute();

                                // Paso 5: Recuperar resultados.
                                while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?> <div class="col-2 m-4">
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-header">
                                                <h4 class="card-title"><?php echo $fila['nombrePelicula'] ?></h4>
                                            </div>
                                            <div class="card-body">

                                                <h6 class="card-subtitle mb-2 text-body-secondary mt-3">Descripcion</h6>
                                                <p class="card-text"> <?php echo $fila['descripcionPelicula'] ?> </p>
                                                <div class="row d-flex">
                                                    <div class="col-6">
                                                        <a href="./controller/eliminarPelicula.php?id=<?php echo $fila['idPelicula'] ?>" class="btn btn-danger">Eliminar</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="./editarPelicula.php?id=<?php echo $fila['idPelicula'] ?>" class="btn btn-success">Editar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    /* echo "idPelicula: " . $fila['idPelicula'] . ", nombrePelicula: " . $fila['nombrePelicula'] . ", fecha: " . $fila['fecha'] . "<br>"; */
                                }

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
    <?php

    } else {
    ?>
        <div class="row h-100">
            <div class="col-12  d-flex justify-content-center align-self-center">
                <div class="card-body text-center">
                    <h1>Debes iniciar sesion primero</h1>
                    <a href="./login.php" class="btn btn-primary ">Volver</a>
                </div>
            </div>
        </div>
    <?php
    } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./assets/js2/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="./assets/assets/demo/chart-area-demo.js"></script>
    <script src="./assets/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="./assets/js2/datatables-simple-demo.js"></script>
</body>

</html>