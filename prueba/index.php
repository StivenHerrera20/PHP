<?php
/* $n = 1; */

/* if ($n == 5) {
    echo ("El numero es 5");
} else {
    echo ("El numero es diferente a 5");
} */

/* for ($i = 0; $n <= 10; $i++) {
    for ($y = 1; $y <= 10; $y++) {
        $res = $n * $y;
        echo ($n . " x " . $y . " = " . $res . "<br>");
    }
    $n++;
    echo ("<br>");
} */

/* while ($n > 0) {
    echo ("El numero es: " . $n . "<br>");
    $n--;
} */
/* 
$y = 1;
do {
    $res = $n * $y;
    echo ($n . " x " . $y . " = " . $res . "<br>");
    $y++;
} while ($y <= 10); */


$nomAcceso = "checho";
$conAcceso = "12345";

if ($_POST['nombre'] == $nomAcceso && $_POST['pass'] == $conAcceso) {
    echo ("Bienvenido al sistema");
} else {
    echo ("Usuario o contraseña incorrecta");
}
