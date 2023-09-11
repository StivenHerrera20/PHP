<?php
//Controla el inicio de sesión

//Se verifica que existan datos en el formulario
if (
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pass']) && !empty($_POST['pass'])
) {
    //Se hace el llamado del modelo de conexión y consultas
    require_once '../modelo/MySQL.php';
    require_once '../modelo/mycript.php';

    //Se capturan las variables que vienen desde el formulario
    $user = $_POST['user'];
    $pass = encrypt($_POST['pass']);

    //Se instancia la clase, es decir, se llama para poder usar metodos
    $mysql = new MySQL();

    //se hace uso del metodo para conectarse a la base de datos
    $mysql->conectarBD();

    //se guarda en una variable la consulta utilizando el motodo para dicho proceso
    $usuarios = $mysql->efectuarConsulta("INSERT INTO 
    bd_login.tbl_usuario (user, pass) VALUES ('" . $user . "','" . $pass . "')");

    //se desconecta de la base de datos para liberar memoria
    $mysql->desconectar();
    header("location: ../dashboard.php");
}
