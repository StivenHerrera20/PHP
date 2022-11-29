<?php
$id = $_GET['id'];
require_once 'app/conexion.php';    //Se conecta a la BD y devuelve $pdo el objeto de conexion
$sql = "SELECT * FROM contacto where id = ?";
$query = $pdo->prepare($sql);   //Sanitiza y prepara la ejecucion de la consulta
$query->execute([$id]); //Ejecuta la consulta
$contacto = $query->fetch(); //Devuelve solo 1 registro


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center mt-3 mb-3">AGENDA DE CONTACTO 1.0</h1>
        <div class="row mt-5">
            <div class="col-6 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Información del Contacto</h4>
                        <form action="app/actualizarContacto.php" method="POST">
                            <!-- No muestra la capa por el hidden -->
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-sm" id="id" name="id" placeholder="ID" hidden value="<?php echo $contacto[0] ?>">
                            </div>

                            <!-- <div class="mb-3">
                                <input type="text" class="form-control form-control-sm" id="id" name="id" placeholder="ID" readonly value="<?php //echo $contacto[0] 
                                                                                                                                            ?>">
                            </div> -->
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $contacto[1] ?>">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-sm" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $contacto[2] ?>">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Correo Electronico" value="<?php echo $contacto[3] ?>">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-sm" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $contacto[4] ?>">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-sm" id="foto" name="foto" placeholder="Foto">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-sm" id="estado" name="estado" placeholder="Estado">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edición de Contactos</h4>
                        <img src="./assets/LuffyChiquito.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>