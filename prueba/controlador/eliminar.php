<?php
require_once '../modelo/MySQL.php';

//Se capturan las variables que vienen desde el formulario
$id = $_GET['id'];

//Se instancia la clase, es decir, se llama para poder usar metodos
$mysql = new MySQL();

//se hace uso del metodo para conectarse a la base de datos
$mysql->conectarBD();

//se guarda en una variable la consulta utilizando el motodo para dicho proceso
$mysql->efectuarConsulta("DELETE
FROM
bd_login.tbl_usuario
WHERE id = '" . $id . "'");

//se desconecta de la base de datos para liberar memoria
$mysql->desconectar();
header("Location: ../dashboard.php");
