<?php
try {

    $nombrePeli = $_POST['nombrePelicula'];
    $descripcionPeli = $_POST['descripcionPelicula'];
    $edad = $_POST['edad'];
    $estado = $_POST['estadoPelicula'];
    $fecha = date('Y-m-d');

    require_once "../model/mysql.php";
    $mysql = new MySql();

    $mysql->conectar();
    $consultaExiste = $mysql->efectuarConsulta("SELECT * FROM peliculas.pelicula WHERE peliculas.pelicula.nombrePelicula = '" . $nombrePeli . "'");
    $mysql->desconectar();
    if (mysqli_num_rows($consultaExiste) > 0) {
        header("Location: ../agregarPelicula.php");
        session_start();
        $_SESSION['errorTitu'] = "Error al Insertar";
        $_SESSION['error'] = "Ya existe una pelicula con este nombre";
    } else {
        $mysql->conectar();
        //Se guarda la respuesta de la consulta en la variable 
        $consulta = $mysql->efectuarConsulta("INSERT INTO peliculas.pelicula (nombrePelicula, descripcionPelicula, estado, fecha, edad)
        VALUES ('" . $nombrePeli . "','" . $descripcionPeli . "','" . $estado . "','" . $fecha . "','" . $edad . "')");
        //Se desconect de la base de datos
        $mysql->desconectar();
        header("Location: ../inicio.php");
    }



    // Paso 6: Cerrar la conexión a la base de datos.
    $pdo = null;
} catch (Exception $e) {
    // Manejo de errores en caso de que ocurra una excepción.
    echo "Error: " . $e->getMessage();
}
