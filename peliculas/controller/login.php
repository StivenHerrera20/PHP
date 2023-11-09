<?php
//Controla el inicio de sesión

//Se verifica que existan datos en el formulario
if (
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pass']) && !empty($_POST['pass'])
) {
    session_start();
    require_once '../model/MySQL.php';
    require_once '../model/mycript.php';
    try {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $mysql = new MySql();

        //Se hace uso del metodo
        $mysql->conectar();

        //Se guarda la respuesta de la consulta en la variable 
        $consulta = $mysql->efectuarConsulta("SELECT peliculas.usuario.id, peliculas.usuario.user, peliculas.usuario.pass FROM peliculas.usuario WHERE peliculas.usuario.user='" . $user . "' && peliculas.usuario.pass='" . encrypt($pass) . "'");

        //Se desconect de la base de datos
        $mysql->desconectar();

        if (mysqli_num_rows($consulta) > 0) {
            $fila = mysqli_fetch_assoc($consulta);
            //$usuario = new usuarios();
            $_SESSION["login"] = 1;
            $_SESSION["nomUser"] = $fila['user'];
            //Traigo el modelo con la clase usuarios
            //require_once '../modelo/usuarios.php';
            header("Location: ../inicio.php");
        }


        // Paso 6: Cerrar la conexión a la base de datos.
        $pdo = null;
    } catch (Exception $e) {
        // Manejo de errores en caso de que ocurra una excepción.
        echo "Error: " . $e->getMessage();
    }
}
