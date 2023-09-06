<?php
//Controla el inicio de sesión

//Se verifica que existan datos en el formulario
if (
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pass']) && !empty($_POST['pass'])
) {
    //Se hace el llamado del modelo de conexión y consultas
    require_once '../modelo/MySQL.php';

    //Se capturan las variables que vienen desde el formulario
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

    //Se instancia la clase, es decir, se llama para poder usar metodos
    $mysql = new MySQL();

    //se hace uso del metodo para conectarse a la base de datos
    $mysql->conectarBD();

    //se guarda en una variable la consulta utilizando el motodo para dicho proceso
    $usuarios = $mysql->efectuarConsulta("SELECT
    bd_login.tbl_usuario.id,
    bd_login.tbl_usuario.user,
    bd_login.tbl_usuario.pass
    FROM
    bd_login.tbl_usuario
    WHERE bd_login.tbl_usuario.user = '" . $user . "' && 
    bd_login.tbl_usuario.pass =  '" . $pass . "'");

    //se desconecta de la base de datos para liberar memoria
    $mysql->desconectar();

    //Captura los datos de la consulta, captura una sola fila
    $fila = mysqli_fetch_assoc($usuarios);
}

if (mysqli_num_rows($usuarios) > 0) {

    //inicie sesion
    //session
    header("location: ../dashboard.php");
} else {

    //de lo contrario avanza del login
    header("location: ../index.html");
}
