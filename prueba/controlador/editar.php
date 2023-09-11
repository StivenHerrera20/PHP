<?php

if (
    isset($_POST['idEdit']) && !empty($_POST['idEdit']) &&
    isset($_POST['userEdit']) && !empty($_POST['userEdit']) &&
    isset($_POST['passEdit']) && !empty($_POST['passEdit'])
) {
    require_once '../modelo/MySQL.php';
    require_once '../modelo/mycript.php';

    //Se capturan las variables que vienen desde el formulario
    $id = $_POST['idEdit'];
    $user = $_POST['userEdit'];
    $pass = encrypt($_POST['passEdit']);

    //Se instancia la clase, es decir, se llama para poder usar metodos
    $mysql = new MySQL();

    //se hace uso del metodo para conectarse a la base de datos
    $mysql->conectarBD();
    //UPDATE Work_Tickets
    //SET Billed = true
    //se guarda en una variable la consulta utilizando el motodo para dicho proceso
    $mysql->efectuarConsulta("UPDATE
    bd_login.tbl_usuario SET bd_login.tbl_usuario.user ='" . $user . "', bd_login.tbl_usuario.pass ='" . $pass . "'
    WHERE bd_login.tbl_usuario.id = '" . $id . "'");

    //se desconecta de la base de datos para liberar memoria
    $mysql->desconectar();
    header("Location: ../dashboard.php");
}
