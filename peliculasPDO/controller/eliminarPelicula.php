<?php
try {
    $id = $_GET['id'];
    // Paso 1: Crear una instancia de la clase PDO y establecer una conexión a la base de datos.
    $pdo = new PDO("mysql:host=localhost;dbname=peliculaspdo", "root", "");

    // Configurar el manejo de errores y excepciones.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Paso 2: Preparar una consulta SQL usando consultas preparadas.
    $stmt = $pdo->prepare("DELETE FROM pelicula WHERE idPelicula = :id");

    // Paso 3: Vincular parámetros a la consulta preparada.
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);

    // Paso 4: Ejecutar la consulta preparada.
    $stmt->execute();

    header("Location: ../index.php");

    // Paso 6: Cerrar la conexión a la base de datos.
    $pdo = null;
} catch (PDOException $e) {
    // Manejo de errores en caso de que ocurra una excepción.
    echo "Error: " . $e->getMessage();
}
?>
?>