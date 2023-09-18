<?php
require_once 'model/MySQL.php';
require_once 'model/mycript.php';

$mysql = new MySQL;
$mysql->conectarBD();
$consulta = $mysql->efectuarConsulta("SELECT
peliculas.peliculas.id_Pelicula,
peliculas.peliculas.nom_Pelicula,
peliculas.peliculas.descripcion,
peliculas.peliculas.Usuarios_id_Usuario
FROM
peliculas.peliculas WHERE peliculas.peliculas.estado ='1'");
$mysql->desconectar();

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
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">PELISFLIX</a>
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

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePeliculas" aria-expanded="false" aria-controls="collapsePeliculas">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-video"></i></div>
                            Peliculas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePeliculas" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPeliculas">
                                <a class="nav-link" href="index.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-eye"></i></div>
                                    Ver Peliculas
                                </a>
                                <a class="nav-link" href="./agregarPelicula.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-plus"></i></div>
                                    Agregar Pelicula
                                </a>
                            </nav>
                        </div>


                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGeneros" aria-expanded="false" aria-controls="collapseGeneros">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-masks-theater"></i></div>
                            Generos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseGeneros" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionGeneros">
                                <a class="nav-link" href="index.html">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-eye"></i></div>
                                    Ver Generos
                                </a>
                                <a class="nav-link" href="index.html">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-plus"></i></div>
                                    Agregar Genero
                                </a>
                            </nav>
                        </div>


                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseUsuarios">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user-group"></i></div>
                            Usuarios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUsuarios" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionUsuarios">
                                <a class="nav-link" href="index.html">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-eye"></i></div>
                                    Ver Usuarios
                                </a>
                                <a class="nav-link" href="index.html">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-plus"></i></div>
                                    Agregar Usuario
                                </a>
                            </nav>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <table class="table table-striped border mt-4">
                        <thead>
                            <tr>
                                <th>ID_Pelicula</th>
                                <th>nom_Pelicula</th>
                                <th>descripcion</th>
                                <th>descripcion</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($consulta)) { ?>
                                <tr>
                                    <td><?php echo $row['id_Pelicula'] ?></td>
                                    <td><?php echo $row['nom_Pelicula'] ?></td>
                                    <td><?php echo $row['descripcion'] ?></td>
                                    <td><?php echo $row['Usuarios_id_Usuario'] ?></td>
                                    <td><a class="btn btn-success bi bi-pencil" href="./editar.php?id=<?php echo $row['id_Usuario'] ?>"></a></td>
                                    <td><a class="btn btn-danger bi bi-trash" href="./controlador/eliminar.php?id_Usuario=<?php echo $row['id_Usuario'] ?>"></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

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