<?php
//Controla el inicio de sesión

//Se verifica que existan datos en el formulario
if (
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pass']) && !empty($_POST['pass'])
) {

    require_once '../model/mycript.php';
    try {
        // Paso 1: Crear una instancia de la clase PDO y establecer una conexión a la base de datos.
        $pdo = new PDO("mysql:host=localhost;dbname=peliculaspdo", "root", "");

        // Configurar el manejo de errores y excepciones.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Paso 2: Preparar una consulta SQL usando consultas preparadas.
        $stmt = $pdo->prepare("SELECT
        id,
        user,
        pass
        FROM
        peliculas.usuarios
        WHERE user = :user' && 
        pass =  :pass");

        // Paso 3: Vincular parámetros a la consulta preparada.
        $user = $_POST['user'];
        $pass = encrypt($_POST['pass']);
        $stmt->bindParam(":user", $user, PDO::PARAM_STR);
        $stmt->bindParam(":pass", $pass, PDO::PARAM_STR);

        // Paso 4: Ejecutar la consulta preparada.
        $stmt->execute();

        header("Location: ../index.php");

        // Paso 6: Cerrar la conexión a la base de datos.
        $pdo = null;
    } catch (PDOException $e) {
        // Manejo de errores en caso de que ocurra una excepción.
        echo "Error: " . $e->getMessage();
    }
}
