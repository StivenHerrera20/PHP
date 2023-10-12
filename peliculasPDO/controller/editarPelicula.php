<?php
try {
    // Paso 1: Crear una instancia de la clase PDO y establecer una conexión a la base de datos.
    $pdo = new PDO("mysql:host=localhost;dbname=peliculaspdo", "root", "");

    // Configurar el manejo de errores y excepciones.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Paso 2: Preparar una consulta SQL usando consultas preparadas.
    $stmt = $pdo->prepare("UPDATE pelicula SET nombrePelicula = :nombre, descripcionPelicula = :descripcion, estado = :estado, fecha = :fecha WHERE idPelicula = :id");

    // Paso 3: Vincular parámetros a la consulta preparada.
    $id = $_POST['idPelicula'];
    $nombre = $_POST['nombrePelicula'];
    $descripcion = $_POST['descripcionPelicula'];
    $estado = $_POST['estadoPelicula'];
    $fecha = date("Y-m-d");
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
    $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
    $stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);

    // Paso 4: Ejecutar la consulta preparada.
    $stmt->execute();

    header("Location: ../index.php");

    // Paso 6: Cerrar la conexión a la base de datos.
    $pdo = null;
} catch (PDOException $e) {
    // Manejo de errores en caso de que ocurra una excepción.
    echo "Error: " . $e->getMessage();
}
