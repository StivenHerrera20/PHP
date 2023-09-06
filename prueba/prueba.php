<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <form action="#" method="post">
        <label for="valor">Ingrese un numero:</label>
        <input type="text" id="valor" name="valor">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['valor'])) {
        if ($_POST['valor'] % 2 == 0) {
            echo ("El numero " . $_POST['valor'] . " es par");
        } else {
            echo ("El numero " . $_POST['valor'] . " es impar");
        }
    }   ?>
    <h1>Ejercicio 2</h1>
    <form action="#" method="post">
        <label for="num1">Ingrese el primer numero:</label>
        <input type="text" id="num1" name="num1">
        <br>
        <br>
        <label for="num2">Ingrese el segundo numero:</label>
        <input type="text" id="num2" name="num2">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['num1'], $_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if ($num1 > $num2) {
            echo ("El numero " . $num1 . " es mayor que el numero " . $num2);
        } else {
            echo ("El numero " . $num2 . " es mayor que el numero " . $num1);
        }
    }   ?>
    <h1>Ejercicio 3</h1>
    <form action="#" method="post">
        <label for="edad">Ingrese la edad:</label>
        <input type="text" id="edad" name="edad">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['edad'])) {
        $edad = $_POST['edad'];
        if ($edad < 12) {
            echo ("Es menor a 12 años");
        } else if ($edad >= 12 && $edad <= 18) {
            echo ("Edad entre 12 y 18 años");
        } else {
            echo ("Mayor de 18 años");
        }
    }   ?>
    <h1>Ejercicio 4</h1>
    <form action="#" method="post">
        <label for="edad1">Ingrese la edad:</label>
        <input type="text" id="edad1" name="edad1">
        <label for="genero">Ingrese el genero:</label>
        <select name="genero" id="genero">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['edad1'], $_POST['genero'])) {
        $edad = $_POST['edad1'];
        $genero = $_POST['genero'];
        if ($edad >= 18 && $genero == "hombre") {
            echo ("Eres mayor de edad y eres hombre");
        } else if ($edad < 18 && $genero == "mujer") {
            echo ("Eres mujer y eres menor de edad");
        }
    }   ?>
    <h1>Ejercicio 5</h1>
    <form action="#" method="post">
        <label for="numComp">Ingrese un numero:</label>
        <input type="text" id="numComp" name="numComp">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['numComp'])) {
        $num = $_POST['numComp'];
        if ($num == 0) {
            echo ("El numero es 0");
        } else if ($num < 0) {
            echo ("El numero es negativo");
        } else {
            echo ("El numero es positvo");
        }
    }   ?>
</body>

</html>