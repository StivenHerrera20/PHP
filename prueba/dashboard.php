<?php
require_once 'modelo/MySQL.php';

$mysql = new MySQL;
$mysql->conectarBD();
$consulta = $mysql->efectuarConsulta("SELECT
bd_login.tbl_usuario.id,
bd_login.tbl_usuario.user,
bd_login.tbl_usuario.pass
FROM
bd_login.tbl_usuario");
$mysql->desconectar();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <h1>dashboard</h1>
        </div>
        <div class="row justify-content-center ">
            <div class="col-12 mt-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($consulta)) { ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['user'] ?></td>
                                <td><?php echo $row['pass'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>


                </table>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>