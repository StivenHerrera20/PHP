<?php
require 'vendor/autoload.php';
// Paso 1: Crear una instancia de la clase PDO y establecer una conexión a la base de datos.
$pdo = new PDO("mysql:host=localhost;dbname=id21435907_peliculaspdo", "id21435907_s1hg6", "Stiven20.");
// Configurar el manejo de errores y excepciones.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta = $pdo->prepare("SELECT * FROM pelicula");
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=reportePeliculas.xls");
$consulta->execute();
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
        <?php while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
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