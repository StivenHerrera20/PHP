<?php
require '../vendor/autoload.php';
// Paso 1: Crear una instancia de la clase PDO y establecer una conexión a la base de datos.
require "../model/MySQL.php";
$mysql = new MySql();
//Se instancia la clase
$mysql->conectar();
$consulta = $mysql->efectuarConsulta("SELECT * FROM peliculas.pelicula");
$mysql->desconectar();
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=reportePeliculas.xls");

?>
<table>
    <caption>Reporte de las peliculas</caption>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre Pelicula</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Fecha Creacion</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($consulta)) { ?>
            <tr>
                <th><?php echo $row["idPelicula"] ?></th>
                <td><?php echo $row["nombrePelicula"] ?></td>
                <td><?php echo $row["descripcionPelicula"] ?></td>
                <td><?php echo $row["estado"] ?></td>
                <td><?php echo $row["fecha"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>