<?php
//Controla el inicio de sesión

//Se verifica que existan datos en el formulario
if (
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pass']) && !empty($_POST['pass'])
) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    require_once '../model/mycript.php';
    require_once '../model/MySQl.php';

    try {
        $mysql = new MySql();
        //Se instancia la clase
        $mysql->conectar();
        $consulta2 = $mysql->efectuarConsulta("SELECT * FROM peliculas.usuario WHERE peliculas.usuario.user ='" . $user . "'");
        $mysql->desconectar();

        if (mysqli_num_rows($consulta2) > 0) {
            header("Location: ../resgitro.php");
            session_start();
            $_SESSION['mensajeErr'] = "El usuario ya existe en la Base de Datos";
            $_SESSION['mensaje2Err'] = "Fallo al insertar";
        } else {
            $mysql->conectar();
            //Se guarda la respuesta de la consulta en la variable 
            $consulta = $mysql->efectuarConsulta("INSERT INTO peliculas.usuario (user,pass) VALUES ('" . $user . "','" . encrypt($pass) . "')");
            //Se desconect de la base de datos
            $mysql->desconectar();

            header("Location: ../index.php");
        }



        // Paso 6: Cerrar la conexión a la base de datos.
        $pdo = null;
    } catch (PDOException $e) {
        // Manejo de errores en caso de que ocurra una excepción.
        echo "Error: " . $e->getMessage();
    }
}
