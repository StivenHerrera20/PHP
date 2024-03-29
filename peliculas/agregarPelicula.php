<?php
session_start();
?>

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
        <a class="navbar-brand ps-3" href="inicio.php">PELISFLIX</a>
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


                        <a class="nav-link" href="inicio.php">
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
                        <h1 class="text-center">Agregar Pelicula</h1>
                        <form action="./controller/agregarPelicula.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre Pelicula</label>
                                <input type="text" class="form-control" id="nombrePelicula" name="nombrePelicula">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Descripcion Pelicula</label>
                                <input type="text" class="form-control" id="descripcionPelicula" name="descripcionPelicula">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Edad</label>
                                <input type="number" class="form-control" id="edad" name="edad">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Estado de la pelicula</label>
                                <select class="form-select" id="estadoPelicula" name="estadoPelicula">
                                    <option value="1">Activado</option>
                                    <option value="0">Desactivado</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>

                    </div>
                    <div class="row mt-2">
                        <?php
                        if (isset($_SESSION['error'])) {
                        ?>
                            <div class="col d-flex justify-content-center">
                                <div class="alert alert-danger w-50 text-center" role="alert">
                                    <h2><?php echo $_SESSION['error'] ?></h2>
                                    <h4><?php echo $_SESSION['errorTitu'] ?></h4>
                                </div>
                            </div>
                        <?php
                            unset($_SESSION['error']);
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