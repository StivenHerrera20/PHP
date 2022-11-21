<?php

$opcion = 90;

switch ($opcion) {
    case '1':
        echo "Hamburguesa";
        break;
        case '2':
            echo "Pizza";
            break;
            case '3':
                echo "Arroz con pollo";
                break;
                case '4':
                    echo "Mondongo";
                    break;
    default:
        echo "No selecciono una opcion correcta!";
        break;
}